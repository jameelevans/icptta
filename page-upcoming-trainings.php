<?php
/**
 * * The template for displaying the All Upcoming Trainings page
 *
 * @package icptta
 */

get_header();

?>
	<main class="main general trainings">


        <section class="general--narrow trainings__section">
  
          <!-- Lead sententce -->
          <p class="p__lead">The following trainings are available, if you would like to meet with the instructors to ask some questions, or have a session tailored to your community, please contact Terry Boes at <a href="mailto:terry.boes@icf.com">terry.boes@icf.com</a></p>


  
          <div class="trainings__normal">
          <?php
            $startDate = date('20200101');
            $trainings = new WP_Query(array(
              'posts_per_page' => -1,
              'post_type' => 'trainings',
              'orderby' => 'meta_value_num',
              'meta_key' => 'training_date',
              'order' => 'ASC',
              'meta_query' => array(
                array(
                  'key' => 'training_date',
                  'compare' => '>=',
                  'value' => $startDate,
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
        

        </section>

        
	</main>
<?php get_footer(); ?>
    


