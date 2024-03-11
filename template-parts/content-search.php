<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package acwebsite
 */

?>

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
</div><!-- #post-<?php the_ID(); ?> -->
