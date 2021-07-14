<?php
/**
 * * The template for displaying the Trainings page
 *
 * @package icptta
 */

get_header();

?>
	<main class="main general trainings">


        <section class="trainings__section">
          <h2 class="h2__header h2__header--grey">Available Trainings</h2>

          <?php
              $today = date('Ymd');
              $featuredTraining = new WP_Query(array(
                'posts_per_page' => 1,
                'post_type' => 'trainings',
                'orderby' => 'meta_value_num',
                'meta_key' => 'training_date',
                'order' => 'ASC',
                'meta_query' => array(
                  array(
                    'key' => 'training_date',
                    'compare' => '>=',
                    'value' => $today,
                    'type' => 'numeric'
                  )
                )
              ));

              while($featuredTraining->have_posts()) {
                $featuredTraining->the_post();?>
                <div class="trainings__featured">

                  <div class="trainings__figure">
                    <div class="trainings__date">
                      <span class="trainings__month"><?php
                    $trainingDate = new DateTime(get_field('training_date'));
                    echo $trainingDate->format('M')?></span>
                      <span class="trainings__day"><strong><?php echo $trainingDate->format('d') ?></strong></span>
                    </div>

                  <?php if ( has_post_thumbnail() ) { ?>
                    <img class="trainings__img" src="<?php the_post_thumbnail_url('training'); ?>" alt="<?php the_title_attribute(); ?>"/>
                    <?php } else { ?>
                    <img class="trainings__img" src="<?php bloginfo('template_directory'); ?>/assets/img/icptta-training.jpg" alt="<?php the_title(); ?>" />
                  <?php } ?>
                  </div>
                  
                  <div class="trainings__narrow">
                    <h4 class="trainings__heading h2__header--blue"><?php the_title();?></h4>
                    <p class="trainings__description"><?php
                    if( has_excerpt() ){
                      echo strip_tags(substr( get_the_excerpt(), 0, 300 ))."...";
                      } else {
                      echo wp_trim_words(get_the_content(), 35);
                      }?></p>
                      
                    <a href="<?php the_permalink();?>" class="btn btn--blue">Learn More</a>

                  </div>
                </div>
              <?php }
            ?>
  
          <div class="trainings__normal">
          <?php
            $today = date('Ymd');
            $trainings = new WP_Query(array(
              'posts_per_page' => 6,
              'offset' => 1,
              'post_type' => 'trainings',
              'orderby' => 'meta_value_num',
              'meta_key' => 'training_date',
              'order' => 'ASC',
              'meta_query' => array(
                array(
                  'key' => 'training_date',
                  'compare' => '>=',
                  'value' => $today,
                  'type' => 'numeric'
                )
              )
              ));

              if($trainings->have_posts()) {
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
                        <div class="trainings__date">
                          <?php if( get_field('training_date') ){
                            $trainingDate = new DateTime(get_field('training_date'));
                            echo '<time>' . $trainingDate->format('M d') .'<sup>'. $trainingDate->format('S') .'</sup>, ' . $trainingDate->format('Y'). '</time>';
                          }?>
                        </div>
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
                 } else { ?>
                  <p class="trainings__no-show">There no trainings to show yet</p>
               <?php }
            ?>
          </div>
          <p class="trainings__link">View all available trainings <a href="<?php echo esc_url( home_url('/upcoming-trainings')); ?>">here</a></p>

        </section>

        <section class="trainings__section">
          <h2 class="h2__header h2__header--grey">Coming Soon</h2>

          <div class="trainings__normal">
          <?php
            $today = date('Ymd');
            $previousTrainings = new WP_Query(array(
              'posts_per_page' => 3,
              'post_type' => 'trainings',
              'meta_key' => 'training_date',
              'meta_value' => ' ',
              'meta_compare' => '='
              ));

              if($previousTrainings->have_posts()) {
                while($previousTrainings->have_posts()) {
                  $previousTrainings->the_post();?>
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
              } else { ?>
                <p class="trainings__no-show">There no trainings to show yet</p>
             <?php }
            ?>
          </div>

          <p class="trainings__link mt-lg">View all trainings coming soon <a href="<?php echo esc_url( home_url('/trainings-coming-soon')); ?>">here</a></p>


        </section>
        
	</main>
<?php get_footer(); ?>
    





