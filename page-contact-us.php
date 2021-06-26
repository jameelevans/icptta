<?php
/**
 * * The template for displaying the a single resource page
 *
 * @package icptta
 */

get_header();

?>
	<main class="general">
    <section class="general--single-narrow">
      <div class="contact-us">
        <div class="contact-us__content">
          <p class="p__lead">Lorem ipsum dolor sit amet, consectetuer adipiscing
        elit, sed diam nonummy nibh euismod tincidunt ut
        laoreet dolore magna aliquam erat volutpat. Ut wisi
        enim ad minim veniam, quis nostrud exerci tation
        ullamcorper suscipit lobortis nisl ut aliquip ex ea
        commodo consequat.</p>
        </div>
        
        <div class="contact">
            <h4 class="contact__header">Contact</h4>
            <p class="contact__details">Lorem ipsum dolor sit amet,
                consectetuer adipiscing elit,
                sed diam nonummy nibh
                euismod tincidunt ut laoreet</p>
            <p><a href="" class="contact__link"><?php echo svg_icon('contact__icon', 'mail') ?>&nbsp;&nbsp;&nbsp; your@email.com</a></p>
            <p><a href="" class="contact__link"><?php echo svg_icon('contact__icon', 'phone') ?>&nbsp; &nbsp;123-123-1234</a></p>
        </div>
        
      </div>
    </section>

    <section class="faqs general--narrow">
      <h2 class="h2__header--blue faqs__header">FAQs</h2>

      <div class="faqs__content">
      <?php
          $faqs = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'faqs',
            'order' => 'ASC'
          ));

          while($faqs->have_posts()) {
            $faqs->the_post();?>
            
            <div class="faqs__drawer">
              <input class="faqs__trigger" id="<?php the_title();?>" type="checkbox" />
              <label class="faqs__title" for="<?php the_title();?>"><?php the_title();?></label>
              <div class="faqs__wrapper">
                <div class="faqs__answer">
                  <?php the_content();?>
                </div>
              </div>
            </div>

          <?php }
          wp_reset_postdata();
        ?>
      </div>   
    
    </section>

    <section class="form">
      <?php the_content();?>
    </section>
    

	</main>
<?php get_footer(); ?>


