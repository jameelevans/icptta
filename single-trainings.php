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
      <a href="mailto:terry.boes@icf.com?subject=Customized subject goes here" class="training__cta btn btn--blue">Request Access</a>
    </section>
    

	</main>
<?php get_footer(); ?>