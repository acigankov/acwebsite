<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package acwebsite
 */

?>

<!--====== FOOTER PART START ======-->

<footer id="footer" class="footer-area">
    <div class="footer-widget pt-130 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="footer-content text-center">
                        <a href="/">
                            <img class="logo" src="<?= get_template_directory_uri()?>/assets/images/logo-2.png" alt="Logo">
                        </a>
                        <p class="mt-">Web-разработчик. Опыт с 2016 года. В основном занимаюсь фронтендом. Люблю делать красивости.</p>
                        <ul>
                            <li><a href="https://vk.com/acigankov" target="_blank"><i class="lni lni-vk"></i></a></li>
                            <li><a href="https://github.com/acigankov" target="_blank"><i class="lni lni-github-original"></i></a></li>
                            <li><a href="https://t.me/acigankov" target="_blank"><i class="lni lni-telegram"></i></a></li>
                        </ul>
                    </div> <!-- footer content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- footer widget -->
    <div class="footer-copyright pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text text-center pt-20">
                        <p>© 2022. Acweb </p>
                    </div> <!-- copyright text -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- footer widget -->
</footer>

<!--====== FOOTER PART ENDS ======-->

<!--====== BACK TOP TOP PART START ======-->

<a href="/" class="back-to-top"><i class="lni-chevron-up"></i></a>

<!--====== BACK TOP TOP PART ENDS ======-->

<?php wp_footer(); ?>

</body>
</html>
