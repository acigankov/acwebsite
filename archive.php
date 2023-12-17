<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package acwebsite
 */

get_header('static');
?>

	<main id="primary" class="site-main">
        <section class="pt-60 pb-80">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="section-title text-center">
                        <h1 class="title"><?= single_cat_title( '<h1 class="page-title">', '</h1>' );?></h1>
                    </div>
                    <!-- section title -->
                </div>

                <div class="row justify-content-center">

                    <?php if ( have_posts() ) : ?>
                        <?php
                        /* Start the Loop */
                        while ( have_posts() ) :
                            the_post();

                            /*
                             * Include the Post-Type-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                             */

                            get_template_part( 'template-parts/content', get_post_type() );

                        endwhile;

                    else :

                        get_template_part( 'template-parts/content', 'none' );

                    endif;
                    ?>
                </div>

            </div>
            <!-- /.container -->
        </section>
    </main><!-- #main -->

<?php

get_footer();
