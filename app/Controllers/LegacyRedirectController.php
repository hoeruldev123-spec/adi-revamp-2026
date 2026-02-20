<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Services;

class LegacyRedirectController extends Controller
{
    public function index($path = null)
    {
        $path = trim((string) $path, "/");

        // Kalau kosong, biar route '/' yang handle
        if ($path === '') {
            return $this->response->setStatusCode(404)->setBody(view('errors/404'));
        }

        // Safety: jangan ganggu area yang harusnya bukan legacy
        $reserved = [
            'articles',
            'assets',
            'css',
            'js',
            'images',
            'uploads',
            'solutions',
            'services',
            'company',
            'resources',
            'contact',
            'contact-us',
            'search',
            'home',
            'public'
        ];

        $firstSeg = strtolower(explode('/', $path)[0] ?? '');
        if (in_array($firstSeg, $reserved, true)) {
            return $this->response->setStatusCode(404)->setBody(view('errors/404'));
        }

        // Target WP
        $target = rtrim(base_url('articles/' . $path), '/') . '/';

        // Cache ringan biar gak HEAD terus (optional tapi bagus)
        $cache = Services::cache();
        $cacheKey = 'legacy_wp_exists_' . md5($target);
        $exists = $cache->get($cacheKey);

        if ($exists === null) {
            $exists = $this->wpUrlExists($target);
            $cache->save($cacheKey, $exists ? 1 : 0, 86400); // 1 hari
        } else {
            $exists = ((int)$exists) === 1;
        }

        if ($exists) {
            return redirect()->to($target, 301);
        }

        // Tidak ada di WP => tampilkan 404 CI4
        return $this->response->setStatusCode(404)->setBody(view('errors/404'));
    }

    private function wpUrlExists(string $url): bool
    {
        try {
            /** @var \CodeIgniter\HTTP\CURLRequest $client */
            $client = Services::curlrequest([
                'timeout'     => 2,
                'http_errors' => false,
                'verify'      => true,
            ]);

            // HEAD dulu (lebih ringan)
            $res = $client->head($url, [
                'allow_redirects' => [
                    'max' => 3
                ],
                'headers' => [
                    'User-Agent' => 'CI4-Legacy-Redirect'
                ],
            ]);

            $code = $res->getStatusCode();

            // WP biasanya 200 kalau ada, 301/302 juga bisa (mis. canonical)
            return in_array($code, [200, 301, 302], true);
        } catch (\Throwable $e) {
            // kalau gagal cek (timeout / dns), jangan asal redirect
            return false;
        }
    }
}
