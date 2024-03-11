<!--====== BLOG PART START ======-->

<section id="blog" class="blog-area pt-125 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center pb-25">
                    <h2 class="title">Из Блога</h2>
                    <p>Маленькие заметки, которые не хочется держать в голове. Облегчают жизнь разработчика.</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <?php //собираем посты по типу
            $thisPostId = get_the_ID();
            $posts = get_posts(array(
                'numberposts' => 3,
                'post_type' => 'post',
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
                            <h4 class="blog-title"><a href="<?= the_permalink()?>"><?= the_title() ?></a></h4>
                            <span><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time></span>
                        </div>
                    </div> <!-- single blog -->
                </div>

            <?php } wp_reset_postdata(); // сброс постов ?>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-more text-center mt-50">
                    <a class="main-btn" href="/blog">Читать блог</a>
                </div> <!-- blog more -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== BLOG PART ENDS ======-->