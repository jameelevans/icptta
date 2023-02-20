<?php
/**
 * * The template for displaying the a single resource page
 *
 * @package icptta
 */

get_header();

?>
<!-- Main content -->
<main class="main general">
  <!-- Contact information -->
  <section class="general--single-narrow">
    <div class="contact-us">
      <div class="contact-us__content">
        <p class="p__lead">ICP TTA staff are available to answer any questions you might have about our program, to help you apply for no-cost assistance, or to find the resources you need to use for planning.</p>
      </div>
      <div class="contact">
          <h4 class="contact__header">Contact</h4>
          <p class="contact__details">To reach ICP TTA staff please email or call us at:</p>
          <p><a href="mailto:icptta@icf.com" class="contact__link" title="CLick here to email us"><?php echo svg_icon('contact__icon', 'mail') ?>&nbsp;&nbsp;&nbsp; icptta@icf.com</a></p>
          <p><a href="tel:6172183584" class="contact__link" title="CLick here to call us"><?php echo svg_icon('contact__icon', 'phone') ?>&nbsp; &nbsp;+1-617-218-3584</a></p>
      </div>
    </div>
  </section><!-- .Contact information -->

  <!-- Contact form -->
  <section class="general--single-narrow">
    <?php echo the_content();?>
  </section><!-- .Contact form -->
  <!-- FAQs section -->
  <section class="faqs">
    <h2 class="h2__header--blue faqs__header">FAQs</h2>
    <div class="faqs__content">
    <?php
        $faqs = new WP_Query(array(
          'posts_per_page' => -1,
          'post_type' => 'faqs',
          'order' => 'ASC'
        ));
        while($faqs->have_posts()) {
          $faqs->the_post();?>
          <div class="faqs__drawer">
            <input class="faqs__trigger" id="<?php the_title();?>" type="checkbox" />
            <label class="faqs__title" for="<?php the_title();?>"><?php the_title();?></label>
            <div class="faqs__wrapper">
              <div class="faqs__answer">
                <?php the_content();?>
              </div>
            </div>
          </div>
        <?php }
        wp_reset_postdata();
      ?>
    </div>   
  </section><!-- .FAQs section -->
  <!-- Form button section -->
  <section class="form">
    <a class="btn btn--blue mb-lg" href="<?php echo 'https://forms.office.com/Pages/ResponsePage.aspx?id=e7mQz0a-AEqXAIHOT_G39scp5bMnerROs_IFzZhqodxUREVZT1JDMThITUJCTFRMQzZPVVNDMzI2WS4u'; ?>" target="_blank" title="Click here to navigate to the ICP TTA application">ICPTTA Application</a>
  </section><!-- .Form button section -->
</main><!-- .Main content -->
<?php get_footer(); ?>