<!-- Indiviual resource -->
<a class="resource" href="<?php the_field('resource_link');?>" title="Click here to view <?php echo the_title(); ?>">
  <?php if ( has_post_thumbnail() ) { ?>
    <img class="resource__icon" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title_attribute(); ?>"/>
    <?php } else { 
    // Display Link svg icon
      echo svg_icon('resource__icon', 'link');
  } ?> 
  <h4 class="resource__best-practice-title">
    <?php $categories = get_the_category();
          echo esc_html( $categories[0]->name );
    ?>
  </h4>
  <p class="resource__resource-title p__body"><?php echo the_title(); ?></p>
</a><!-- .Indiviual resource -->
