<a class="resource" href="">
  <?php // Display Star svg icon
  echo svg_icon('resource__icon', 'star') ?>
  <h4 class="resource__best-practice-title">
    <?php $categories = get_the_category();
          echo esc_html( $categories[0]->name );
    ?>
  </h4>
  <p class="resource__resource-title"><?php echo the_title(); ?></p>
</a>

