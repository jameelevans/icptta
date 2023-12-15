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
            <!-- Top footer area -->
            <div class="footer__top">
                <!-- Get help area -->
                <div class="help">
                    <h4 class="help__header h2__header h2__header--grey">Looking For Help?</h4>
                    <p class="help__details">ICP TTA staff are available to answer any questions you might have about our program, to help you apply for no-cost assistance, or to find the resources you need to use for planning.</p>
                    <a href="<?php echo esc_url( home_url('/contact-us')); ?>" class="help__link btn btn--blue" title="Click here to navigate to the contact us page">CONTACT US</a>
                </div><!-- .Get help area -->
                <!-- Contact us area -->
                <div class="contact">
                    <h4 class="contact__header">Contact</h4>
                    <p class="contact__details">To reach ICP TTA staff please email or call us at:</p>
                    <p><a href="mailto:icptta@icf.com" class="contact__link" title="Click here to email us now"><?php echo svg_icon('contact__icon', 'mail') ?>&nbsp;&nbsp;&nbsp; icptta@icf.com</a></p>
                    <p><a href="tel:16172183584" class="contact__link" title="Click here to call us now"><?php echo svg_icon('contact__icon', 'phone') ?>&nbsp; &nbsp; +1-617-218-3584</a></p>
                </div><!-- .Contact us area -->
            </div><!-- .Top footer area -->
           <?php } ?>
        <!-- Main footer area -->
        <div class="footer__main">
            <!-- Footer logo -->
            <div class="footer__logo">
                <img class="footer__icon lazyload" src="<?php echo esc_url(get_theme_file_uri('assets/img/icp-tta-login-logo.png')); ?>" alt="ICP TTA logo" draggable="false">
            </div><!-- .Footer logo -->
            <!-- Footer content -->
            <div class="footer__content">
                <p class="footer__disclaimer">Funds made available under 2020-V7-GX-K001, awarded by the
                    Office for Victims of Crime, Office of Justice Programs, U.S.
                    Department of Justice. The opinions, findings, and conclusions or
                    recommendations expressed in this program are those of the
                    contributors and do not necessarily represent the official position or
                    policies of the U.S. Department of Justice.</p>
            </div><!-- .Footer content -->
            <!-- Footer navigation -->
            <div class="footer__sitemap">
                <ul class="footer__list">
                    <li class="footer__item"><a class="footer__link" href="<?php echo esc_url( home_url('/')); ?>" title="Click here to go to the Home page">Home</a></li>
                    <li class="footer__item"><a class="footer__link" href="<?php echo esc_url( home_url('/about-us')); ?>" title="Click here to go to the About us page">About us</a></li>
                    <li class="footer__item"><a class="footer__link" href="<?php echo esc_url( home_url('/16-best-practices')); ?>" title="Click here to go to a 16 Best Practices page">16 Best Practices</a></li>
                    <li class="footer__item"><a class="footer__link" href="<?php echo esc_url( home_url('/resources')); ?>" title="Click here to go to a resources page">Resources</a></li>
                    <li class="footer__item"><a class="footer__link" href="<?php echo esc_url( home_url('/trainings')); ?>" title="Click here to go to a trainings page">Trainings</a></li>
                    <li class="footer__item"><a class="footer__link" href="<?php echo esc_url( home_url('/contact-us')); ?>" title="Click here to go to the Contact Us page">Contact Us</a></li>
                </ul>
            </div> <!-- .Footer navigation -->
        </div><!-- .Main footer area -->
        <!-- Bottom footer area -->
        <div class="footer__bottom">
            <p class="footer__copyright">&copy; 2023 | <? echo get_bloginfo( 'name' ); ?></p>
        </div><!-- .Bottom footer area -->
        <!-- Back top button -->
        <a href="#top" class="back-top__button" title="Click here to scroll back to the top">
            <?php echo svg_icon('back-top__button-icon', 'up') ?>
        </a><!-- .Back top button -->
    </footer><!-- .Footer-->
    <?php wp_footer(); ?>
</body>
</html>
