<?php
/**
 * * The template for displaying the a single training page
 *
 * @package icptta
 */

get_header();

?>
	<main class="general">
    <div class="training__date">
      <span class="training__month"><?php
                      $trainingDate = new DateTime(get_field('training_date'));
                      echo $trainingDate->format('M')?></span>
      <span class="training__day"><strong><?php echo $trainingDate->format('d') ?></strong></span>
      <span class="training__year"><?php echo $trainingDate->format('Y') ?></span>
    </div>
    <section class="general--single">
      <?php the_content(); ?>
    </section>
    

	</main>
<?php get_footer(); ?>