<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package acwebsite
 */

?>

<?php if (is_single()) : ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('pt-60 pb-60'); ?>>
        <div class="container">

            <header class="section-title pb-30">
                <?php the_title( '<h1 class="title">', '</h1>' );
                   if ( 'post' === get_post_type() ) :
                ?>
                    <div class="entry-meta">
                        <?php
                        acwebsite_posted_by();
                        echo '<span style="margin-right:5px"></span>';
                        acwebsite_posted_on();

                        ?>
                    </div><!-- .entry-meta -->
                <?php endif; ?>
            </header><!-- .entry-header -->

            <?php acwebsite_post_thumbnail(); ?>

            <div class="entry-content ">
                <?php
                the_content(
                    sprintf(
                        wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'acwebsite' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        wp_kses_post( get_the_title() )
                    )
                );

                wp_link_pages(
                    array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'acwebsite' ),
                        'after'  => '</div>',
                    )
                );
                ?>
            </div><!-- .entry-content -->
            <footer class="entry-footer">
                <?php acwebsite_entry_footer(); ?>
            </footer>
            <!-- /.entry-footer -->
        </div>
        <!-- /.container -->

    </article><!-- #post-<?php the_ID(); ?> -->
<?php endif; ?>

<?php if (is_category()) : ?>
    <div class="col-lg-4 col-md-8">
        <div class="single-blog mt-30">
            <div class="blog-image">
                <?= the_post_thumbnail( 'full' );?>
            </div>
            <div class="blog-content">
                <h4 class="blog-title"><a href="<?= the_permalink()?>"><?= the_title()?></a></h4>
                <span><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time></span>
            </div>
        </div> <!-- single blog -->
    </div>
<?php endif; ?>
