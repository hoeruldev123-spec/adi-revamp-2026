<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?= esc($title ?? 'All Data International') ?></title>

<meta name="description" content="<?= esc($meta_description ?? 'Solusi Data dan Teknologi untuk Bisnis Modern') ?>">
<?php if (!empty($meta_keywords)): ?>
    <meta name="keywords" content="<?= esc($meta_keywords) ?>">
<?php endif; ?>

<meta name="robots" content="<?= esc($robots ?? 'index, follow') ?>">
<meta name="googlebot" content="<?= esc($robots ?? 'index, follow') ?>">

<!-- Canonical -->
<link rel="canonical" href="<?= current_url() ?>">

<!-- Open Graph (WhatsApp/FB/LinkedIn) -->
<meta property="og:site_name" content="All Data International">
<meta property="og:locale" content="id_ID">
<meta property="og:title" content="<?= esc($og_title ?? $title ?? 'All Data International') ?>">
<meta property="og:description" content="<?= esc($og_description ?? $meta_description ?? 'Solusi Data dan Teknologi untuk Bisnis Modern') ?>">
<meta property="og:url" content="<?= current_url() ?>">
<meta property="og:type" content="<?= esc($og_type ?? 'website') ?>">

<?php
// Pastikan og image absolut
$ogImage = $og_image ?? base_url('assets/images/og-default.png');
?>
<meta property="og:image" content="<?= esc($ogImage) ?>">
<meta property="og:image:secure_url" content="<?= esc($ogImage) ?>">
<meta property="og:image:width" content="<?= esc($og_image_width ?? '1200') ?>">
<meta property="og:image:height" content="<?= esc($og_image_height ?? '630') ?>">
<meta property="og:image:alt" content="<?= esc($og_image_alt ?? 'All Data International') ?>">

<!-- Twitter Card (X) -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= esc($og_title ?? $title ?? 'All Data International') ?>">
<meta name="twitter:description" content="<?= esc($og_description ?? $meta_description ?? 'Solusi Data dan Teknologi untuk Bisnis Modern') ?>">
<meta name="twitter:image" content="<?= esc($ogImage) ?>">

<!-- Favicons -->
<link rel="icon" href="<?= base_url('assets/images/favicon-32x32.png') ?>" sizes="32x32">
<link rel="icon" href="<?= base_url('assets/images/favicon-16x16.png') ?>" sizes="16x16">
<link rel="apple-touch-icon" href="<?= base_url('assets/images/apple-touch-icon.png') ?>" sizes="180x180">
<link rel="shortcut icon" href="<?= base_url('assets/images/favicon.ico') ?>">

<!-- Optional tapi bagus -->
<meta name="theme-color" content="#008bf9">

<!-- Fonts preload (punyamu sudah OK) -->
<link rel="preload" href="<?= base_url('assets/fonts/plus-jakarta-sans-v12-latin-600.woff2') ?>" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?= base_url('assets/fonts/outfit-v15-latin-600.woff2') ?>" as="font" type="font/woff2" crossorigin>

<!-- CSS -->
<link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/vendor/aos/aos.css') ?>">
<link href="<?= base_url('assets/css/style.css?v=' . filemtime(FCPATH . 'assets/css/style.css')) ?>" rel="stylesheet">