<?php
/**
 * * The template for displaying the footer
 *
 * @package your-wp-project
 */

?>
    
    <!--Footer-->
    <footer class="footer">
        <?php if(!is_page('contact-us')){?>
            <div class="footer__top">
            <div class="help">
                <h4 class="help__header h2__header h2__header--grey">Looking For Help?</h4>
                <p class="help__details">ICP TTA staff are available to answer any questions you might have about our program, to help you apply for no-cost assistance, or to find the resources you need to use for planning.</p>
                <a href="<?php echo esc_url( home_url('/contact-us')); ?>" class="help__link btn btn--blue">CONTACT US</a>
            </div>

            <div class="contact">
                <h4 class="contact__header">Contact</h4>
                <p class="contact__details">To reach ICP TTA staff please email or call Tara Hughes at:</p>
                <p><a href="mailto:tara.hughes@icf.com" class="contact__link"><?php echo svg_icon('contact__icon', 'mail') ?>&nbsp;&nbsp;&nbsp; tara.hughes@icf.com</a></p>
                <p><a href="tel:16172183584" class="contact__link"><?php echo svg_icon('contact__icon', 'phone') ?>&nbsp; &nbsp; +1-617-218-3584</a></p>
            </div>
        </div>
            
           <?php } ?>
        <div class="footer__main">
            <div class="footer__logo">
                <img class="footer__icon lazyload" src="<?php echo esc_url(get_theme_file_uri('assets/img/icp-tta-login-logo.png')); ?>" alt="ICP TTA logo">
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
                    <li class="footer__item"><a class="footer__link" href="<?php echo esc_url( home_url('/')); ?>">Home</a></li>
                    <li class="footer__item"><a class="footer__link" href="<?php echo esc_url( home_url('/about-us')); ?>">About us</a></li>
                    <li class="footer__item"><a class="footer__link" href="<?php echo esc_url( home_url('/resources')); ?>">Resources</a></li>
                    <li class="footer__item"><a class="footer__link" href="<?php echo esc_url( home_url('/trainings')); ?>">Trainings</a></li>
                    <li class="footer__item"><a class="footer__link" href="<?php echo esc_url( home_url('/consultants')); ?>">Consultants</a></li>
                    <li class="footer__item"><a class="footer__link" href="<?php echo esc_url( home_url('/contact-us')); ?>">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div class="footer__bottom">
            <p class="footer__copyright">&copy; 2021 | <? echo get_bloginfo( 'name' ); ?></p>
        </div>
        <a href="#top" class="back-top__button">
            <?php echo svg_icon('back-top__button-icon', 'up') ?>
        </a>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
