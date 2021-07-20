<?php
/**
 * * The template for displaying the front page
 *
 * @package icptta
 */

get_header();

?>
	<main class="main general about-us">
    <section class="general--narrow">
      <h2 class="h2__header h2__header--grey about-us__heading">History</h2>
      <p class="about-us__history">The Office for Victims of Crimes, operating under the Department of Justice, has recognized the need for improving the capabilities of communities to deal with the increasing amount of criminal mass violence and domestic terrorism (CMV/DT).  Several gaps have been identified that leave individuals and communities affected by these incidents at risk.  To mitigate these risks, a comprehensive plan to care for victims following CMV/DT incidents must be developed as a part of the overall emergency operations plan for all communities and organizations. 

The ICP TTA program is funded by the Office for Victims of Crime and directed by ICF in cooperation with four national partners and a cadre of subject matter experts from emergency management and victim services.  The program will provide training and technical assistance to incorporate victims services into existing community plans.</p>
    </section>

  
    <section class="partners general--narrow">
      <h2 class="h2__header h2__header--grey about-us__heading">Our Partners</h2>
      <div class="partners__wrapper">
        <?php echo partners();?>
      </div>
    </section>

    <section class="general--narrow">
        <h2 class="h2__header h2__header--grey about-us__heading">ICP TTA Staff</h2>
        <div class="about-us__content">
          <?php the_content();?>
        </div>
    </section>
    
 
    <section class="general--narrow">
      <div class="partners__headline">
        <h2 class="h2__header h2__header--grey about-us__heading">Consultants</h2>
        <p class="p__subheader">ICP TTA is proud to offer a line up of the top emergency management and victim services subject matter experts on our team.  Each brings a different perspective to our group.  We typically team up one emergency management expert and one victim services expert for each of our planning projects. </p>
      </div>

      <div class="consultants__normal mb-md">
        <?php
        $consultants = new WP_Query(array(
          'posts_per_page' => 4,
          'post_type' => 'consultants',
          'order-by'  => 'rand',
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
      <p class="trainings__link">View all consultants <a href="<?php echo esc_url( home_url('/consultants')); ?>">here</a></p>
    </section>
    

	</main>
<?php get_footer(); ?>