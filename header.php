<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- bg browser -->
	<meta name="theme-color" content="#fff">
	<meta name="apple-mobile-web-app-status-bar-style" content="#fff">
	<meta name="apple-mobile-web-app-status-bar-style" content="#fff">

	<!-- fontawesome -->
	<script src="https://kit.fontawesome.com/db0f3e059c.js" crossorigin="anonymous"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<!--Header-->
    <header style="background-image: url(<?php echo get_theme_file_uri('/assets/img/fondo-menu.png'); ?>); background-size: cover;">
        <!--logotipo-->
        <img src="<?php echo get_theme_file_uri('/assets/img/logo.png') ?>" alt="Logo">
        <nav class="menu">
            <a href="#" class="menu-item">Home</a>
            <a href="#" class="menu-item">Sobre a Empresa</a>
            <a href="#" class="menu-item">Produtos</a>
            <a href="#" class="menu-item">Servicos</a>
            <a href="#" class="menu-item">Fale Conosco</a>
        </nav>
        <button class="btn btn-menu">Webmail</button>
    </header>

	<!-- Slider and Banner Internal -->
	<?php echo SliderAndBannerInternal(); ?>

	<!-- container -->
	<div class="container">
