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
						<p>Need help? <a href="<?php echo esc_url( home_url('/contact-us')); ?>">contact us</a> <?php echo svg_icon('phone__icon', 'mail') ?> or email icptta@icf.com</p>
					</div>
				</div><!-- .Top header contact strip -->

				<!-- Navigation menu wrapper -->
				<div class="header__menu">

					<div class="mobile-nav">
						<input id="navi-toggle" type="checkbox" class="mobile-nav__checkbox">

						<label for="navi-toggle" class="mobile-nav__button">
							<span class="mobile-nav__icon">&nbsp;</span>
						</label>
						<div class="mobile-nav__background">&nbsp;</div>
						<nav class="mobile-nav__nav">
							<ul class="mobile-nav__list">
								<li class="mobile-nav__item"><a href="<?php echo esc_url( home_url('/')); ?>" class="mobile-nav__link<?php if(is_front_page()){echo ' is-current-link';} ?>" title="Navigate to Home page">Home</a></li>
								<li class="mobile-nav__item"><a href="<?php echo esc_url( home_url('/about-us')); ?>" class="mobile-nav__link<?php if(is_page('about-us')){echo ' is-current-link';} ?>" title="Navigate to About us page">About Us</a></li>
								<li class="mobile-nav__item"><a href="<?php echo esc_url( home_url('/16-best-practices')); ?>" class="mobile-nav__link<?php if(is_page('16-best-practices')){echo ' is-current-link';} ?>" title="Navigate to 16 Best Practices page">16 Best Practices</a></li>
								<li class="mobile-nav__item"><a href="<?php echo esc_url( home_url('/resources')); ?>" class="mobile-nav__link<?php if (get_post_type() == 'post') echo ' is-current-link'; ?>" title="Navigate to a resource page">Resources</a></li>
								<li class="mobile-nav__item"><a href="<?php echo esc_url( home_url('/trainings')); ?>" class="mobile-nav__link<?php if (is_page('trainings') or get_post_type() == 'trainings' or is_page('upcoming-trainings') or is_page('past-trainings')) echo ' is-current-link'; ?>" title="Navigate to trainings page">Trainings</a></li>
								<li class="mobile-nav__item"><a href="<?php echo esc_url( home_url('/consultants')); ?>" class="mobile-nav__link<?php if (is_page('consultants') or get_post_type() == 'consultants') echo ' is-current-link'; ?>" title="Navigate to consultants page">Consultants</a></li>
							
								<li class="mobile-nav__item"><a class="nav__cta btn btn--white-outline" href="<?php echo 'https://forms.office.com/Pages/ResponsePage.aspx?id=e7mQz0a-AEqXAIHOT_G39scp5bMnerROs_IFzZhqodxUREVZT1JDMThITUJCTFRMQzZPVVNDMzI2WS4u'; ?>" target="_blank" rel="noreferrer" title="Fill out the ICPTTA application">ICPTTA Application</a></li>
							</ul>
						</nav>
					</div>

					<!-- Navigation content -->
					<nav class="header__content">
						<!-- Logo and off screen title -->
						<a class="header__logo-wrapper" href="<?php echo site_url(); ?>" title="Navigate to Home page">
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
							<li class="nav__item"><a class="nav__link<?php if(is_front_page()){echo ' is-current-link';} ?>" href="<?php echo esc_url( home_url('/')); ?>" title="Navigate to Home page">Home</a></li>
							<li class="nav__item"><a class="nav__link<?php if(is_page('about-us')){echo ' is-current-link';} ?>" href="<?php echo esc_url( home_url('/about-us')); ?>" title="Navigate to About Us page">About Us</a></li>
							<li class="nav__item"><a class="nav__link<?php if(is_page('16-best-practices')){echo ' is-current-link';} ?>" href="<?php echo esc_url( home_url('/16-best-practices')); ?>" title="Navigate to 16 Best Practices page">16 Best Practices</a></li>
							<li class="nav__item"><a class="nav__link<?php if (get_post_type() == 'post') echo ' is-current-link'; ?>" href="<?php echo esc_url( home_url('/resources')); ?>" title="Navigate to a resource page">Resources</a></li>
							<li class="nav__item"><a class="nav__link<?php if (is_page('trainings') or get_post_type() == 'trainings' or is_page('upcoming-trainings') or is_page('trainings-coming-soon')) echo ' is-current-link'; ?>" href="<?php echo esc_url( home_url('/trainings')); ?>" title="Navigate to a trainings page">Trainings</a></li>
							<li class="nav__item"><a class="nav__link<?php if (is_page('consultants') or get_post_type() == 'consultants') echo ' is-current-link'; ?>" href="<?php echo esc_url( home_url('/consultants')); ?>" title="Navigate to a consultants page">Consultants</a></li>

							<?php if (is_user_logged_in() ): ?>
								<li class="nav__item"><a class="nav__link<?php if (is_page('members') or get_post_type() == 'members') echo ' is-current-link'; ?>" href="<?php echo esc_url( home_url('/members')); ?>" title="Navigate to a members page">Members</a></li>
								<li class="nav__item"><a class="nav__link<?php if (is_page('groups') or get_post_type() == 'groups') echo ' is-current-link'; ?>" href="<?php echo esc_url( home_url('/groups')); ?>" title="Navigate to a groups page">Groups</a></li>
								<li class="nav__item"><a class="nav__link<?php if (is_page('news-feed') or get_post_type() == 'news-feed') echo ' is-current-link'; ?>" href="<?php echo esc_url( home_url('/news-feed')); ?>" title="Navigate to a News Feed page">News Feed</a></li>
								<li class="nav__item"><a class="nav__link" href="<?php echo wp_logout_url() ?>" title="Logout">Logout</a></li>
								
							<?php else: ?> 
								<li class="nav__item"><a class="nav__link" href="<?php echo esc_url( home_url('/wp-login.php')); ?>" title="Login">Member Login</a></li>
							<?php endif ?> 
					
							<li class="nav__item"><a class="nav__cta btn btn--blue" href="<?php echo 'https://forms.office.com/Pages/ResponsePage.aspx?id=e7mQz0a-AEqXAIHOT_G39scp5bMnerROs_IFzZhqodxUREVZT1JDMThITUJCTFRMQzZPVVNDMzI2WS4u'; ?>" target="_blank" rel="noreferrer" title="Fill out the ICPTTA Application">ICPTTA Application</a></li>
						</ul><!-- .Navigation menu and CTA -->
					</nav><!-- .Navigation content -->
				</div><!-- .Navigation menu wrapper -->

				<div class="header__main">
					<?php if (is_front_page()) { echo slider();} else {echo general();} ?>
				
					<div class="share">
						<p class="share__text">SHARE</p>
						<a class="share__link" href="https://www.facebook.com/sharer?u=<?php the_permalink();?>&t=<?php the_title(); ?>" title="Click to share this post on Facebook" target="_blank" rel="noreferrer">
							<?php // Display Facebook svg icon
							echo svg_icon('share__icon', 'facebook') ?>
						</a>
						<a class="share__link" href="http://twitter.com/intent/tweet?text=Currently reading <?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" title="Click to tweet this post on Twitter" target="_blank" rel="noreferrer">
							<?php // Display Twitter svg icon
							echo svg_icon('share__icon', 'twitter') ?>
						</a>
						<a class="share__link" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink() ?>&title=<?php the_title(); ?>&summary=&source=<?php bloginfo('name'); ?>" title="Click to share this post on LinkedIn" target="_new">
							<?php // Display Linkedin svg icon
							echo svg_icon('share__icon', 'linkedin') ?>
						</a>
					</div>

					<?php if(get_post_type() == 'trainings') {?>
						<div class="training__date">
								<?php if( get_field('training_date') ){
									$trainingDate = new DateTime(get_field('training_date'));
									echo '<time>' . $trainingDate->format('M d') .'<sup>'. $trainingDate->format('S') .'</sup>, ' . $trainingDate->format('Y'). '</time>';
								} else {
									echo '<p>Coming Soon</p>';
								}?>
						</div>
						<?php } ?>

					
				</div>
			</header><!-- .Header sections -->
 
				