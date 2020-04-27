<!-- s-footer
    ================================================== -->
<footer class="s-footer">

    <div class="s-footer__main">
        <div class="row">

            <div class="col-two md-four mob-full s-footer__sitelinks">

                <h4>Quick Links</h4>

                <?php wp_nav_menu([
                        'theme_location' => 'footer',
                        'container' => false,
                        'menu_class' => 's-footer__linklist',
                    ]); ?>
            </div> <!-- end s-footer__sitelinks -->


            <div class="col-five md-full end s-footer__subscribe">

                <h4>Information</h4>

                <p><?= esc_html(get_option('description')) ?> </p>

            </div> <!-- end s-footer__subscribe -->

        </div>
    </div> <!-- end s-footer__main -->

    <div class="s-footer__bottom">
        <div class="row">
            <div class="col-full">
                <div class="s-footer__copyright">
                    <span><?= esc_html(get_option('copyright')) ?></span>
                </div>

                <div class="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"></a>
                </div>
            </div>
        </div>
    </div> <!-- end s-footer__bottom -->

</footer> <!-- end s-footer -->
</body>

</html>