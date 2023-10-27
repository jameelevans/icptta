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
				<!--<img class="about__icon" src="<?php echo esc_url(get_theme_file_uri('assets/img/icp-tta-logo-tag.png')); ?>" alt="ICP TTA logo">-->
				<h1 class="about__tagline"><?php get_bloginfo( 'description' ) ?></h1>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/VWszsfPFX48?si=sTqvvZaXVEUvQdoi" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><br />
					<a class="about__youtube" href="https://youtu.be/k_6EjdhfIaw" target="_blank">See Spanish intro here >></a>

			</div><!-- .About logo -->
			<!-- About mission -->
			<div class="about__mission">
				<p class="about__mission-p p__lead">Whether it be the Boston Marathon Bombing or yet another shooting at a school, nightclub, or concert, it seems as if criminal mass violence and domestic terrorism (CMV/DT) events have become all too common in our current world. While we hope these incidents never happen, we also need to be prepared when they do. ICP TTA is here to equip your community with the knowledge and resources you will need. </p>
				<a href="<?php echo esc_url( home_url('/about-us')); ?>" class="btn btn--blue" title="Click here to learn more about us">LEARN MORE</a>
			</div><!-- .About mission -->
		</section><!-- .About section -->

				<!-- Program section -->
		<section class="program">
			<div class="program__wrapper">
				<!-- Program heading -->
				<h2 class="h2__header h2__header--white">What the ICP TTA Program Can Do for You</h2>
				<p class="p__subheader--white">The lack of a comprehensive plan to care for victims after a CMV/DT event may leave a community at risk for a chaotic response. This means precious resources may be wasted, and victims might not receive the services they need.  ICP TTA has a number of subject matter experts with lived experience responding to CMV/DT events. These individuals use their expertise to:</p>
			</div>

			<div class="program__benifits">
				<!-- Indiviual benifit -->
				<div class="benifit">
				<?php /* Display svg icon*/ echo svg_icon('benifit__icon', 'ballot-check') ?>
					<p class="benifit__benifit-title p__body">Assist your community in the development of a CMV/DT annex plan focused on victim care</p>
				</div><!-- .Indiviual benifit -->
				<div class="benifit">
					<?php /* Display svg icon*/ echo svg_icon('benifit__icon', 'committee') ?>
					<p class="benifit__benifit-title p__body">Facilitate relationships with CMV/DT response stakeholders</p>
				</div><!-- .Indiviual benifit -->
				<div class="benifit">
					<?php /* Display svg icon*/ echo svg_icon('benifit__icon', 'clipboard-user') ?>
					<p class="benifit__benifit-title p__body">Administer trainings targeted to your community’s planning needs</p>
				</div><!-- .Indiviual benifit -->
				<div class="benifit">
				<?php /* Display svg icon*/ echo svg_icon('benifit__icon', 'users-cog') ?>
					<p class="benifit__benifit-title p__body">Incorporate victim care into existing drills/exercises</p>
				</div><!-- .Indiviual benifit -->
				<div class="benifit">
				<?php /* Display svg icon*/ echo svg_icon('benifit__icon', 'hand-holding-medical') ?>
					<p class="benifit__benifit-title p__body">Provide resources specific to your community’s planning efforts</p>
				</div><!-- .Indiviual benifit -->
			</div>	
			
			<p class="program__cta">Due to grant funding through the Office for Victims of Crime, these services are provided at no cost to accepted communities, so <a href="https://forms.office.com/Pages/ResponsePage.aspx?id=e7mQz0a-AEqXAIHOT_G39scp5bMnerROs_IFzZhqodxUREVZT1JDMThITUJCTFRMQzZPVVNDMzI2WS4u" target="blank">apply today!</a></p>
			
		
		</section><!-- .Program section -->

		<!-- Partners Section -->
		<section class="partners p-lg">
			<!-- Partners headline -->
      <div class="partners__headline partners--narrow">
        <h2 class="h2__header h2__header--grey mt-hg">Our Partners</h2>
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
		
		<!-- Resources & Foundations section -->
		<section class="home-resources general--narrow">
			<!-- Resources header-->
			<div class="home-resources__header">
				<h2 class="home-resources__heading h2__header h2__header--grey">Resources</h2>
				<p class="home-resources__subheading p__subheader">ICP TTA staff has assembled a comprehensive list of internal and external resources to assist emergency management personnel, victim service professionals and key community stakeholders integrate victim services into their emergency operations plans.</p>
				<a class="home-resources__cta btn btn btn--blue" href="<?php echo esc_url( home_url('/resources')); ?>" title="Click here to view all of our resources">VIEW ALL</a>
			</div><!-- .Resources header-->
			<!-- Resources wrapper-->

			<div class="foundations">
								
				<h2 class="foundations__heading">Program Foundations</h2>

				<div class="home-resources__wrapper">
					
					<!-- Indiviual foundation -->
					<a class="foundation" href="<?php echo esc_url( home_url('/16-best-practices')); ?>#incident-command-system" title="Click here to navigate to Incident Command System">
							<?php 
							// Display Link svg icon
								echo svg_icon('foundation__icon', 'command-system');?> 
						<h4 class="foundation__best-practice-title">Incident Command System</h4>
					</a><!-- .Indiviual foundation -->
					<!-- Indiviual foundation -->
					<a class="foundation" href="<?php echo esc_url( home_url('/16-best-practices')); ?>#committee-identification-engagement" title="Click here to navigate to Committee Identification &amp; Engagement">
							<?php 
							// Display Link svg icon
								echo svg_icon('foundation__icon', 'committee');?> 
						<h4 class="foundation__best-practice-title">Committee Identification &amp; Engagement</h4>
					</a><!-- .Indiviual foundation -->
					<!-- Indiviual foundation -->
					<a class="foundation" href="<?php echo esc_url( home_url('/16-best-practices')); ?>#contact-list" title="Click here to navigate to Contact List">
							<?php 
							// Display Link svg icon
								echo svg_icon('foundation__icon', 'ballot-check');?> 
						<h4 class="foundation__best-practice-title">Contact List</h4>
					</a><!-- .Indiviual foundation -->
					<!-- Indiviual foundation -->
					<a class="foundation" href="<?php echo esc_url( home_url('/16-best-practices')); ?>#frc" title="Click here to navigate to Friends and Family Reception/Notification Center (FRC) Plan">
							<?php 
							// Display Link svg icon
								echo svg_icon('foundation__icon', 'clipboard-user');?> 
						<h4 class="foundation__best-practice-title">Friends and Family Reception/ Notification Center (FRC) Plan</h4>
					</a><!-- .Indiviual foundation -->
					<!-- Indiviual foundation -->
					<a class="foundation" href="<?php echo esc_url( home_url('/16-best-practices')); ?>#victim-identification" title="Click here to navigate to Victim Identification and Notification Protocol">
							<?php 
							// Display Link svg icon
								echo svg_icon('foundation__icon', 'comment-exclamation');?> 
						<h4 class="foundation__best-practice-title">Victim Identification and Notification Protocol</h4>
					</a><!-- .Indiviual foundation -->
					<!-- Indiviual foundation -->
					<a class="foundation" href="<?php echo esc_url( home_url('/16-best-practices')); ?>#public-information-crisis-communications-protocol" title="Click here to navigate to Public Information and Crisis Communications Protocol">
							<?php 
							// Display Link svg icon
								echo svg_icon('foundation__icon', 'broadcast-tower');?> 
						<h4 class="foundation__best-practice-title">Public Information and Crisis Communications Protocol</h4>
					</a><!-- .Indiviual foundation -->
					<!-- Indiviual foundation -->
					<a class="foundation" href="<?php echo esc_url( home_url('/16-best-practices')); ?>#volunteer-management-protocol" title="Click here to navigate to Volunteer Management Protocol">
							<?php 
							// Display Link svg icon
								echo svg_icon('foundation__icon', 'hand-holding-heart');?> 
						<h4 class="foundation__best-practice-title">Volunteer Management Protocol</h4>
					</a><!-- .Indiviual foundation -->
					<!-- Indiviual foundation -->
					<a class="foundation" href="<?php echo esc_url( home_url('/16-best-practices')); ?>#fac" title="Click here to navigate to Family/Friends Assistance Center (FAC) Protocol">
							<?php 
							// Display Link svg icon
								echo svg_icon('foundation__icon', 'hand-holding-medical');?> 
						<h4 class="foundation__best-practice-title">Family/Friends Assistance Center (FAC) Protocol</h4>
					</a><!-- .Indiviual foundation -->
					<!-- Indiviual foundation -->
					<a class="foundation" href="<?php echo esc_url( home_url('/16-best-practices')); ?>#donation-management-protocol" title="Click here to navigate to Donation Management Protocol">
							<?php 
							// Display Link svg icon
								echo svg_icon('foundation__icon', 'donate');?> 
						<h4 class="foundation__best-practice-title">Donation Management Protocol</h4>
					</a><!-- .Indiviual foundation -->
					<!-- Indiviual foundation -->
					<a class="foundation" href="<?php echo esc_url( home_url('/16-best-practices')); ?>#memorial-special-events-management-plan" title="Click here to navigate to Memorial and Special Events Management Plan">
							<?php 
							// Display Link svg icon
								echo svg_icon('foundation__icon', 'ribbon');?> 
						<h4 class="foundation__best-practice-title">Memorial and Special Events Management Plan</h4>
					</a><!-- .Indiviual foundation -->
					<!-- Indiviual foundation -->
					<a class="foundation" href="<?php echo esc_url( home_url('/16-best-practices')); ?>#community-behavioral-health-response" title="Click here to navigate to Community Behavioral Health Response">
							<?php 
							// Display Link svg icon
								echo svg_icon('foundation__icon', 'head-side-medical');?> 
						<h4 class="foundation__best-practice-title">Community Behavioral Health Response</h4>
					</a><!-- .Indiviual foundation -->
					<!-- Indiviual foundation -->
					<a class="foundation" href="<?php echo esc_url( home_url('/16-best-practices')); ?>#first-responder-support" title="Click here to navigate to First Responder Support">
							<?php 
							// Display Link svg icon
								echo svg_icon('foundation__icon', 'first-aid');?> 
						<h4 class="foundation__best-practice-title">First Responder Support</h4>
					</a><!-- .Indiviual foundation -->
					<!-- Indiviual foundation -->
					<a class="foundation" href="<?php echo esc_url( home_url('/16-best-practices')); ?>#planning-preparedness-grants-emergency-funding-assistance" title="Click here to navigate to Planning &amp; Preparedness Grants and Emergency Funding Assistance">
							<?php 
							// Display Link svg icon
								echo svg_icon('foundation__icon', 'hands-usd');?> 
						<h4 class="foundation__best-practice-title">Planning &amp; Preparedness Grants and Emergency Funding Assistance</h4>
					</a><!-- .Indiviual foundation -->
					<!-- Indiviual foundation -->
					<a class="foundation" href="<?php echo esc_url( home_url('/16-best-practices')); ?>#community-resilience-planning" title="Click here to navigate to Community Resilience Planning">
							<?php 
							// Display Link svg icon
								echo svg_icon('foundation__icon', 'users');?> 
						<h4 class="foundation__best-practice-title">Community Resilience Planning</h4>
					</a><!-- .Indiviual foundation -->
					<!-- Indiviual foundation -->
					<a class="foundation" href="<?php echo esc_url( home_url('/16-best-practices')); ?>#criminal-justice-system-victim-support" title="Click here to navigate to Criminal Justice System – Victim Support">
							<?php 
							// Display Link svg icon
								echo svg_icon('foundation__icon', 'gavel');?> 
						<h4 class="foundation__best-practice-title">Criminal Justice System – Victim Support</h4>
					</a><!-- .Indiviual foundation -->
					<!-- Indiviual foundation -->
					<a class="foundation" href="<?php echo esc_url( home_url('/16-best-practices')); ?>#training-exercise" title="Click here to navigate to">
							<?php 
							// Display Link svg icon
								echo svg_icon('foundation__icon', 'users-cog');?> 
						<h4 class="foundation__best-practice-title">Training and Exercise</h4>
					</a><!-- .Indiviual foundation -->

				</div><!-- .foundations wrapper-->

				<a class="foundations__cta btn btn btn--blue" href="<?php echo esc_url( home_url('/16-best-practices')); ?>" title="Click here to view our 16 best practices">VIEW DEFINITIONS</a>

			</div>
			
		</section><!-- .foundations section -->
	</main><!-- .Main content area -->
<?php get_footer(); ?>
