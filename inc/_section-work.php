<!--====== WORK PART START ======-->

<section id="work" class="work-area pt-125 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center  pb-25">
                    <h2 class="title">Выполненые работы</h2>
                    <p>Все работы выполнены с чувством долга, любовью и максимально ответственностью. Ни один файлик в интернете не пострадал.</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">

            <?php //собираем посты по типу
            $thisPostId = get_the_ID();
            $posts = get_posts(array(
                'numberposts' => 100,
                'post_type' => 'portfolio',
                'orderby' => 'id',
                'order' => 'ASC',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ));
            ?>
            <?php foreach ($posts as $post) { setup_postdata($post); ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-work text-center mt-30">
                        <div class="work-image">
                            <img src="<?= get_field('img') ? the_field('img') : get_template_directory_uri() . '/assets/images/work/w-1.jpg'?>" alt="<?= the_field('title')?>">
                        </div>
                        <div class="work-overlay">
                            <div class="work-content">
                                <h3 class="work-title"><?= the_field('title')?></h3>
                                <ul>
                                    <li><a class="image-popup" href="<?= get_field('img') ? the_field('img') : get_template_directory_uri() . '/assets/images/work/w-1.jpg'?>"><i class="lni-plus"></i></a></li>
                                    <li><a href="<?= get_field('url') ? the_field('url') : '/'?>" target="_blank"><i class="lni-link"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- single work -->
                </div>
            <?php } wp_reset_postdata(); // сброс постов ?>

        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="work-more text-center mt-50">
                    <a class="main-btn" href="#">ещё </a>
                </div> <!-- work more -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== WORK PART ENDS ======-->