<?php
/**
 * * The template for displaying the front page
 *
 * @package icptta
 */

get_header();

?>
	<main>
        <section class="about fade-in-up">
					<div class="about__logo">
					<?php
										$custom_logo_id = get_theme_mod( 'custom_logo' );
										$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
										if ( has_custom_logo() ) {
														echo '<img class="about__icon" src="' . esc_url( $logo[0] ) . '"' . 'alt="' . get_bloginfo( 'name' ) . '" draggable="false">';
														echo '<h1 class="about__tagline">' . get_bloginfo( 'description' ) . '</h1>';
										} else {
														echo '';
										}
									?>
					</div>
					<div class="about__mission">
						<h3 class="about__mission-header">Mission Statement</h3>
						<p class="about__mission-p p__lead">Lorem ipsum dolor sit amet, consectet adipiscing
						elit, sed diam nonummy nibh euismod tincidunt ut
						laoreet dolore magna aliquam erat volutpat. Ut
						wisi enim ad minim veniam, quis nostrud exerci</p>
						<a href="#" class="btn btn--blue">LEARN MORE</a>
					</div>
				</section>
				<?php echo partners('p-lg');?>
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
												<cite class="testimonial__author">- <?php the_field('author'); ?></cite>
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
						<p class="home-resources__subheading p__subheader">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad</p>
						<a class="home-resources__cta btn btn btn--blue">LEARN MORE</a>
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
