<?php
/**
 * * The template for displaying the Trainings page
 *
 * @package icptta
 */

get_header();

?>
<!-- Main trainings content -->
<main class="main general trainings">
  <!-- Available Trainings header -->
  <section class="trainings__section">
    <h2 class="h2__header h2__header--grey">Available Trainings</h2>

    <!-- Lead sententce -->
    <p class="p__lead">The following trainings are available. After viewing, if you or your community are interested in additional information about a specific subject or would like assistance with customizing a webinar’s content to further your mass violence/domestic terrorism response planning, please contact the program at <a title="Click here to contact ICP TTA" href="mailto:icptta@icf.com">icptta@icf.com</a></p>
    <!-- Trainings -->
    <div class="trainings__normal">
    <?php
      $startDate = date('20200101');
      $trainings = new WP_Query(array(
        'posts_per_page' => 6,
        'post_type' => 'trainings',
        'orderby' => 'meta_value_num',
        'meta_key' => 'training_date',
        'order' => 'DEC',
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
                  <div class="trainings__date">Posted on: 
                    <?php if( get_field('training_date') ){
                      $trainingDate = new DateTime(get_field('training_date'));
                      echo '<time>' . $trainingDate->format('M d') .', ' . $trainingDate->format('Y'). '</time>';
                    }?>
                  </div>
                  <p class="trainings__description"><?php
                  if( has_excerpt() ){
                    echo strip_tags(substr( get_the_excerpt(), 0, 100 ))."...";
                    } else {
                    echo wp_trim_words(get_the_content(), 15);
                    }?></p>
                  <a href="<?php the_permalink();?>" class="btn btn--blue" title="Click here to learn more about this training">Learn More</a>
                </div>
              </article>
              </div>
          <?php }
            } elseif (!$featuredTraining->have_posts()) { ?>
            <p class="trainings__no-show">There are currently no available trainings to show</p>
          <?php }
      ?>
    </div><!-- .Normal trainings -->
    <?php  
    if($trainings->have_posts()) { ?>
    <p class="trainings__link">View all available trainings <a href="<?php echo esc_url( home_url('/upcoming-trainings')); ?>" title="Click here to view all available trainings">here</a></p>
    <?php } ?>
  </section><!-- .Available Trainings header -->
  <!-- Trainings coming soon -->
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
                    <a href="<?php the_permalink();?>" class="btn btn--blue" title="Click here learn more about this training">Learn More</a>
                  </div>
                </article>
              </div>
          <?php }
        } else { ?>
          <p class="trainings__no-show">There are no upcoming trainings to show yet</p>
        <?php }
      ?>
    </div>
    <?php if($previousTrainings->have_posts()) { ?> 
      <p class="trainings__link mt-lg">View all trainings coming soon <a href="<?php echo esc_url( home_url('/trainings-coming-soon')); ?>" title="Click here to see all upcoming trainings">here</a></p>
    <?php } ?>
  </section><!-- .Trainings coming soon -->
</main><!-- .Main trainings content -->
<?php get_footer(); ?>
    





