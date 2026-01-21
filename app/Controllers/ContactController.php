<?php

namespace App\Controllers;

class ContactController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Contact Us | All Data International',
            'page' => 'contact',
            'meta_description' => 'Get in touch with All Data International. Contact us for inquiries, support, or partnership opportunities.',
            'meta_keywords' => 'contact, support, inquiry, partnership, Jakarta office, WhatsApp, email'
        ];

        return view('pages/contact_us', $data);
    }

    public function submit()
    {
        // Validasi input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'first_name' => 'required|min_length[2]',
            'last_name'  => 'required|min_length[2]',
            'email'      => 'required|valid_email',
            'subject'    => 'required|min_length[5]',
            'message'    => 'required|min_length[10]'
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
            'message'    => $this->request->getPost('message'),
            'ip_address' => $this->request->getIPAddress(),
            'user_agent' => $this->request->getUserAgent(),
            'created_at' => date('Y-m-d H:i:s')
        ];

        // Simpan ke database (jika diperlukan)
        // $model = new \App\Models\ContactModel();
        // $model->insert($data);

        // Kirim email (contoh menggunakan Email service CI4)
        $email = \Config\Services::email();

        $email->setTo('info@alldata.com');
        $email->setFrom($data['email'], $data['first_name'] . ' ' . $data['last_name']);
        $email->setSubject('Contact Form: ' . $data['subject']);

        $emailMessage = "New Contact Form Submission:\n\n";
        $emailMessage .= "Name: {$data['first_name']} {$data['last_name']}\n";
        $emailMessage .= "Email: {$data['email']}\n";
        $emailMessage .= "Phone: {$data['phone']}\n";
        $emailMessage .= "Company: {$data['company']}\n";
        $emailMessage .= "Subject: {$data['subject']}\n";
        $emailMessage .= "Message:\n{$data['message']}\n\n";
        $emailMessage .= "IP Address: {$data['ip_address']}\n";
        $emailMessage .= "Submitted: {$data['created_at']}\n";

        $email->setMessage($emailMessage);

        if ($email->send()) {
            // Kirim auto-reply ke pengirim
            $autoReplyEmail = \Config\Services::email();
            $autoReplyEmail->setTo($data['email']);
            $autoReplyEmail->setFrom('noreply@alldata.com', 'All Data International');
            $autoReplyEmail->setSubject('Thank you for contacting All Data International');

            $autoReplyMessage = "Dear {$data['first_name']},\n\n";
            $autoReplyMessage .= "Thank you for contacting All Data International. We have received your message and our team will get back to you within 24 hours.\n\n";
            $autoReplyMessage .= "Here's a summary of your submission:\n";
            $autoReplyMessage .= "Subject: {$data['subject']}\n";
            $autoReplyMessage .= "Message: {$data['message']}\n\n";
            $autoReplyMessage .= "Best regards,\n";
            $autoReplyMessage .= "All Data International Team\n";
            $autoReplyMessage .= "Phone: +62 21-2523-9396\n";
            $autoReplyMessage .= "Email: info@alldata.com\n";
            $autoReplyMessage .= "Website: https://www.alldata.com\n";

            $autoReplyEmail->setMessage($autoReplyMessage);
            $autoReplyEmail->send();

            return redirect()->to('/contact')->with('success', 'Thank you for your message. We will contact you soon!');
        } else {
            return redirect()->back()->withInput()->with('error', 'Sorry, there was an error sending your message. Please try again.');
        }
    }
}
