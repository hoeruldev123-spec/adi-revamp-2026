<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Google Analytics opt-out snippet added by Site Kit -->
<script>
    window["ga-disable-G-KXMWEJ37TX"] = true;
</script>
<!-- End Google Analytics opt-out snippet added by Site Kit -->
<title><?= esc($title ?? 'All Data International') ?></title>
<link rel="canonical" href="<?= current_url() ?>">

<meta name="description" content="<?= esc($meta_description ?? 'Solusi Data dan Teknologi untuk Bisnis Modern') ?>">
<meta name="keywords" content="<?= esc($meta_keywords ?? 'Data, Big Data, AI, Cloud, Integration') ?>">

<meta property="og:site_name" content="All Data International">
<meta property="og:title" content="<?= esc($title ?? 'All Data International') ?>">
<meta property="og:description" content="<?= esc($meta_description ?? 'Solusi Data dan Teknologi untuk Bisnis Modern') ?>">
<meta property="og:type" content="<?= esc($og_type ?? 'website') ?>">
<meta property="og:url" content="<?= current_url() ?>">

<?php
$ogImage = esc($og_image ?? base_url('assets/images/cloud-hero.webp'));
?>
<meta property="og:image" content="<?= $ogImage ?>">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="<?= esc($og_image_alt ?? ($title ?? 'All Data International')) ?>">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= esc($title ?? 'All Data International') ?>">
<meta name="twitter:description" content="<?= esc($meta_description ?? 'Solusi Data dan Teknologi untuk Bisnis Modern') ?>">
<meta name="twitter:image" content="<?= $ogImage ?>">

<meta name="google-site-verification" content="LJP2yBM57vgqcF3jhnJJSiGeMF3TwLSe74e1vc5yFiw" />

<link rel="icon" href="<?= base_url('assets/images/all-data-international-logo-site.png') ?>">
<link rel="apple-touch-icon" href="<?= base_url('assets/images/all-data-international-logo-site.png') ?>">

<link rel="preload" href="<?= base_url('assets/fonts/plus-jakarta-sans-v12-latin-600.woff2') ?>" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?= base_url('assets/fonts/outfit-v15-latin-600.woff2') ?>" as="font" type="font/woff2" crossorigin>

<link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/vendor/aos/aos.css') ?>">
<link href="<?= base_url('assets/css/style.css?v=' . filemtime(FCPATH . 'assets/css/style.css')) ?>" rel="stylesheet">