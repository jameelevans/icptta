<?php
/**
 * * The template for displaying the Trainings page
 *
 * @package icptta
 */

get_header();

?>
	<main class="main general consultants">


        <section class="general--narrow consultants__section">
          <?php the_content();?>
       
  
          <div class="consultants__normal">
            <?php
            $consultants = new WP_Query(array(
              'posts_per_page' => -1,
              'post_type' => 'consultants',
              'order-by'  => 'title',
              'order' => 'ASC'

              ));

              if($consultants->have_posts()) {
                while($consultants->have_posts()) {
                  $consultants->the_post();?>
                    <article class="consultants__article">
                      
                      <?php if ( has_post_thumbnail() ) { ?>
                        <img class="consultants__img" src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>"/>
                       <?php } else { ?>
                        <img class="consultants__img" src="<?php bloginfo('template_directory'); ?>/assets/img/headshot-fallback.jpg" alt="<?php the_title(); ?>" />
                        <?php } ?>
                    
                      <div class="consultants__details">
                        <h4 class="consultants__heading"><a href="<?php the_permalink();?>"><?php the_title(); echo svg_icon('consultants__icon', 'link') ?></a></h4>
                        <p class="consultants__description"><?php
                        if( has_excerpt() ){
                          echo strip_tags(substr( get_the_excerpt(), 0, 200 ))."...";
                          } else {
                          echo wp_trim_words(get_the_content(), 30);
                          }?></p>

                      </div>
                    </article>
                <?php }
                 } else { ?>
                  <p class="consultants__no-show">There no consultants to show yet</p>
               <?php }
            ?>
          </div>
          

        </section>

        
        
	</main>
<?php get_footer(); ?>
    


