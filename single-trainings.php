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
  </section>
</main><!-- .Main content -->
<?php get_footer(); ?>