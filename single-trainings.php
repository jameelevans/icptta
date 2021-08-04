<?php
/**
 * * The template for displaying the a single training page
 *
 * @package icptta
 */

get_header();

?>
<!-- Main content -->
<main class="main training general">
  <section class="training--narrow">
    <p class="p__lead p__lead--centered">Trainings are being recorded and are available by clicking on the buttons below.  If you would like customized training please contact us and we will get our subject matter experts to tailor training to your needs.</p>
  </section>
  <section class="training__content general--single-narrow">
    <?php the_content(); ?>
    <h4 class="h4__header training__h4">To Request Training</h4>
    <p>To access these trainings or to request training not found here contact <strong>Terry Boes</strong> at terry.boes@icf.com or click the link below.</p>
    <a href="mailto:terry.boes@icf.com?subject=Request training for <?php the_title(); ?>" class="training__cta btn btn--blue" title="Click here to access training">Access Training</a>
  </section>
</main><!-- .Main content -->
<?php get_footer(); ?>