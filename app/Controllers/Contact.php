<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Contact extends Controller
{
    public function index()
    {
        return view('pages/contact_us');
    }

    public function submit()
    {
        // Validasi input
        $validation = \Config\Services::validation();

        $validation->setRules([
            'first_name' => 'required|min_length[2]|max_length[50]',
            'last_name'  => 'required|min_length[2]|max_length[50]',
            'email'      => 'required|valid_email',
            'phone'      => 'permit_empty|min_length[10]|max_length[15]',
            'company'    => 'permit_empty|max_length[100]',
            'subject'    => 'required|min_length[3]|max_length[200]',
            'message'    => 'required|max_length[1000]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Ambil data dari form
        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name'  => $this->request->getPost('last_name'),
            'email'      => $this->request->getPost('email'),
            'phone'      => $this->request->getPost('phone'),
            'company'    => $this->request->getPost('company'),
            'subject'    => $this->request->getPost('subject'),
            'message'    => $this->request->getPost('message')
        ];

        // Send email
        if ($this->sendEmail($data)) {
            return redirect()->route('contact')
                ->with('success', 'Your message has been successfully submitted. Our team will contact you shortly.');
        }

        return redirect()->back()
            ->withInput()
            ->with('error', 'Sorry, there was an error sending your message. Please try again later.');
    }

    private function sendEmail($data)
    {
        $email = \Config\Services::email();

        // Email ke admin (receiver)
        $email->setFrom('alldatainternational2@gmail.com', 'Contact Form - ' . $data['first_name'] . ' ' . $data['last_name']);
        $email->setTo('devops@alldataint.com');
        $email->setSubject('New Contact Form Submission: ' . $data['subject']);

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
                    <h2>New Contact Form Submission All Data International</h2>
                </div>
                <div class='content'>
                    <div class='field'>
                        <div class='label'>Name:</div>
                        <div class='value'>{$data['first_name']} {$data['last_name']}</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Email:</div>
                        <div class='value'>{$data['email']}</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Phone:</div>
                        <div class='value'>" . ($data['phone'] ?: 'Not provided') . "</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Company:</div>
                        <div class='value'>" . ($data['company'] ?: 'Not provided') . "</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Subject:</div>
                        <div class='value'>{$data['subject']}</div>
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

        // Kirim email ke admin
        $adminEmailSent = $email->send();

        // Kirim auto-reply ke pengirim
        $email->clear();
        $email->setFrom('alldatainternational2@gmail.com', 'All Data International');
        $email->setTo($data['email']);
        $email->setSubject('Thank you for contacting us - ' . $data['subject']);

        $logoUrl = base_url('assets/images/logo_coloured.png');

        $autoReplyMessage = "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background-color: #28a745; color: white; padding: 20px; text-align: center; }
                .content { padding: 20px; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h2>Thank You for Contacting Us!</h2>
                </div>
                <div class='content'>
                    <p>Dear {$data['first_name']} {$data['last_name']},</p>
                    <p>Thank you for reaching out to us. We have received your message and will get back to you as soon as possible.</p>

                    <p><strong>Your message details:</strong></p>
                    <p><strong>Subject:</strong> {$data['subject']}</p>
                    <p><strong>Message:</strong><br>
                        " . nl2br(htmlspecialchars($data['message'])) . "
                    </p>

                    <br>
                    <p>Best regards,<br>
                    All Data International Team
                    </p>

                    <img 
                        src='{$logoUrl}'
                        alt='All Data International'
                        width='140'
                        style='margin-top:10px; display:block;'
                    >
                </div>
            </div>
        </body>
        </html>
        ";


        $email->setMessage($autoReplyMessage);
        $email->setMailType('html');
        $autoReplySent = $email->send();

        return $adminEmailSent && $autoReplySent;
    }
}
