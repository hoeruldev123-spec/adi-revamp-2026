<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Google Tag Manager -->
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-TRH39T6');
</script>
<!-- End Google Tag Manager -->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KXMWEJ37TX"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-KXMWEJ37TX');
</script>

<?php
$url = current_url();
$query = $_GET ?? [];

// DETEKSI HALAMAN ARTIKEL DETAIL
$isArticleDetail = preg_match('#^https://alldataint\.com/articles/[^/]+/?$#', $url);

// DETEKSI HALAMAN ARTIKEL DETAIL
$isArticleDetail = preg_match('#^https://alldataint\.com/articles/[^/]+/?$#', $url);

// DEFAULT
$noindex = false;
$canonical = $url;

// KONDISI YANG HARUS NOINDEX
if (
    strpos($url, '/resources/articles') !== false ||  // <---- TAMBAHKAN BARIS INI
    strpos($url, '/feed/') !== false ||
    strpos($url, '/page/') !== false ||
    strpos($url, '/author/') !== false ||
    strpos($url, '/tag/') !== false ||
    strpos($url, '/category/') !== false ||
    strpos($url, '/index.php/') !== false ||
    strpos($url, '/blog/') !== false ||
    !empty($query)
) {
    $noindex = true;
    $canonical = base_url('articles');
}

// KHUSUS ARTIKEL DETAIL → BOLEH INDEX
if ($isArticleDetail) {
    $noindex = false;
    $canonical = $url;
}
?>

<title><?= esc($title ?? 'All Data International') ?></title>
<link rel="canonical" href="<?= $canonical ?>">

<?php if ($noindex): ?>
    <meta name="robots" content="noindex, follow">
<?php else: ?>
    <meta name="robots" content="index, follow">
<?php endif; ?>

<meta name="description" content="<?= esc($meta_description ?? 'Solusi Data dan Teknologi untuk Bisnis Modern') ?>">
<meta name="keywords" content="<?= esc($meta_keywords ?? 'Data, Big Data, AI, Cloud, Integration') ?>">

<meta property="og:site_name" content="All Data International">
<meta property="og:title" content="<?= esc($title ?? 'All Data International') ?>">
<meta property="og:description" content="<?= esc($meta_description ?? 'Solusi Data dan Teknologi untuk Bisnis Modern') ?>">
<meta property="og:type" content="<?= esc($og_type ?? 'website') ?>">
<meta property="og:url" content="<?= current_url() ?>">

<?php
$ogImage = esc($og_image ?? base_url('assets/images/og/Open-Graph-Image-ADI-2026.webp'));
?>
<meta property="og:image" content="<?= $ogImage ?>">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="628">
<meta property="og:image:alt" content="<?= esc($og_image_alt ?? ($title ?? 'All Data International')) ?>">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= esc($title ?? 'All Data International') ?>">
<meta name="twitter:description" content="<?= esc($meta_description ?? 'Solusi Data dan Teknologi untuk Bisnis Modern') ?>">
<meta name="twitter:image" content="<?= $ogImage ?>">

<meta name="google-site-verification" content="LJP2yBM57vgqcF3jhnJJSiGeMF3TwLSe74e1vc5yFiw" />

<link rel="icon" type="image/x-icon" href="<?= base_url('assets/favicon/favicon.ico') ?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/favicon/favicon-16x16.png') ?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/favicon/favicon-32x32.png') ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/favicon/apple-touch-icon.png') ?>">
<link rel="icon" type="image/png" sizes="192x192" href="<?= base_url('assets/favicon/android-chrome-192x192.png') ?>">
<link rel="icon" type="image/png" sizes="512x512" href="<?= base_url('assets/favicon/android-chrome-512x512.png') ?>">
<link rel="manifest" href="<?= base_url('assets/favicon/site.webmanifest') ?>">

<meta name="theme-color" content="#008bf9">
<meta name="msapplication-TileColor" content="#008bf9">

<link rel="preload" href="<?= base_url('assets/fonts/plus-jakarta-sans-v12-latin-600.woff2') ?>" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?= base_url('assets/fonts/outfit-v15-latin-600.woff2') ?>" as="font" type="font/woff2" crossorigin>

<link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/vendor/aos/aos.css') ?>">
<link href="<?= base_url('assets/css/style.css?v=' . filemtime(FCPATH . 'assets/css/style.css')) ?>" rel="stylesheet">