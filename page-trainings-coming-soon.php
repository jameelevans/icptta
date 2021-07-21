<?php
/**
 * * The template for displaying the Trainings page
 *
 * @package icptta
 */

get_header();

?>
	<main class="main general trainings">


  <section class="general--narrow trainings__section pb-md">
          <div class="trainings__normal">
          <?php
            $today = date('Ymd');
            $trainings = new WP_Query(array(
              'posts_per_page' => -1,
              'post_type' => 'trainings',
              'meta_key' => 'training_date',
              'meta_value' => ' ',
              'meta_compare' => '='
              ));

              while($trainings->have_posts()) {
                $trainings->the_post();?>
                  <div class="trainings__wrapper">
                      <article class="trainings__card">
                        <?php if ( has_post_thumbnail() ) { ?>
                          <div class="trainings__img" style="background-image: url(<?php the_post_thumbnail_url('thumbnail'); ?>);" ></div>
                          <?php } else { ?>
                          <div class="trainings__img" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/icptta-training.jpg);" ></div>
                        <?php } ?>

                        <div class="trainings__details">
                          <h4 class="trainings__heading"><?php the_title();?></h4>
                          <p class="trainings__description"><?php
                          if( has_excerpt() ){
                            echo strip_tags(substr( get_the_excerpt(), 0, 100 ))."...";
                            } else {
                            echo wp_trim_words(get_the_content(), 15);
                            }?></p>
                            
                          <a href="<?php the_permalink();?>" class="btn btn--blue">Learn More</a>
                        </div>
                      </article>
                    </div>
              <?php }
            ?>
          </div>
                  
        </section>
        
	</main>
<?php get_footer(); ?>
    


