<?php
/**
 * * The template for displaying the front page
 *
 * @package icptta
 */

get_header();

?>
	<!-- Main content area -->
	<main class="main">
		<!-- About section -->
		<section class="about fade-in-up">
			<!-- About logo -->
			<div class="about__logo">
				<img class="about__icon" src="<?php echo esc_url(get_theme_file_uri('assets/img/icp-tta-logo-tag.png')); ?>" alt="ICP TTA logo">
				<h1 class="about__tagline"><?php get_bloginfo( 'description' ) ?></h1>
			</div><!-- .About logo -->
			<!-- About mission -->
			<div class="about__mission">
				<p class="about__mission-p p__lead">Whether it be the Boston Marathon Bombing or yet another shooting at a school, nightclub, or concert, it seems as if criminal mass violence and domestic terrorism (CMV/DT) events have become all too common in our current world. While we hope these incidents never happen, we also need to be prepared when they do. ICP TTA is here to equip your community with the knowledge and resources you will need. </p>
				<a href="<?php echo esc_url( home_url('/about-us')); ?>" class="btn btn--blue" title="Click here to learn more about us">LEARN MORE</a>
			</div><!-- .About mission -->
		</section><!-- .About section -->
		<!-- Partners Section -->
		<section class="partners p-lg'">
			<!-- Partners headline -->
      <div class="partners__headline partners--narrow">
        <h2 class="h2__header h2__header--grey">Our Partners</h2>
      </div><!-- .Partners headline -->
			<!-- Partners wrapper -->
      <div class="partners__wrapper partners__slider partners--narrow mb-hg">
				<?php echo partners();?>
      </div><!-- .Partners wrapper -->
    </section><!-- .Partners Section -->
		<!-- Testimonials section -->
		<section class="testimonials">
			<!-- Testimonials heading -->
			<h2 class="h2__header h2__header--white">What Others Are Saying</h2>
			<figure class="testimonial">
						<?php
						$testimonial = new WP_Query(array(
							'posts_per_page' => -1,
							'post_type' => 'testimonials'
						));
						while ($testimonial -> have_posts()) {
							$testimonial -> the_post(); ?>
						<!-- Individual testimonal -->
						<blockquote class="testimonial__quote"><?php the_field('quote'); ?>
							<footer>
								<cite class="testimonial__author">- 
								<?php if (get_field('author')){
										the_field('author');
								} else {
									echo 'Anonymous';
								}?></cite>
							</footer>
						</blockquote><!-- .Individual testimonal -->
					<?php }
					wp_reset_postdata();
					?>
			</figure>
		</section><!-- .Testimonials section -->
		<!-- Resources section -->
		<section class="home-resources general--narrow">
			<!-- Resources header-->
			<div class="home-resources__header">
				<h2 class="home-resources__heading h2__header h2__header--grey">Resources</h2>
				<p class="home-resources__subheading p__subheader">ICP TTA staff has assembled a comprehensive list of internal and external resources to assist emergency management personnel, victim service professionals and key community stakeholders integrate victim services into their emergency operations plans.</p>
				<a class="home-resources__cta btn btn btn--blue" href="<?php echo esc_url( home_url('/resources')); ?>" title="Click here to view all of our resources">VIEW ALL</a>
			</div><!-- .Resources header-->
			<!-- Resources wrapper-->
			<div class="home-resources__wrapper">
				<?php
					// Show featured posts
					echo featured_posts();
				?>
			</div><!-- .Resources wrapper-->
		</section><!-- .Resources section -->
	</main><!-- .Main content area -->
<?php get_footer(); ?>
