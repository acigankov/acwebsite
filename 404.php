<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package acwebsite
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error404 not-found">
            <div class="container">
                <div class="error404-content">
                    <h1 class="error404-title">404</h1>
                    <h2 class="error404-subtitle">Ой! Что-то пошло не так :(</h2>
                    <p class="error404-text">
                        Такой страницы не существует. В любой непонятной ситуации - переходи на главную.
                    </p>
                    <a class="main-btn" href="/">В начало</a>

                </div>
                <!-- /.404-content -->

            </div>
            <!-- /.container -->


		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
