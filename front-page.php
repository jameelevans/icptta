<?php
/**
 * * The template for displaying the front page
 *
 * @package icptta
 */

get_header();

?>
	<main class="main">
		<section class="about fade-in-up">
			<div class="about__logo">
				<img class="about__icon" src="<?php echo esc_url(get_theme_file_uri('assets/img/icp-tta-logo-tag.png')); ?>" alt="ICP TTA logo">
				<h1 class="about__tagline"><?php get_bloginfo( 'description' ) ?></h1>
			</div>
			<div class="about__mission">
				<h3 class="about__mission-header">Mission Statement</h3>
				<p class="about__mission-p p__lead">To deliver individualized training and technical assistance (TTA) to local, state, regional, and tribal jurisdictions across the country, including Washington, D.C., and U.S. territories, to augment existing emergency response plans to ensure that they include effective protocols and strategies to address the immediate and long-term needs of victims, families, and first responders after incidents of criminal mass violence (CMV) and domestic terrorism (DT).</p>
				<a href="<?php echo esc_url( home_url('/about-us')); ?>" class="btn btn--blue">LEARN MORE</a>
			</div>
		</section>
		<section class="partners p-lg'">
      <div class="partners__headline partners--narrow">
        <h2 class="h2__header h2__header--grey">Our Partners</h2>
      </div>

      <div class="partners__wrapper partners__slider partners--narrow mb-hg {
  margin-bottom: 4rem;
}">
				<?php echo partners();?>
      </div>
    </section>
		
		<section class="testimonials">
			<h2 class="h2__header h2__header--white">What Others Are Saying</h2>
			<figure class="testimonial">
						<?php
						$testimonial = new WP_Query(array(
							'posts_per_page' => -1,
							'post_type' => 'testimonials'
						));
						while ($testimonial -> have_posts()) {
							$testimonial -> the_post(); ?>
							
									<blockquote class="testimonial__quote"><?php the_field('quote'); ?>
									<footer>
										<cite class="testimonial__author">- 
										<?php if (get_field('author')){
											 the_field('author');
										} else {
											echo 'Unknown';
										}?></cite>
									</footer>
								</blockquote>
					<?php }
					wp_reset_postdata();
					?>
			</figure>
		</section>
		<section class="home-resources general--narrow">
			<div class="home-resources__header">
				<h2 class="home-resources__heading h2__header h2__header--grey">Resources</h2>
				<p class="home-resources__subheading p__subheader">ICP TTA staff has assembled a comprehensive list of internal and external resources to assist emergency management personnel, victim service professionals and key community stakeholders integrate victim services into their emergency operations plans.</p>
				<a class="home-resources__cta btn btn btn--blue" href="<?php echo esc_url( home_url('/resources')); ?>">VIEW ALL</a>
			</div>
			<div class="home-resources__wrapper">
			<?php
				// Show featured posts
				echo featured_posts();
			?>
			</div>
		</section>
	</main>
<?php get_footer(); ?>
