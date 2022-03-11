<?php
/**
 * * The template for displaying the about us page
 *
 * @package icptta
 */

get_header();

?>
<!-- Main about us content -->
<main class="main general about-us">
    <!-- Mission section -->
    <section class="general--about-us">
    <h2 class="h2__header h2__header--grey about-us__heading">Mission Statement</h2>
    <p class="about-us__mission">To ensure local, state, regional, and tribal jurisdictions across the country are better prepared to respond to the needs of victims following incidents of criminal mass violence and domestic terrorism (CMV/DT).<br/><br/>
We do this by:</p>
    <ul class="about-us__list">
      <li class="about-us__item">Promoting protocols and strategies that address the immediate and long-term needs of victims, families, and first responders </li>
      <li class="about-us__item">Providing individualized training and technical assistance</li>
      <li class="about-us__item">Augmenting existing emergency response plans</li>
    </ul>

    
  </section><!-- .Mission section -->

  <!-- History section -->
  <section class="general--about-us">
    <h2 class="h2__header h2__header--grey about-us__heading">History</h2>
    <p class="about-us__history">In 2020, the Office for Victims of Crime, operating under the US Department of Justice, recognized a need to improve communities’ capabilities to deal with increasing amounts of criminal mass violence and domestic terrorism (CMV/DT).</p>
    <p class="about-us__history">The needs that arise from CMV/DT are seen in victims, responders, and their impacted communities.</p>
    <p class="about-us__history">Victims struggle with many of the following:</p>
    <ul class="about-us__list">
      <li class="about-us__item">Emotional reactions that may remain for extended periods of time</li>
      <li class="about-us__item">Need for medical and rehabilitative care,</li>
      <li class="about-us__item">Need for financial support for health care and adaptive equipment </li>
      <li class="about-us__item">Loss of employment income</li>
      <li class="about-us__item mb-lg">Navigating regulations and forms for insurance claims, victim compensation, and unemployment.</li>
    </ul>
    <p class="about-us__history">Responders may also struggle with the following:</p>
    <ul class="about-us__list">
      <li class="about-us__item">Vicarious trauma </li>
      <li class="about-us__item">Behavioral health concerns, including increased substance use/abuse, depression, and anxiety</li>
      <li class="about-us__item">Increased responder suicides or domestic violence incidents</li>
    </ul>

    <p class="about-us__history">Communities grapple with the loss of community members and how to return to a sense of safety. </p>
    <p class="about-us__history">The Improving Community Preparedness to Assist Victims of Mass Violence and Domestic Terrorism: Training and Technical Assistance (ICP TTA) program was funded by the Office for Victims of Crime to address these concerns. Directed by ICF, in cooperation with four national partners and a cadre of subject matter experts, ICP TTA provides training and technical assistance using <a class="link" href="/resources">16 best practices</a> to close the gap between emergency management and victim services operations. </p>
  </section><!-- .History section -->
  <!-- Partners section -->
  <section class="partners general--narrow">
    <h2 class="h2__header h2__header--grey about-us__heading">Our Partners</h2>
    <div class="partners__wrapper">
      <?php echo partners();?>
    </div>
  </section><!-- .Partners section -->
  <!-- Staff section -->
  <section class="general--narrow">
      <h2 class="h2__header h2__header--grey about-us__heading">ICP TTA Staff</h2>
      <!-- Staff content -->
      <div class="about-us__content">
        <?php the_content();?>
      </div><!-- .Staff content -->
  </section><!-- .Staff section -->
  <!-- Consultants section -->
  <section class="general--narrow">
    <div class="partners__headline">
      <h2 class="h2__header h2__header--grey about-us__heading">Consultants</h2>
      <p class="p__subheader">ICP TTA is proud to offer a line up of the top emergency management and victim services subject matter experts on our team.  Each brings a different perspective to our group.  We typically team up one emergency management expert and one victim services expert for each of our planning projects. </p>
    </div>
    <div class="consultants__normal mb-md">
      <?php
      $consultants = new WP_Query(array(
        'posts_per_page' => 4, // Only show 4 results
        'post_type' => 'consultants',
        'order-by'  => 'rand',
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
                  <h4 class="consultants__heading"><a href="<?php the_permalink();?>" title="Click here to visit <?php the_title(); ?>'s consulatants page "><?php the_title(); echo svg_icon('consultants__icon', 'link') ?></a></h4>
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
    <p class="trainings__link">View all consultants <a href="<?php echo esc_url( home_url('/consultants')); ?>" title="Click here to view all of our consultants">here</a></p>
  </section><!-- .Consultants section -->
</main><!-- .Main about us content -->
<?php get_footer(); ?>