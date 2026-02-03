<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="description" content="<?= esc($meta_description ?? 'Solusi Data dan Teknologi untuk Bisnis Modern') ?>">
<meta name="keywords" content="<?= esc($meta_keywords ?? 'Data, Big Data, AI, Cloud, Integration') ?>">

<meta property="og:title" content="<?= esc($title ?? 'All Data International') ?>">
<meta property="og:description" content="<?= esc($meta_description ?? 'Solusi Data dan Teknologi untuk Bisnis Modern') ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= current_url() ?>">
<meta property="og:image" content="<?= esc($og_image ?? base_url('assets/images/og-default.png')) ?>">

<link rel="preload" href="<?= base_url('assets/fonts/plus-jakarta-sans-v12-latin-600.woff2') ?>" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?= base_url('assets/fonts/outfit-v15-latin-600.woff2') ?>" as="font" type="font/woff2" crossorigin>

<link rel="icon" href="<?= base_url('assets/images/all-data-international-logo-site.png') ?>">
<link rel="apple-touch-icon" href="<?= base_url('assets/images/all-data-international-logo-site.png') ?>">

<link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">

<link rel="stylesheet" href="<?= base_url('assets/vendor/aos/aos.css') ?>">

<link rel="stylesheet" href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>">

<link href="<?= base_url('assets/css/style.css?v=' . filemtime(FCPATH . 'assets/css/style.css')) ?>" rel="stylesheet">