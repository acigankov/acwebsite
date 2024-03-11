<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package acwebsite
 */

get_header('static');
?>

    <main id="primary" class="site-main">
        <article class="pt-60 pb-80">
            <div class="container">

                <header class="row justify-content-center">
                    <div class="section-title text-center">
                        <h1 class="title"><?php printf( esc_html__( 'Search Results for: %s', 'acwebsite' ), '<span>' . get_search_query() . '</span>' );?></h1>
                    </div>
                    <!-- section title -->
                </header>

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

                            get_template_part( 'template-parts/content', 'search' );

                        endwhile;

                    else :

                        get_template_part( 'template-parts/content', 'none' );

                    endif;
                    ?>
                </div>

            </div>
            <!-- /.container -->
        </article>
    </main><!-- #main -->

<?php
get_footer();
