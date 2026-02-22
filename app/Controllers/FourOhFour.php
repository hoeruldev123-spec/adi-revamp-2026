<?php
// app/Controllers/FourOhFour.php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;

class FourOhFour extends BaseController
{
    public function handle(): ResponseInterface
    {
        // Inisialisasi manual jika belum ada
        if ($this->response === null) {
            $this->response = service('response');
        }

        if ($this->request === null) {
            $this->request = service('request');
        }

        // Set status code 404
        $this->response->setStatusCode(404);

        // Ambil URL yang diminta (jika ada)
        $requestedUrl = $this->request->getGet('url') ?? current_url();

        // Log 404 untuk analisis (opsional)
        $this->log404($requestedUrl);

        // Data untuk view
        $data = [
            'requested_url' => $requestedUrl,
            'base_url' => base_url()
        ];

        // Tampilkan custom 404 page
        return $this->response->setBody(view('errors/404', $data));
    }

    private function log404($url)
    {
        // Log ke file untuk tracking broken links
        $logFile = WRITEPATH . 'logs/404.log';
        $timestamp = date('Y-m-d H:i:s');
        $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';
        $referer = $_SERVER['HTTP_REFERER'] ?? 'Direct';
        $ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';

        $logEntry = "[$timestamp] URL: $url | IP: $ip | Referer: $referer | UA: $userAgent" . PHP_EOL;

        // Tulis log dengan file locking
        if (is_writable(WRITEPATH . 'logs')) {
            file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);
        }
    }
}
