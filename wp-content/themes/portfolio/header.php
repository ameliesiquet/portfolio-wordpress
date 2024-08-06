<!DOCTYPE html>
<html lang="fr-BE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Meta donnée du site -->
    <meta name="author" content="<?= get_bloginfo('name'); ?>">
    <meta name="title" content="Amélie Siquet">
    <meta name="keywords"
          content="Portfolio, Amélie Siquet,Webdesign, web, design, development, HEPL">
    <meta name="description"
          content="Portfolio of Amélie Siquet, Web Developer at HEPL. I transform your creative visions into reality!">

    <!-- Profil details -->
    <meta property="profile:first_name" content="Amélie">
    <meta property="profile:last_name" content="Siquet">
    <!-- Link css -->
    <link rel="stylesheet" href="<?= dw_asset('css/site.css') ?>">

    <!-- Meta details -->


    <!-- Title -->
    <title>
        Amélie Siquet - Web Developer
    </title>
</head>
<body itemscope itemtype="https://schema.org/Person">
<noscript>
    <p class="no-js__message">
        To access all the features of this site, you need to enable JavaScript.<br>
        Here are the <a href="https://www.enable-javascript.com/" title="to the enable-javascript site">instructions
            to enable JavaScript in your web browser</a>.
    </p>
</noscript>
<header role="banner">
    <h1 class="hidden" role="heading" aria-level="1">Portfolio -
        <span itemprop="name">Amélie</span>
        <span itemprop="familyName">Siquet</span> -
        <span itemprop="jobTitle">Web Developer</span>
    </h1>
    <?php get_template_part('components/navigation'); ?>
</header>
