<?php
/**
 * * The template for displaying the Trainings page
 *
 * @package icptta
 */

get_header();

?>
	<main class="general consultants">


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
                        <img class="consultants__img" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title_attribute(); ?>"/>
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
                          <h5 class="consultants__communities">Selected Communities</h5>
                          <ul>
                            <?php
                                //get all the categories the post belongs to
                                $categories = wp_get_post_categories( get_the_ID() );
                                //loop through them
                                foreach($categories as $c){
                                  $cat = get_category( $c );
                                  //get the name of the category
                                  $cat_id = get_cat_ID( $cat->name );
                                  //make a list item containing a link to the category
                                  echo '<li class="consultants__category"><a href="'.get_category_link($cat_id).'">'.$cat->name.'</a></li>';
                                }
                              ?>
                          </ul>
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
    


