<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package acwebsite
 */
$homeUrl = home_url( $path = '/', $scheme = 'https' );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800;900&display=swap');
    </style>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?= get_template_directory_uri()?>/assets/images/favicon.png" type="image/png">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader_34">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER ENDS START ======-->

    <!--====== HEADER PART START ======-->

    <header id="home" class="header-area">
        <div class="navigation fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="/">
                                <img class="logo" src="<?= get_template_directory_uri()?>/assets/images/logo.png" alt="Logo" >
                            </a> <!-- Logo -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active"><a class="page-scroll" href="<?= $homeUrl ?>#home">Начало</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="<?= $homeUrl ?>#about">Обо мне</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="<?= $homeUrl ?>#service">Услуги</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="<?= $homeUrl ?>#work">Работы</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="/blog">Блог</a></li>
                                    <li class="nav-item"><a class="page-scroll" href="<?= $homeUrl ?>#contact">Контакты</a></li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navigation -->


    </header>

    <!--====== HEADER PART ENDS ======-->
