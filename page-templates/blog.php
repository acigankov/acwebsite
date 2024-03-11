<?php /* Template Name: Blog Page */ ?>

<?php
get_header('static');
?>

	<main id="primary" class="site-main">
        <section class="pt-60 pb-80">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="section-title text-center">
                        <h1 class="title"><?= the_title()?></h1>
                    </div>
                    <!-- section title -->
                </div>

                <div>

                </div>

                <?php get_search_form( [false]); ?>

                <div class="row justify-content-center mb-30">
                    <?php //собираем посты по типу
                    $thisPostId = get_the_ID();
                    $posts = get_posts(array(
                        'post_type' => 'post',
                        'orderby' => 'id',
                        'order' => 'ASC',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ));
                    ?>
                    <?php foreach ($posts as $post) { setup_postdata($post); ?>

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

                    <?php } wp_reset_postdata(); // сброс постов ?>
                </div>

            </div>
            <!-- /.container -->
        </section>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
