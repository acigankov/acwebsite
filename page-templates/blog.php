<?php /* Template Name: Blog Page */ ?>

<?php
get_header('static');
?>

	<main id="primary" class="site-main">
        <section class="pt-125 pb-130">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="section-title text-center">
                        <h1 class="title"><?= the_title()?></h1>
                    </div>
                    <!-- section title -->
                </div>

                <div class="row justify-content-center">
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

                        <div class="col-lg-4 col-md-8 col-sm-9">
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


                    <?php
                $categories = get_categories( array(
                    'orderby' => 'name',
                    'order'   => 'ASC',
                    'hide_empty' => false
                ) );

                foreach( $categories as $category ) {
                    $category_link = sprintf(
                        '<a href="%1$s" alt="%2$s">%3$s</a>',
                        esc_url( get_category_link( $category->term_id ) ),
                        esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
                        esc_html( $category->name )
                    );

                    echo '<p>' . sprintf( esc_html__( 'Category: %s', 'textdomain' ), $category_link ) . '</p> ';
                    echo '<p>' . sprintf( esc_html__( 'Description: %s', 'textdomain' ), $category->description ) . '</p>';
                    echo '<p>' . sprintf( esc_html__( 'Post Count: %s', 'textdomain' ), $category->count ) . '</p>';
                }
                ?>

            </div>
            <!-- /.container -->
        </section>




	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
