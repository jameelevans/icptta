<?php
/**
 * * The template for displaying the front page
 *
 * @package icptta
 */

get_header();

?>
	<main class="general">
        <section class="general--narrow">
            <p class="p__lead p__lead--centered">Lorem ipsum dolor sit amet, consectetuer adipiwisi enim ad minim veniam, quis nostrud exerci
tation ullamcorper suscipim nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
erat volutpat. Ut wisi enim</p>
        </section>

        <section class="general--content">
            <h3 class="resources__heading">Incident Command System</h3>
            <div class="resources">
                <?php
                // Display Incident Command System Resources
                $icsPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'incident-command-system', 'posts_per_page'=>-1));
                    if( $icsPosts->have_posts() ):
                        while( $icsPosts->have_posts() ):
                            $icsPosts->the_post(); ?>
                            <article class="resources__resource" href="">
                                <h4 class="h4__header"><?php echo the_title(); ?></h4>
                                <p class="resources__excerpt p__body"><?php
                                    if( has_excerpt() ){
                                    echo strip_tags(substr( get_the_excerpt(), 0, 250 ))."...";
                                    } else {
                                    echo wp_trim_words(get_the_content(), 30);
                                    }?> </p>
                                <a class="btn btn--blue" href="<?php echo get_permalink(); ?>">Learn More</a>
                            </article> 
                        <?php endwhile;
                    else : ?> <p class="p__lead">No posts at this time</p>
                        <?php
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </section>

        <section class="general--content">
            <h3 class="h3__header">Committee Identification &amp; Engagement</h3>
            <div class="resources">
                <?php
                // Display Best Practice #1 Resources
                $ciePosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'committee-identification-engagement', 'posts_per_page'=>-1));
                    if( $ciePosts->have_posts() ):
                        while( $ciePosts->have_posts() ):
                            $ciePosts->the_post(); ?>
                            <article class="resources__resource" href="">
                                <h4 class="h4__header"><?php echo the_title(); ?></h4>
                                <p class="resources__excerpt p__body"><?php
                                    if( has_excerpt() ){
                                    echo strip_tags(substr( get_the_excerpt(), 0, 250 ))."...";
                                    } else {
                                    echo wp_trim_words(get_the_content(), 30);
                                    }?></p>
                                <a class="btn btn--blue" href="<?php echo get_permalink(); ?>">Learn More</a>
                            </article> 
                        <?php endwhile;
                    else : ?> <p class="p__lead">No posts at this time</p>
                        <?php
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </section>

        <section class="general--content">
            <h3 class="h3__header">Contact List</h3>
            <div class="resources">
                <?php
                // Display Best Practice #1 Resources
                $clPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'contact-list', 'posts_per_page'=>-1));
                    if( $clPosts->have_posts() ):
                        while( $clPosts->have_posts() ):
                            $clPosts->the_post(); ?>
                            <article class="resources__resource" href="">
                                <h4 class="h4__header"><?php echo the_title(); ?></h4>
                                <p class="resources__excerpt p__body"><?php
                                    if( has_excerpt() ){
                                    echo strip_tags(substr( get_the_excerpt(), 0, 250 ))."...";
                                    } else {
                                    echo wp_trim_words(get_the_content(), 30);
                                    }?></p>
                                <a class="btn btn--blue" href="<?php echo get_permalink(); ?>">Learn More</a>
                            </article> 
                        <?php endwhile;
                    else : ?> <p class="p__lead">No posts at this time</p>
                    <?php
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </section>

        <section class="general--content">
            <h3 class="h3__header">Family and Friends Reception / Notification Center (FRC) Plan</h3>
            <div class="resources">
                <?php
                // Display Best Practice #1 Resources
                $frcPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'family-and-friends-reception-notification-center-frc-plan', 'posts_per_page'=>-1));
                    if( $frcPosts->have_posts() ):
                        while( $frcPosts->have_posts() ):
                            $frcPosts->the_post(); ?>
                            <article class="resources__resource" href="">
                                <h4 class="h4__header"><?php echo the_title(); ?></h4>
                                <p class="resources__excerpt p__body"><?php
                                    if( has_excerpt() ){
                                    echo strip_tags(substr( get_the_excerpt(), 0, 250 ))."...";
                                    } else {
                                    echo wp_trim_words(get_the_content(), 30);
                                    }?></p>
                                <a class="btn btn--blue" href="<?php echo get_permalink(); ?>">Learn More</a>
                            </article> 
                        <?php endwhile;
              
                    else : ?> <p class="p__lead">No posts at this time</p>
                    <?php
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </section>

        <section class="general--content">
            <h3 class="h3__header">Public Information and Crisis Communications Protocol</h3>
            <div class="resources">
                <?php
                // Display Best Practice #1 Resources
                $piccpPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'public-information-and-crisis-communications-protocol', 'posts_per_page'=>-1));
                    if( $piccpPosts->have_posts() ):
                        while( $piccpPosts->have_posts() ):
                            $piccpPosts->the_post(); ?>
                            <article class="resources__resource" href="">
                                <h4 class="h4__header"><?php echo the_title(); ?></h4>
                                <p class="resources__excerpt p__body"><?php
                                    if( has_excerpt() ){
                                    echo strip_tags(substr( get_the_excerpt(), 0, 250 ))."...";
                                    } else {
                                    echo wp_trim_words(get_the_content(), 30);
                                    }?></p>
                                <a class="btn btn--blue" href="<?php echo get_permalink(); ?>">Learn More</a>
                            </article> 
                        <?php endwhile;
              
                    else : ?> <p class="p__lead">No posts at this time</p>
                    <?php
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </section>

        <section class="general--content">
            <h3 class="h3__header">Volunteer Management Protocol</h3>
            <div class="resources">
                <?php
                // Display Best Practice #1 Resources
                $vmpPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'volunteer-management-protocol', 'posts_per_page'=>-1));
                    if( $vmpPosts->have_posts() ):
                        while( $vmpPosts->have_posts() ):
                            $vmpPosts->the_post(); ?>
                            <article class="resources__resource" href="">
                                <h4 class="h4__header"><?php echo the_title(); ?></h4>
                                <p class="resources__excerpt p__body"><?php
                                    if( has_excerpt() ){
                                    echo strip_tags(substr( get_the_excerpt(), 0, 250 ))."...";
                                    } else {
                                    echo wp_trim_words(get_the_content(), 30);
                                    }?></p>
                                <a class="btn btn--blue" href="<?php echo get_permalink(); ?>">Learn More</a>
                            </article> 
                        <?php endwhile;
              
                    else : ?> <p class="p__lead">No posts at this time</p>
                    <?php
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </section>

        <section class="general--content">
            <h3 class="h3__header">Family/Friends Assistance Center (FAC) Plan</h3>
            <div class="resources">
                <?php
                // Display Best Practice #1 Resources
                $facPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'vfamily-friends-assistance-center-fac-plan', 'posts_per_page'=>-1));
                    if( $facPosts->have_posts() ):
                        while( $facPosts->have_posts() ):
                            $facPosts->the_post(); ?>
                            <article class="resources__resource" href="">
                                <h4 class="h4__header"><?php echo the_title(); ?></h4>
                                <p class="resources__excerpt p__body"><?php
                                    if( has_excerpt() ){
                                    echo strip_tags(substr( get_the_excerpt(), 0, 250 ))."...";
                                    } else {
                                    echo wp_trim_words(get_the_content(), 30);
                                    }?></p>
                                <a class="btn btn--blue" href="<?php echo get_permalink(); ?>">Learn More</a>
                            </article> 
                        <?php endwhile;
              
                    else : ?> <p class="p__lead">No posts at this time</p>
                    <?php
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </section>

        <section class="general--content">
            <h3 class="h3__header">Donation Management Protocol</h3>
            <div class="resources">
                <?php
                // Display Best Practice #1 Resources
                $dmpPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'donation-management-protocol', 'posts_per_page'=>-1));
                    if( $dmpPosts->have_posts() ):
                        while( $dmpPosts->have_posts() ):
                            $dmpPosts->the_post(); ?>
                            <article class="resources__resource" href="">
                                <h4 class="h4__header"><?php echo the_title(); ?></h4>
                                <p class="resources__excerpt p__body"><?php
                                    if( has_excerpt() ){
                                    echo strip_tags(substr( get_the_excerpt(), 0, 250 ))."...";
                                    } else {
                                    echo wp_trim_words(get_the_content(), 30);
                                    }?></p>
                                <a class="btn btn--blue" href="<?php echo get_permalink(); ?>">Learn More</a>
                            </article> 
                        <?php endwhile;
              
                    else : ?> <p class="p__lead">No posts at this time</p>
                    <?php
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </section>

        <section class="general--content">
            <h3 class="h3__header">Memorial and Special Events Management Plan</h3>
            <div class="resources">
                <?php
                // Display Best Practice #1 Resources
                $msempPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'memorial-and-special-events-management-plan', 'posts_per_page'=>-1));
                    if( $msempPosts->have_posts() ):
                        while( $msempPosts->have_posts() ):
                            $msempPosts->the_post(); ?>
                            <article class="resources__resource" href="">
                                <h4 class="h4__header"><?php echo the_title(); ?></h4>
                                <p class="resources__excerpt p__body"><?php
                                    if( has_excerpt() ){
                                    echo strip_tags(substr( get_the_excerpt(), 0, 250 ))."...";
                                    } else {
                                    echo wp_trim_words(get_the_content(), 30);
                                    }?></p>
                                <a class="btn btn--blue" href="<?php echo get_permalink(); ?>">Learn More</a>
                            </article> 
                        <?php endwhile;
              
                    else : ?> <p class="p__lead">No posts at this time</p>
                    <?php
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </section>

        <section class="general--content">
            <h3 class="h3__header">Community Behavioral Health Response</h3>
            <div class="resources">
                <?php
                // Display Best Practice #1 Resources
                $cbhrPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'community-behavioral-health-response', 'posts_per_page'=>-1));
                    if( $cbhrPosts->have_posts() ):
                        while( $cbhrPosts->have_posts() ):
                            $cbhrPosts->the_post(); ?>
                            <article class="resources__resource" href="">
                                <h4 class="h4__header"><?php echo the_title(); ?></h4>
                                <p class="resources__excerpt p__body"><?php
                                    if( has_excerpt() ){
                                    echo strip_tags(substr( get_the_excerpt(), 0, 250 ))."...";
                                    } else {
                                    echo wp_trim_words(get_the_content(), 30);
                                    }?></p>
                                <a class="btn btn--blue" href="<?php echo get_permalink(); ?>">Learn More</a>
                            </article> 
                        <?php endwhile;
              
                    else : ?> <p class="p__lead">No posts at this time</p>
                    <?php
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </section>

        <section class="general--content">
            <h3 class="h3__header">First Responder Support</h3>
            <div class="resources">
                <?php
                // Display Best Practice #1 Resources
                $frsPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'first-responder-support', 'posts_per_page'=>-1));
                    if( $frsPosts->have_posts() ):
                        while( $frsPosts->have_posts() ):
                            $frsPosts->the_post(); ?>
                            <article class="resources__resource" href="">
                                <h4 class="h4__header"><?php echo the_title(); ?></h4>
                                <p class="resources__excerpt p__body"><?php
                                    if( has_excerpt() ){
                                    echo strip_tags(substr( get_the_excerpt(), 0, 250 ))."...";
                                    } else {
                                    echo wp_trim_words(get_the_content(), 30);
                                    }?></p>
                                <a class="btn btn--blue" href="<?php echo get_permalink(); ?>">Learn More</a>
                            </article> 
                        <?php endwhile;
              
                    else : ?> <p class="p__lead">No posts at this time</p>
                    <?php
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </section>

        <section class="general--content">
            <h3 class="h3__header">Planning &amp; Preparedness Grants and Emergency Funding Assistance</h3>
            <div class="resources">
                <?php
                // Display Best Practice #1 Resources
                $ppgefaPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'planning-preparedness-grants-and-emergency-funding-assistance', 'posts_per_page'=>-1));
                    if( $ppgefaPosts->have_posts() ):
                        while( $ppgefaPosts->have_posts() ):
                            $ppgefaPosts->the_post(); ?>
                            <article class="resources__resource" href="">
                                <h4 class="h4__header"><?php echo the_title(); ?></h4>
                                <p class="resources__excerpt p__body"><?php
                                    if( has_excerpt() ){
                                    echo strip_tags(substr( get_the_excerpt(), 0, 250 ))."...";
                                    } else {
                                    echo wp_trim_words(get_the_content(), 30);
                                    }?></p>
                                <a class="btn btn--blue" href="<?php echo get_permalink(); ?>">Learn More</a>
                            </article> 
                        <?php endwhile;
              
                    else : ?> <p class="p__lead">No posts at this time</p>
                    <?php
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </section>

        <section class="general--content">
            <h3 class="h3__header">Community Resilience Planning</h3>
            <div class="resources">
                <?php
                // Display Best Practice #1 Resources
                $crpPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'community-resilience-planning', 'posts_per_page'=>-1));
                    if( $crpPosts->have_posts() ):
                        while( $crpPosts->have_posts() ):
                            $crpPosts->the_post(); ?>
                            <article class="resources__resource" href="">
                                <h4 class="h4__header"><?php echo the_title(); ?></h4>
                                <p class="resources__excerpt p__body"><?php
                                    if( has_excerpt() ){
                                    echo strip_tags(substr( get_the_excerpt(), 0, 250 ))."...";
                                    } else {
                                    echo wp_trim_words(get_the_content(), 30);
                                    }?></p>
                                <a class="btn btn--blue" href="<?php echo get_permalink(); ?>">Learn More</a>
                            </article> 
                        <?php endwhile;
              
                    else : ?> <p class="p__lead">No posts at this time</p>
                    <?php
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </section>

        <section class="general--content">
            <h3 class="h3__header">Criminal Justice System – Victim Support</h3>
            <div class="resources">
                <?php
                // Display Best Practice #1 Resources
                $cjsvsPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'criminal-justice-system-victim-support', 'posts_per_page'=>-1));
                    if( $cjsvsPosts->have_posts() ):
                        while( $cjsvsPosts->have_posts() ):
                            $cjsvsPosts->the_post(); ?>
                            <article class="resources__resource" href="">
                                <h4 class="h4__header"><?php echo the_title(); ?></h4>
                                <p class="resources__excerpt p__body"><?php
                                    if( has_excerpt() ){
                                    echo strip_tags(substr( get_the_excerpt(), 0, 250 ))."...";
                                    } else {
                                    echo wp_trim_words(get_the_content(), 30);
                                    }?></p>
                                <a class="btn btn--blue" href="<?php echo get_permalink(); ?>">Learn More</a>
                            </article> 
                        <?php endwhile;
              
                    else : ?> <p class="p__lead">No posts at this time</p>
                    <?php
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </section>

        <section class="general--content">
            <h3 class="h3__header">Training and Exercise</h3>
            <div class="resources">
                <?php
                // Display Best Practice #1 Resources
                $taePosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'training-and-exercise', 'posts_per_page'=>-1));
                    if( $taePosts->have_posts() ):
                        while( $taePosts->have_posts() ):
                            $taePosts->the_post(); ?>
                            <article class="resources__resource" href="">
                                <h4 class="h4__header"><?php echo the_title(); ?></h4>
                                <p class="resources__excerpt p__body"><?php
                                    if( has_excerpt() ){
                                    echo strip_tags(substr( get_the_excerpt(), 0, 250 ))."...";
                                    } else {
                                    echo wp_trim_words(get_the_content(), 30);
                                    }?></p>
                                <a class="btn btn--blue" href="<?php echo get_permalink(); ?>">Learn More</a>
                            </article> 
                        <?php endwhile;
              
                    else : ?> <p class="p__lead">No posts at this time</p>
                    <?php
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </section>
        
	</main>
<?php get_footer(); ?>
    


