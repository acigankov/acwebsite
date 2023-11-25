<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package acwebsite
 */
get_header();
?>

    <main >

        <?php include_once('inc/_section-hero.php'); ?>
        <?php include_once('inc/_section-about.php'); ?>
        <?php include_once('inc/_section-services.php'); ?>
        <?php include_once('inc/_section-calltoaction.php'); ?>
        <?php include_once('inc/_section-work.php'); ?>
        <?php include_once('inc/_section-pricing.php'); ?>
        <?php include_once('inc/_section-blog.php'); ?>
        <?php include_once('inc/_section-contacts.php'); ?>

    </main><!-- #main -->

<?php
get_footer();