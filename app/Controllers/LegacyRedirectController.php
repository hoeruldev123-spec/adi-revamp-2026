<?php

namespace App\Controllers;

class LegacyRedirectController extends BaseController
{
    public function index($path = null)
    {
        // kalau kosong, biarkan Home route yang handle
        if (!$path) {
            return redirect()->to('/', 302);
        }

        // Jangan ganggu path yang memang CI4 punya (whitelist cepat)
        $first = explode('/', trim($path, '/'))[0] ?? '';
        $ciPrefixes = ['solutions', 'services', 'company', 'resources', 'contact', 'contact-us', 'search', 'home', 'api', 'public', 'assets', 'css', 'js', 'images', 'uploads'];
        if (in_array($first, $ciPrefixes, true)) {
            // biarkan 404 handler CI4 normal
            return $this->showCi404();
        }

        // Jangan redirect file yang mengandung ekstensi (mis: .png, .xml, .txt)
        if (preg_match('/\.[a-z0-9]{2,5}$/i', $path)) {
            return $this->showCi404();
        }

        // Cek apakah post ada di WordPress (REST API)
        $slug = trim($path, '/');
        $wpApi = 'https://alldataint.com/articles/wp-json/wp/v2/posts?slug=' . urlencode($slug) . '&_fields=link';

        $exists = $this->wpPostExists($wpApi);

        if ($exists) {
            // redirect permanen ke struktur baru
            return redirect()->to('https://alldataint.com/articles/' . $slug . '/', 301);
        }

        // kalau tidak ada, tampilkan 404 CI4
        return $this->showCi404();
    }

    private function wpPostExists(string $url): bool
    {
        // Simple curl (aman di shared hosting). Tambah timeout biar cepat.
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 2,
            CURLOPT_CONNECTTIMEOUT => 2,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_SSL_VERIFYPEER => true,
            CURLOPT_HTTPHEADER => ['Accept: application/json'],
        ]);

        $resp = curl_exec($ch);
        $http = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($http !== 200 || !$resp) return false;

        $json = json_decode($resp, true);
        return is_array($json) && count($json) > 0 && !empty($json[0]['link']);
    }

    private function showCi404()
    {
        // kalau kamu punya view 404 sendiri:
        return $this->response->setStatusCode(404)->setBody(view('errors/404'));
    }
}
