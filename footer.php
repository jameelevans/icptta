<?php
/**
 * * The template for displaying the footer
 *
 * @package your-wp-project
 */

?>
    
    <!--Footer-->
    <footer class="footer">
        <div class="footer__top">
            <div class="help">
                <h4 class="help__header h2__header h2__header--grey">Looking For Help?</h4>
                <p class="help__details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
sed diam nonummy nibh euismod tincidunt ut</p>
                <a href="" class="help__link btn btn--blue">CONTACT US</a>
            </div>

            <div class="contact">
                <h4 class="contact__header">Contact</h4>
                <p class="contact__details">Lorem ipsum dolor sit amet,
                    consectetuer adipiscing elit,
                    sed diam nonummy nibh
                    euismod tincidunt ut laoreet</p>
                <p><a href="" class="contact__link"><?php echo svg_icon('contact__icon', 'mail') ?>&nbsp;&nbsp;&nbsp; your@email.com</a></p>
                <p><a href="" class="contact__link"><?php echo svg_icon('contact__icon', 'phone') ?>&nbsp; &nbsp;123-123-1234</a></p>
            </div>
        </div>
        <div class="footer__main">
            <div class="footer__logo">
                <img class="footer__icon" src="<?php echo esc_url(get_theme_file_uri('assets/img/icp-tta-login-logo.png')); ?>" alt="">
            </div>
            <div class="footer__content">
                <p class="footer__disclaimer">Funds made available under 2020-V7-GX-K001, awarded by the
                    Office for Victims of Crime, Office of Justice Programs, U.S.
                    Department of Justice. The opinions, findings, and conclusions or
                    recommendations expressed in this program are those of the
                    contributors and do not necessarily represent the official position or
                    policies of the U.S. Department of Justice.</p>
            </div>
            <div class="footer__sitemap">
                <ul class="footer__list">
                    <li class="footer__item"><a class="footer__link" href="">Home</a></li>
                    <li class="footer__item"><a class="footer__link" href="">About us</a></li>
                    <li class="footer__item"><a class="footer__link" href="">Topics</a></li>
                    <li class="footer__item"><a class="footer__link" href="">Resources</a></li>
                    <li class="footer__item"><a class="footer__link" href="">Trainings</a></li>
                    <li class="footer__item"><a class="footer__link" href="">Consultants</a></li>
                    <li class="footer__item"><a class="footer__link" href="">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div class="footer__bottom">
            <p class="footer__copyright">Company Name | 2021</p>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
