<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class LegacyRedirectController extends Controller
{
    public function index()
    {
        $request = service('request');
        $path = trim($request->getUri()->getPath(), '/');

        // kalau kosong, tetap 404 CI4
        if ($path === '') {
            return view('errors/404');
        }

        // jangan ganggu area yang jelas bukan legacy
        if (preg_match('#^(articles|assets|css|js|images|uploads)(/|$)#', $path)) {
            return view('errors/404');
        }

        // OPTIONAL: whitelist prefix CI4 kamu biar gak perlu cek WP
        if (preg_match('#^(solutions|services|company|resources|contact|contact-us|search|home)(/|$)#', $path)) {
            return view('errors/404');
        }

        // Ambil "slug" terakhir untuk cek WP (bisa kamu ubah kalau legacy kamu multi-segmen)
        $slug = basename($path);

        // Cache biar gak berat (file cache bawaan CI4)
        $cache = cache();
        $cacheKey = 'wp_slug_exists_' . md5($slug);

        $exists = $cache->get($cacheKey);
        if ($exists === null) {
            $exists = $this->checkWpSlugExists($slug); // true/false
            $cache->save($cacheKey, $exists, 86400); // 1 hari
        }

        if ($exists) {
            // Redirect ke WP /articles/<slug>/ (pastikan trailing slash konsisten)
            return redirect()->to(site_url('articles/' . $slug . '/'), 301);
        }

        return view('errors/404');
    }

    private function checkWpSlugExists(string $slug): bool
    {
        // WP kamu ada di /articles
        $wpApi = site_url('articles/wp-json/wp/v2/posts?slug=' . urlencode($slug) . '&_fields=id&per_page=1');

        try {
            $client = \Config\Services::curlrequest([
                'timeout' => 3,
                'http_errors' => false,
            ]);

            $res = $client->get($wpApi);
            if ($res->getStatusCode() !== 200) return false;

            $json = json_decode($res->getBody(), true);
            return is_array($json) && count($json) > 0;
        } catch (\Throwable $e) {
            return false;
        }
    }
}
