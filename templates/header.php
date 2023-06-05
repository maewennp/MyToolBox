<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $data['title']; ?></title>

    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= home_url(); ?>/assets/img/favicon.png" rel="icon">
    <link href="<?= home_url(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link rel="stylesheet" href="<?= home_url(); ?>/assets/css/theme.css">
    <link rel="stylesheet" href="<?= home_url(); ?>/assets/css/style.css">
   <!-- <link rel="stylesheet" href="<?= home_url(); ?>/assets/css/bootstrap.css">          lien pour mettre bootstrap en local -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> <!-- ligne à supprimer pour mettre le bootstrap en local -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>
<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

        <div class="menu-header mt-3">
            <h1 class="text-light"><a href="<?= home_url(); ?>">MY TOOLBOX</a></h1>
        </div>

        <nav id="navbar" class="nav-menu navbar">

            <ul>
                <li><a href="<?= home_url(); ?>/home" class="nav-link scrollto <?= is_current_url('/home') ? 'active' : '' ?>"><i class="bx bx-home"></i> <span>Accueil</span></a></li>
                <li><a href="<?= home_url(); ?>/cesar" class="nav-link scrollto <?= is_current_url('/cesar') ? 'active' : '' ?>"><i class="bx bx-user"></i> <span>Code césar</span></a></li>
                <li><a href="<?= home_url(); ?>/euros-dollars" class="nav-link scrollto <?= is_current_url('/euros-dollars') ? 'active' : '' ?>"><i class="bx bx-file-blank"></i> <span>Convertisseur de devises</span></a></li>
                <li><a href="<?= home_url(); ?>/pourcentage" class="nav-link scrollto <?= is_current_url('/pourcentage') ? 'active' : '' ?>"><i class="bx bx-book-content"></i> <span>Pourcentage</span></a></li>
                <li><a href="<?= home_url(); ?>/decimal-hexadecimal" class="nav-link scrollto <?= is_current_url('/decimal-hexadecimal') ? 'active' : '' ?>"><i class="bx bx-server"></i> <span>Décimal en hexadécimal</span></a></li>
                <li><a href="<?= home_url(); ?>/regle-de-trois" class="nav-link scrollto <?= is_current_url('/regle-de-trois') ? 'active' : '' ?>"><i class="bx bx-envelope"></i> <span>Règle de trois</span></a></li>
                <li><a href="<?= home_url(); ?>/masse-volume" class="nav-link scrollto <?= is_current_url('/masse-volume') ? 'active' : '' ?>"><i class="bx bx-envelope"></i> <span>Masse et volume</span></a></li>
                <li><a href="<?= home_url(); ?>/contact" class="nav-link scrollto <?= is_current_url('/contact') ? 'active' : '' ?>"><i class="bx bx-home"></i> <span>Contactez nous</span></a></li>
                <li><a href="<?= home_url(); ?>/admin" class="nav-link scrollto <?= is_current_url('/admin') ? 'active' : '' ?>"><i class="bx bx-envelope"></i> <span>Espace gestion</span></a></li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->
<main id="main">
