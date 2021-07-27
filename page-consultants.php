<?php
/**
 * * The template for displaying the Consultants page
 *
 * @package icptta
 */

get_header();

?>
<!-- Main content -->
<main class="main general consultants">
  <!-- Main consultants content -->
  <section class="general--narrow consultants__section">
    <?php the_content();?>

    <div class="consultants__normal">
      <?php
      $consultants = new WP_Query(array(
        'posts_per_page' => -1,
        'post_type' => 'consultants',
        'orderby'  => 'title',
        'order' => 'ASC'
        ));
        if($consultants->have_posts()) {
          while($consultants->have_posts()) {
            $consultants->the_post();?>
              <!-- Individual consultant -->
              <article class="consultants__article">
                <?php if ( has_post_thumbnail() ) { ?>
                  <img class="consultants__img" src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>"/>
                  <?php } else { ?>
                  <img class="consultants__img" src="<?php bloginfo('template_directory'); ?>/assets/img/headshot-fallback.jpg" alt="<?php the_title(); ?>" />
                  <?php } ?>
                <div class="consultants__details">
                  <h4 class="consultants__heading"><a href="<?php the_permalink();?>" title="Click here to view <?php the_title();?>'s consultants page"><?php the_title(); echo svg_icon('consultants__icon', 'link') ?></a></h4>
                  <p class="consultants__description"><?php
                  if( has_excerpt() ){
                    echo strip_tags(substr( get_the_excerpt(), 0, 200 ))."...";
                    } else {
                    echo wp_trim_words(get_the_content(), 30);
                    }?></p>
                </div>
              </article><!-- .Individual consultant -->
          <?php }
            } else { ?>
            <p class="consultants__no-show">There no consultants to show yet</p>
          <?php }
      ?>
    </div>
  </section><!-- .Main consultants content -->    
</main><!-- .Main content -->
<?php get_footer(); ?>
    


