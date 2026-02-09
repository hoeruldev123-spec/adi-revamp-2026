<?php

/**
 * Generate responsive image with AVIF + WebP + cache hash
 *
 * @param string $path   relative path dari public/assets/images
 * @param array  $sizes  contoh: [320, 480, 768]
 * @param int    $quality default 80
 *
 * @return array
 */
function img_auto(string $path, array $sizes = [320, 480, 768], int $quality = 80): array
{
    $source = FCPATH . 'assets/images/' . $path;

    if (!file_exists($source)) {
        return [];
    }

    $hash = substr(md5_file($source), 0, 8);
    $name = pathinfo($path, PATHINFO_FILENAME);

    $cacheDir = WRITEPATH . 'image-cache/';
    if (!is_dir($cacheDir)) {
        mkdir($cacheDir, 0755, true);
    }

    $result = [
        'avif' => [],
        'webp' => [],
        'fallback' => null
    ];

    foreach ($sizes as $width) {
        // AVIF
        $avifFile = "{$name}-{$width}-{$hash}.avif";
        $avifPath = $cacheDir . $avifFile;

        if (!file_exists($avifPath)) {
            try {
                service('image')
                    ->withFile($source)
                    ->resize($width, null, true, 'width')
                    ->convert(IMAGETYPE_AVIF)
                    ->save($avifPath, $quality);
            } catch (\Throwable $e) {
            }
        }

        if (file_exists($avifPath)) {
            $result['avif'][$width] = base_url('writable/image-cache/' . $avifFile);
        }

        // WebP
        $webpFile = "{$name}-{$width}-{$hash}.webp";
        $webpPath = $cacheDir . $webpFile;

        if (!file_exists($webpPath)) {
            service('image')
                ->withFile($source)
                ->resize($width, null, true, 'width')
                ->convert(IMAGETYPE_WEBP)
                ->save($webpPath, $quality);
        }

        $result['webp'][$width] = base_url('writable/image-cache/' . $webpFile);

        // fallback (pakai webp terkecil)
        if (!$result['fallback']) {
            $result['fallback'] = $result['webp'][$width];
        }
    }

    return $result;
}
