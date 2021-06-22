<a class="resource" href="<?php the_permalink();?>" alt="">
  <?php // Display Link svg icon
  echo svg_icon('resource__icon', 'link') ?>
  <h4 class="resource__best-practice-title">
    <?php $categories = get_the_category();
          echo esc_html( $categories[0]->name );
    ?>
  </h4>
  <p class="resource__resource-title p__body"><?php echo the_title(); ?></p>
</a>

