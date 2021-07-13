<?php
/**
 * * The template for displaying the a single training page
 *
 * @package icptta
 */

get_header();

?>
	<main class="main training general">
    <div class="training__date">
        <?php if( get_field('training_date') ){
          $trainingDate = new DateTime(get_field('training_date'));
          echo '<time>' . $trainingDate->format('M d') .'<sup>'. $trainingDate->format('S') .'</sup>, ' . $trainingDate->format('Y'). '</time>';
        } else {
          echo '<p>Coming Soon</p>';
        }?>
          
        
        </div>
    <section class="training__content general--single">
      <?php the_content(); ?>

      <h4 class="h4__header training__h4">To Request Training</h4>
      <p>To access these trainings or to request training not found here contact <strong>Terry Boes</strong> at terry.boes@icf.com or click the link below or call +1-312-995-7467.</p>
      <a href="mailto:terry.boes@icf.com?subject=Customized subject goes here" class="training__cta btn btn--blue">Request Access</a>
    </section>
    

	</main>
<?php get_footer(); ?>