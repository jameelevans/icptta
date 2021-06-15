<?php
/**
 * * The template for displaying the header
 *
 * @package icptta
 */
?>
	<!doctype html>
	<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>

    <body class="container <?php if (is_front_page()) { echo 'front-page';} else {echo 'general';} ?>">
			<!-- Header sections -->
			<header id="top" class="header">
				<!-- Top header contact strip -->
				<div class="header__top">
					<div class="header__top-details">
						<p>Need help? <?php echo svg_icon('phone__icon', 'phone') ?> Call Tara (xxx) xxx-xxxx</p>
					</div>
				</div><!-- .Top header contact strip -->

				<!-- Navigation menu wrapper -->
				<div class="header__menu">
					<!-- Header menu icon - Uncomment later <div class="header__icon"></div>-->

					<!-- Navigation content -->
					<nav class="header__content">
						<!-- Logo and off screen title -->
						<a class="header__heading" href="<?php echo site_url(); ?>">
									<?php
										$custom_logo_id = get_theme_mod( 'custom_logo' );
										$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
										if ( has_custom_logo() ) {
														echo '<img class="header__logo" src="' . esc_url( $logo[0] ) . '"' . 'alt="' . get_bloginfo( 'name' ) . '" draggable="false">';
														echo '<span class="header__title">' . get_bloginfo( 'name' ) . '</span>';
										} else {
														echo '';
										}
									?>
						</a><!-- .Logo and off screen site title -->

						<!-- Navigation menu and CTA -->
						<ul class="nav">
							<li class="nav__item"><a class="nav__link" href="">Home</a></li>
							<li class="nav__item"><a class="nav__link" href="">About Us</a></li>
							<li class="nav__item"><a class="nav__link" href="">Resources</a></li>
							<li class="nav__item"><a class="nav__link" href="">Trainings</a></li>
							<li class="nav__item"><a class="nav__link" href="">Consultants</a></li>
							<li class="nav__item"><a class="nav__link" href="">Contact Us</a></li>
							<a class="nav__cta btn btn--blue" href="">Sign Up Now</a>
						</ul><!-- .Navigation menu and CTA -->
					</nav><!-- .Navigation content -->
				</div><!-- .Navigation menu wrapper -->

				<div class="header__main">
						<div class="slider">
								<?php
								$slider = new WP_Query(array(
									'posts_per_page' => -1,
									'post_type' => 'slide'
								));
								while ($slider -> have_posts()) {
									$slider -> the_post(); ?>
									<div class="slider__slide">
										<div class="slider__text">
											<h2 class="slider__heading"><?php echo get_the_title(); ?></h2>
											<p class="slider__subheading"><?php the_field('sub_heading'); ?></p>
											<div class="slider__buttons">
												<a href="<?php the_field('link_learn'); ?>" class="slider__links btn btn--white-outline">Learn More</a>
												<a href="" class="slider__links btn btn--blue">CONTACT US</a>
											</div>
										</div>
										<div class="slider__image">
											<?php // Class=wp-post-image
											echo get_the_post_thumbnail(); ?>
										</div>
									</div>
							<?php }
							wp_reset_postdata();
							?>
					</div>
					
					<div class="share">
						<p class="share__text">SHARE</p>
						<a class="share__link" href="https://www.facebook.com/sharer?u=<?php the_permalink();?>&t=<?php the_title(); ?>" title="Click to share this post on Facebook" target="_blank">
							<?php // Display Facebook svg icon
							echo svg_icon('share__icon', 'facebook') ?>
						</a>
						<a class="share__link" href="http://twitter.com/intent/tweet?text=Currently reading <?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" title="Click to tweet this post on Twitter" target="_blank">
							<?php // Display Twitter svg icon
							echo svg_icon('share__icon', 'twitter') ?>
						</a>
						<a class="share__link" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink() ?>&title=<?php the_title(); ?>&summary=&source=<?php bloginfo('name'); ?>" title="Click to share this post on Linkedin" target="_new">
							<?php // Display Linkedin svg icon
							echo svg_icon('share__icon', 'linkedin') ?>
						</a>
					</div>

					
				</div>
			</header><!-- .Header sections -->
 
				