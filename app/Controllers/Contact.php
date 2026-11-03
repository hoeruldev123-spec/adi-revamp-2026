<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Contact extends Controller
{
    public function index()
    {
        // Random captcha
        $num1 = rand(1, 9);
        $num2 = rand(1, 9);

        session()->set('captcha_answer', $num1 + $num2);

        return view('pages/contact_us', [
            'num1' => $num1,
            'num2' => $num2,
            'form_time' => time()
        ]);
    }

    public function submit()
    {

        // ========================================
        // HONEYPOT CHECK
        // ========================================
        $honeypot = $this->request->getPost('website');

        if (!empty($honeypot)) {

            log_message(
                'warning',
                'Spam detected - Honeypot triggered from IP: ' . $this->request->getIPAddress()
            );

            return redirect()->to('/contact')
                ->with('success', 'Thank you! Your message has been submitted.');
        }

        // ========================================
        // TIME TRAP CHECK
        // ========================================
        $formTime = $this->request->getPost('form_time');

        if ($formTime && (time() - $formTime) < 5) {

            log_message(
                'warning',
                'Spam detected - Form submitted too fast from IP: ' . $this->request->getIPAddress()
            );

            return redirect()->to('/contact');
        }

        // ========================================
        // VALIDATION
        // ========================================

        $validation = \Config\Services::validation();

        $validation->setRules([
            'first_name' => 'required|min_length[2]|max_length[50]',
            'last_name'  => 'required|min_length[2]|max_length[50]',
            'email'      => 'required|valid_email',
            'phone'      => 'required|min_length[10]|max_length[15]',
            'company'    => 'required|max_length[100]',
            'subject'    => 'required|min_length[3]|max_length[200]',
            'message'    => 'required|max_length[1000]',
            'captcha'    => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {

            return redirect()->back()
                ->withInput()
                ->with('errors', $validation->getErrors());
        }

        // ========================================
        // CAPTCHA VALIDATION
        // ========================================

        $captchaInput  = $this->request->getPost('captcha');
        $captchaAnswer = session()->get('captcha_answer');

        if ($captchaInput != $captchaAnswer) {

            return redirect()->back()
                ->withInput()
                ->with('errors', [
                    'captcha' => 'Incorrect captcha answer.'
                ]);
        }

        // Hapus captcha session setelah dipakai
        session()->remove('captcha_answer');

        // ========================================
        // AMBIL DATA
        // ========================================

        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name'  => $this->request->getPost('last_name'),
            'email'      => $this->request->getPost('email'),
            'phone'      => $this->request->getPost('phone'),
            'company'    => $this->request->getPost('company'),
            'subject'    => $this->request->getPost('subject'),
            'message'    => $this->request->getPost('message')
        ];

        // ========================================
        // SEND EMAIL
        // ========================================

        if ($this->sendEmail($data)) {

            return redirect()->route('contact')
                ->with('success', 'Your message has been successfully submitted. Our team will contact you shortly.');
        }

        return redirect()->back()
            ->withInput()
            ->with('error', 'Sorry, there was an error sending your message.');
    }


    private function sendEmail($data)
    {

        $email = \Config\Services::email();

        $email->setFrom(
            'alldatainternational2@gmail.com',
            'Contact Form - ' . $data['first_name'] . ' ' . $data['last_name']
        );

        $email->setTo('devops@alldataint.com');

        $email->setSubject(
            'New Contact Form Submission: ' . $data['subject']
        );

        $message = "
            <html>
            <head>
                <style>
                    body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                    .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                    .header { background-color: #007bff; color: white; padding: 20px; text-align: center; }
                    .content { background-color: #f8f9fa; padding: 20px; margin-top: 20px; }
                    .field { margin-bottom: 15px; }
                    .label { font-weight: bold; color: #555; }
                    .value { margin-top: 5px; padding: 10px; background-color: white; border-left: 3px solid #007bff; }
                </style>
            </head>
            <body>

            <div class='container'>

            <div class='header'>
            <h2>New Contact Form Submission - All Data International</h2>
            </div>

            <div class='content'>

            <div class='field'>
            <div class='label'>Name:</div>
            <div class='value'>" . htmlspecialchars($data['first_name']) . " " . htmlspecialchars($data['last_name']) . "</div>
            </div>

            <div class='field'>
            <div class='label'>Email:</div>
            <div class='value'>" . htmlspecialchars($data['email']) . "</div>
            </div>

            <div class='field'>
            <div class='label'>Phone:</div>
            <div class='value'>" . htmlspecialchars($data['phone'] ?? 'Not provided') . "</div>
            </div>

            <div class='field'>
            <div class='label'>Company:</div>
            <div class='value'>" . htmlspecialchars($data['company'] ?? 'Not provided') . "</div>
            </div>

            <div class='field'>
            <div class='label'>Subject:</div>
            <div class='value'>" . htmlspecialchars($data['subject']) . "</div>
            </div>

            <div class='field'>
            <div class='label'>Message:</div>
            <div class='value'>" . nl2br(htmlspecialchars($data['message'])) . "</div>
            </div>

            </div>

            </div>

            </body>
            </html>
            ";

        $email->setMessage($message);
        $email->setMailType('html');

        $adminEmailSent = $email->send();

        // ========================================
        // AUTO REPLY
        // ========================================

        $email->clear();

        $email->setFrom('alldatainternational2@gmail.com', 'All Data International');
        $email->setTo($data['email']);

        $email->setSubject('Thank you for contacting us');

        $logoUrl = base_url('assets/images/logo_coloured.png');

        $autoReply = "
            <html>
            <head>
                <style>
                    body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                    .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                    .header { background-color: #28a745; color: white; padding: 20px; text-align: center; }
                    .content { padding: 20px; }
                    .box { background:#f8f9fa; padding:15px; border-left:4px solid #28a745; margin-top:10px;}
                </style>
            </head>
            <body>

            <div class='container'>

            <div class='header'>
            <h2>Thank You for Contacting Us!</h2>
            </div>

            <div class='content'>

            <p>Dear " . htmlspecialchars($data['first_name']) . " " . htmlspecialchars($data['last_name']) . ",</p>

            <p>
            Thank you for reaching out to us. We have received your message and our team will respond as soon as possible.
            </p>

            <p><strong>Your message details:</strong></p>

            <div class='box'>
            <p><strong>Subject:</strong> " . htmlspecialchars($data['subject']) . "</p>

            <p><strong>Message:</strong><br>
            " . nl2br(htmlspecialchars($data['message'])) . "
            </p>
            </div>

            <br>

            <p>
            Best regards,<br>
            <strong>All Data International Team</strong>
            </p>

            <img 
            src='" . $logoUrl . "'
            alt='All Data International'
            width='140'
            style='margin-top:10px; display:block;'
            >

            </div>

            </div>

            </body>
            </html>
            ";

        $email->setMessage($autoReply);
        $email->setMailType('html');

        $autoReplySent = $email->send();

        return $adminEmailSent && $autoReplySent;
    }
}
