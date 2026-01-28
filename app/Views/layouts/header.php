<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="description" content="<?= esc($meta_description ?? 'Solusi Data dan Teknologi untuk Bisnis Modern') ?>">
<meta name="keywords" content="<?= esc($meta_keywords ?? 'Data, Big Data, AI, Cloud, Integration') ?>">

<meta property="og:title" content="<?= esc($title ?? 'All Data International') ?>">
<meta property="og:description" content="<?= esc($meta_description ?? 'Solusi Data dan Teknologi untuk Bisnis Modern') ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= current_url() ?>">
<meta property="og:image" content="<?= esc($og_image ?? base_url('assets/images/og-default.png')) ?>">

<link rel="icon" href="<?= base_url('assets/images/all-data-international-logo-site.png') ?>">
<link rel="apple-touch-icon" href="<?= base_url('assets/images/all-data-international-logo-site.png') ?>">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

<link href="<?= base_url('assets/css/style.css?v=' . filemtime(FCPATH . 'assets/css/style.css')) ?>" rel="stylesheet">