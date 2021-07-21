<?php
/**
 * * The template for displaying the front page
 *
 * @package icptta
 */

get_header();

?>
	<main class="main general">
        <section class="general--narrow">
            <p class="p__lead p__lead--centered">ICP TTA staff has assembled a comprehensive list of internal and external resources to assist emergency management personnel, victim service professionals and key community stakeholders integrate victim services into their emergency operations plans.</p>
        </section>

        <section class="general--content">
            <div class="index">
                <h4 class="h4__header index__heading">16 Best Practice Areas</h4>
                <ul class="index__list">
                    <li class="index__item"><a href="#incident-command-system" class="index__link">Incident Command System</a></li>
                    <li class="index__item"><a href="#committee-identification-engagement" class="index__link">Committee Identification &amp; Engagement</a></li>
                    <li class="index__item"><a href="#contact-list" class="index__link">Contact List</a></li>
                    <li class="index__item"><a href="#frc" class="index__link">FRC Plan</a></li>
                    <li class="index__item"><a href="#victim-identification" class="index__link">Victim Identification and Notification Protocol</a></li>
                    <li class="index__item"><a href="#public-information-crisis-communications-protocol" class="index__link">Public Information and Crisis Communications Protocol</a></li>
                    <li class="index__item"><a href="#volunteer-management-protocol" class="index__link">Volunteer Management Protocol</a></li>
                    <li class="index__item"><a href="#fac" class="index__link">FAC Plan</a></li>
                    <li class="index__item"><a href="#donation-management-protocol" class="index__link">Donation Management Protocol</a></li>
                    <li class="index__item"><a href="#memorial-special-events-management-plan" class="index__link">Memorial and Special Events Management Plan</a></li>
                    <li class="index__item"><a href="#community-behavioral-health-response" class="index__link">Community Behavioral Health Response</a></li>
                    <li class="index__item"><a href="#first-responder-support" class="index__link">First Responder Support</a></li>
                    <li class="index__item"><a href="#planning-preparedness-grants-emergency-funding-assistance" class="index__link">Planning &amp; Preparedness Grants and Emergency Funding Assistance</a></li>
                    <li class="index__item"><a href="#community-resilience-planning" class="index__link">Community Resilience Planning</a></li>
                    <li class="index__item"><a href="#criminal-justice-system-victim-support" class="index__link">Criminal Justice System – Victim Support</a></li>
                    <li class="index__item"><a href="#training-exercise" class="index__link">Training and Exercise</a></li>
                    <li class="index__item"><a href="#overall-victim-assistance-resources" class="index__link">Overall Victim Assistance Resources</a></li>
                </ul>
            </div>
        </section>

        <section id="incident-command-system" class="general--content">
            <h3 class="resources__heading"> <?php /* Display svg icon*/ echo svg_icon('resources__icon', 'command-system') ?>Incident Command System</h3>
            <div class="resources">
                <?php
                // Display Incident Command System Resources
                $icsPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'incident-command-system', 'posts_per_page'=>-1));
                    if( $icsPosts->have_posts() ):
                        while( $icsPosts->have_posts() ):
                            $icsPosts->the_post(); ?>
                            <article class="resources__resource">
                                <header>
                                    <h4 class="h4__header"><?php echo the_title(); ?></h4>
                                    <a class="resources__source" href="<?php the_field('source_page') ?>"><?php the_field('source_title') ?></a>
                                </header>
                                

                                <p class="resources__excerpt p__body"><?php
                                    if( has_excerpt() ){
                                    echo strip_tags(substr( get_the_excerpt(), 0, 650 ))."...";
                                    } else {
                                    echo wp_trim_words(get_the_content(), 300);
                                    }?> </p>
                                    
                                <?php 
                                $link = get_field('visit_site_button');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn btn--blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">Visit Site</a>
                                <?php endif; 
                                $downloadpdf = get_field('download_pdf_button');
                                if( $downloadpdf ): 
                                    $downloadpdf_url = $downloadpdf['url'];
                                    $downloadpdf_title = $downloadpdf['title'];
                                    $downloadpdf_target = $downloadpdf['target'] ? $downloadpdf['target'] : '_self';
                                    ?>
                                    <a class="btn btn--red" href="<?php echo esc_url( $downloadpdf_url ); ?>" target="_blank">Download File</a>
                                <?php endif; ?>

                            </article> 
                        <?php endwhile;
                    else : ?> <p class="p__lead">No posts at this time</p>
                        <?php
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </section>

        <section id="committee-identification-engagement" class="general--content">
            <h3 class="h3__header"><?php /* Display svg icon*/ echo svg_icon('resources__icon', 'committee') ?> Committee Identification &amp; Engagement</h3>
            <div class="resources">
                <?php
                // Display Committee Identification Engagement Resources
                $ciePosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'committee-identification-engagement', 'posts_per_page'=>-1));
                    if( $ciePosts->have_posts() ):
                        while( $ciePosts->have_posts() ):
                            $ciePosts->the_post(); ?>
                            <article class="resources__resource">
                                <header>
                                    <h4 class="h4__header"><?php echo the_title(); ?></h4>
                                    <a class="resources__source" href="<?php the_field('source_page') ?>"><?php the_field('source_title') ?></a>
                                </header>
                                <p class="resources__excerpt p__body"><?php
                                    if( has_excerpt() ){
                                    echo strip_tags(substr( get_the_excerpt(), 0, 650 ))."...";
                                    } else {
                                    echo wp_trim_words(get_the_content(), 300);
                                    }?> </p>
                                <?php 
                                $link = get_field('visit_site_button');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn btn--blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">Visit Site</a>
                                <?php endif; 
                                $downloadpdf = get_field('download_pdf_button');
                                if( $downloadpdf ): 
                                    $downloadpdf_url = $downloadpdf['url'];
                                    $downloadpdf_title = $downloadpdf['title'];
                                    $downloadpdf_target = $downloadpdf['target'] ? $downloadpdf['target'] : '_self';
                                    ?>
                                    <a class="btn btn--red" href="<?php echo esc_url( $downloadpdf_url ); ?>" target="_blank">Download File</a>
                                <?php endif; ?>
                            </article> 
                        <?php endwhile;
                    else : ?> <p class="p__lead">No posts at this time</p>
                        <?php
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </section>

        <section id="contact-list" class="general--content">
            <h3 class="h3__header"><?php /* Display svg icon*/ echo svg_icon('resources__icon', 'ballot-check') ?> Contact List</h3>
            <div class="resources">
                <?php
                // Display Contact List Resources
                $clPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'contact-list', 'posts_per_page'=>-1));
                    if( $clPosts->have_posts() ):
                        while( $clPosts->have_posts() ):
                            $clPosts->the_post(); ?>
                            <article class="resources__resource">
                                <header>
                                    <h4 class="h4__header"><?php echo the_title(); ?></h4>
                                    <a class="resources__source" href="<?php the_field('source_page') ?>"><?php the_field('source_title') ?></a>
                                </header>
                                <p class="resources__excerpt p__body"><?php
                                    if( has_excerpt() ){
                                    echo strip_tags(substr( get_the_excerpt(), 0, 650 ))."...";
                                    } else {
                                    echo wp_trim_words(get_the_content(), 300);
                                    }?> </p>
                                <?php 
                                $link = get_field('visit_site_button');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn btn--blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">Visit Site</a>
                                <?php endif; 
                                $downloadpdf = get_field('download_pdf_button');
                                if( $downloadpdf ): 
                                    $downloadpdf_url = $downloadpdf['url'];
                                    $downloadpdf_title = $downloadpdf['title'];
                                    $downloadpdf_target = $downloadpdf['target'] ? $downloadpdf['target'] : '_self';
                                    ?>
                                    <a class="btn btn--red" href="<?php echo esc_url( $downloadpdf_url ); ?>" target="_blank">Download File</a>
                                <?php endif; ?>
                            </article> 
                        <?php endwhile;
                    else : ?> <p class="p__lead">No posts at this time</p>
                    <?php
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </section>

        <section id="frc" class="general--content">
            <h3 class="h3__header"><?php /* Display svg icon*/ echo svg_icon('resources__icon', 'clipboard-user') ?> Family and Friends Reception / Notification Center (FRC) Plan</h3>
            <div class="resources">
                <?php
                // Display FRC Plan Resources
                $frcPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'family-and-friends-reception-notification-center-frc-plan', 'posts_per_page'=>-1));
                    if( $frcPosts->have_posts() ):
                        while( $frcPosts->have_posts() ):
                            $frcPosts->the_post(); ?>
                            <article class="resources__resource">
                                <header>
                                    <h4 class="h4__header"><?php echo the_title(); ?></h4>
                                    <a class="resources__source" href="<?php the_field('source_page') ?>"><?php the_field('source_title') ?></a>
                                </header>
                                <p class="resources__excerpt p__body"><?php
                                    if( has_excerpt() ){
                                    echo strip_tags(substr( get_the_excerpt(), 0, 650 ))."...";
                                    } else {
                                    echo wp_trim_words(get_the_content(), 300);
                                    }?> </p>
                                <?php 
                                $link = get_field('visit_site_button');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn btn--blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">Visit Site</a>
                                <?php endif; 
                                $downloadpdf = get_field('download_pdf_button');
                                if( $downloadpdf ): 
                                    $downloadpdf_url = $downloadpdf['url'];
                                    $downloadpdf_title = $downloadpdf['title'];
                                    $downloadpdf_target = $downloadpdf['target'] ? $downloadpdf['target'] : '_self';
                                    ?>
                                    <a class="btn btn--red" href="<?php echo esc_url( $downloadpdf_url ); ?>" target="_blank">Download File</a>
                                <?php endif; ?>
                            </article> 
                        <?php endwhile;
              
                    else : ?> <p class="p__lead">No posts at this time</p>
                    <?php
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </section>

        <section id="victim-identification" class="general--content">
            <h3 class="h3__header"><?php /* Display svg icon*/ echo svg_icon('resources__icon', 'comment-exclamation') ?> Victim Identification and Notification Protocol</h3>
            <div class="resources">
                <?php
                // Display Victim Identification Resources
                $vinpPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'victim-identification-and-notification-protocol', 'posts_per_page'=>-1));
                    if( $vinpPosts->have_posts() ):
                        while( $vinpPosts->have_posts() ):
                            $vinpPosts->the_post(); ?>
                            <article class="resources__resource">
                                <header>
                                    <h4 class="h4__header"><?php echo the_title(); ?></h4>
                                    <a class="resources__source" href="<?php the_field('source_page') ?>"><?php the_field('source_title') ?></a>
                                </header>
                                <p class="resources__excerpt p__body"><?php
                                    if( has_excerpt() ){
                                    echo strip_tags(substr( get_the_excerpt(), 0, 650 ))."...";
                                    } else {
                                    echo wp_trim_words(get_the_content(), 300);
                                    }?> </p>
                                <?php 
                                $link = get_field('visit_site_button');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn btn--blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">Visit Site</a>
                                <?php endif; 
                                $downloadpdf = get_field('download_pdf_button');
                                if( $downloadpdf ): 
                                    $downloadpdf_url = $downloadpdf['url'];
                                    $downloadpdf_title = $downloadpdf['title'];
                                    $downloadpdf_target = $downloadpdf['target'] ? $downloadpdf['target'] : '_self';
                                    ?>
                                    <a class="btn btn--red" href="<?php echo esc_url( $downloadpdf_url ); ?>" target="_blank">Download File</a>
                                <?php endif; ?>
                            </article> 
                        <?php endwhile;
              
                    else : ?> <p class="p__lead">No posts at this time</p>
                    <?php
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </section>

        <section id="public-information-crisis-communications-protocol" class="general--content">
            <h3 class="h3__header"><?php /* Display svg icon*/ echo svg_icon('resources__icon', 'broadcast-tower') ?> Public Information and Crisis Communications Protocol</h3>
            <div class="resources">
                <?php
                // Display Public Information and Crisis Communications Protocol Resources
                $piccpPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'public-information-and-crisis-communications-protocol', 'posts_per_page'=>-1));
                    if( $piccpPosts->have_posts() ):
                        while( $piccpPosts->have_posts() ):
                            $piccpPosts->the_post(); ?>
                            <article class="resources__resource">
                                <header>
                                    <h4 class="h4__header"><?php echo the_title(); ?></h4>
                                    <a class="resources__source" href="<?php the_field('source_page') ?>"><?php the_field('source_title') ?></a>
                                </header>
                                <p class="resources__excerpt p__body"><?php
                                    if( has_excerpt() ){
                                    echo strip_tags(substr( get_the_excerpt(), 0, 650 ))."...";
                                    } else {
                                    echo wp_trim_words(get_the_content(), 300);
                                    }?> </p>
                                <?php 
                                $link = get_field('visit_site_button');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn btn--blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">Visit Site</a>
                                <?php endif; 
                                $downloadpdf = get_field('download_pdf_button');
                                if( $downloadpdf ): 
                                    $downloadpdf_url = $downloadpdf['url'];
                                    $downloadpdf_title = $downloadpdf['title'];
                                    $downloadpdf_target = $downloadpdf['target'] ? $downloadpdf['target'] : '_self';
                                    ?>
                                    <a class="btn btn--red" href="<?php echo esc_url( $downloadpdf_url ); ?>" target="_blank">Download File</a>
                                <?php endif; ?>
                            </article> 
                        <?php endwhile;
              
                    else : ?> <p class="p__lead">No posts at this time</p>
                    <?php
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </section>

        <section id="volunteer-management-protocol" class="general--content">
            <h3 class="h3__header"><?php /* Display svg icon*/ echo svg_icon('resources__icon', 'hand-holding-heart') ?> Volunteer Management Protocol</h3>
            <div class="resources">
                <?php
                // Display Volunteer Management Protocol Resources
                $vmpPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'volunteer-management-protocol', 'posts_per_page'=>-1));
                    if( $vmpPosts->have_posts() ):
                        while( $vmpPosts->have_posts() ):
                            $vmpPosts->the_post(); ?>
                            <article class="resources__resource">
                                <header>
                                    <h4 class="h4__header"><?php echo the_title(); ?></h4>
                                    <a class="resources__source" href="<?php the_field('source_page') ?>"><?php the_field('source_title') ?></a>
                                </header>

                                <p class="resources__excerpt p__body"><?php
                                    if( has_excerpt() ){
                                    echo strip_tags(substr( get_the_excerpt(), 0, 650 ))."...";
                                    } else {
                                    echo wp_trim_words(get_the_content(), 300);
                                    }?> </p>
                                <?php 
                                $link = get_field('visit_site_button');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn btn--blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">Visit Site</a>
                                <?php endif; 
                                $downloadpdf = get_field('download_pdf_button');
                                if( $downloadpdf ): 
                                    $downloadpdf_url = $downloadpdf['url'];
                                    $downloadpdf_title = $downloadpdf['title'];
                                    $downloadpdf_target = $downloadpdf['target'] ? $downloadpdf['target'] : '_self';
                                    ?>
                                    <a class="btn btn--red" href="<?php echo esc_url( $downloadpdf_url ); ?>" target="_blank">Download File</a>
                                <?php endif; ?>
                            </article> 
                        <?php endwhile;
              
                    else : ?> <p class="p__lead">No posts at this time</p>
                    <?php
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </section>

        <section id="fac" class="general--content">
            <h3 class="h3__header"><?php /* Display svg icon*/ echo svg_icon('resources__icon', 'hand-holding-medical') ?> Family/Friends Assistance Center (FAC) Plan</h3>
            <div class="resources">
                <?php
                // Display FAC Plan Resources
                $facPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'vfamily-friends-assistance-center-fac-plan', 'posts_per_page'=>-1));
                    if( $facPosts->have_posts() ):
                        while( $facPosts->have_posts() ):
                            $facPosts->the_post(); ?>
                            <article class="resources__resource">
                                <header>
                                    <h4 class="h4__header"><?php echo the_title(); ?></h4>
                                    <a class="resources__source" href="<?php the_field('source_page') ?>"><?php the_field('source_title') ?></a>
                                </header>
                                <p class="resources__excerpt p__body"><?php
                                    if( has_excerpt() ){
                                    echo strip_tags(substr( get_the_excerpt(), 0, 650 ))."...";
                                    } else {
                                    echo wp_trim_words(get_the_content(), 300);
                                    }?> </p>
                                <?php 
                                $link = get_field('visit_site_button');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn btn--blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">Visit Site</a>
                                <?php endif; 
                                $downloadpdf = get_field('download_pdf_button');
                                if( $downloadpdf ): 
                                    $downloadpdf_url = $downloadpdf['url'];
                                    $downloadpdf_title = $downloadpdf['title'];
                                    $downloadpdf_target = $downloadpdf['target'] ? $downloadpdf['target'] : '_self';
                                    ?>
                                    <a class="btn btn--red" href="<?php echo esc_url( $downloadpdf_url ); ?>" target="_blank">Download File</a>
                                <?php endif; ?>
                            </article> 
                        <?php endwhile;
              
                    else : ?> <p class="p__lead">No posts at this time</p>
                    <?php
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </section>

        <section id="donation-management-protocol" class="general--content">
            <h3 class="h3__header"><?php /* Display svg icon*/ echo svg_icon('resources__icon', 'donate') ?> Donation Management Protocol</h3>
            <div class="resources">
                <?php
                // Display Donation Management Protocol Resources
                $dmpPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'donation-management-protocol', 'posts_per_page'=>-1));
                    if( $dmpPosts->have_posts() ):
                        while( $dmpPosts->have_posts() ):
                            $dmpPosts->the_post(); ?>
                            <article class="resources__resource">
                                <header>
                                    <h4 class="h4__header"><?php echo the_title(); ?></h4>
                                    <a class="resources__source" href="<?php the_field('source_page') ?>"><?php the_field('source_title') ?></a>
                                </header>
                                <p class="resources__excerpt p__body"><?php
                                    if( has_excerpt() ){
                                    echo strip_tags(substr( get_the_excerpt(), 0, 650 ))."...";
                                    } else {
                                    echo wp_trim_words(get_the_content(), 300);
                                    }?> </p>
                                <?php 
                                $link = get_field('visit_site_button');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn btn--blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">Visit Site</a>
                                <?php endif; 
                                $downloadpdf = get_field('download_pdf_button');
                                if( $downloadpdf ): 
                                    $downloadpdf_url = $downloadpdf['url'];
                                    $downloadpdf_title = $downloadpdf['title'];
                                    $downloadpdf_target = $downloadpdf['target'] ? $downloadpdf['target'] : '_self';
                                    ?>
                                    <a class="btn btn--red" href="<?php echo esc_url( $downloadpdf_url ); ?>" target="_blank">Download File</a>
                                <?php endif; ?>
                            </article> 
                        <?php endwhile;
              
                    else : ?> <p class="p__lead">No posts at this time</p>
                    <?php
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </section>

        <section id="memorial-special-events-management-plan" class="general--content">
            <h3 class="h3__header"><?php /* Display svg icon*/ echo svg_icon('resources__icon', 'ribbon') ?> Memorial and Special Events Management Plan</h3>
            <div class="resources">
                <?php
                // Display Memorial and Special Events Management Plan Resources
                $msempPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'memorial-and-special-events-management-plan', 'posts_per_page'=>-1));
                    if( $msempPosts->have_posts() ):
                        while( $msempPosts->have_posts() ):
                            $msempPosts->the_post(); ?>
                            <article class="resources__resource">
                                <header>
                                    <h4 class="h4__header"><?php echo the_title(); ?></h4>
                                    <a class="resources__source" href="<?php the_field('source_page') ?>"><?php the_field('source_title') ?></a>
                                </header>
                                <p class="resources__excerpt p__body"><?php
                                    if( has_excerpt() ){
                                    echo strip_tags(substr( get_the_excerpt(), 0, 650 ))."...";
                                    } else {
                                    echo wp_trim_words(get_the_content(), 300);
                                    }?> </p>
                                <?php 
                                $link = get_field('visit_site_button');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn btn--blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">Visit Site</a>
                                <?php endif; 
                                $downloadpdf = get_field('download_pdf_button');
                                if( $downloadpdf ): 
                                    $downloadpdf_url = $downloadpdf['url'];
                                    $downloadpdf_title = $downloadpdf['title'];
                                    $downloadpdf_target = $downloadpdf['target'] ? $downloadpdf['target'] : '_self';
                                    ?>
                                    <a class="btn btn--red" href="<?php echo esc_url( $downloadpdf_url ); ?>" target="_blank">Download File</a>
                                <?php endif; ?>
                            </article> 
                        <?php endwhile;
              
                    else : ?> <p class="p__lead">No posts at this time</p>
                    <?php
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </section>

        <section id="community-behavioral-health-response" class="general--content">
            <h3 class="h3__header"><?php /* Display svg icon*/ echo svg_icon('resources__icon', 'head-side-medical') ?> Community Behavioral Health Response</h3>
            <div class="resources">
                <?php
                // Display Community Behavioral Health Response Resources
                $cbhrPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'community-behavioral-health-response', 'posts_per_page'=>-1));
                    if( $cbhrPosts->have_posts() ):
                        while( $cbhrPosts->have_posts() ):
                            $cbhrPosts->the_post(); ?>
                            <article class="resources__resource">
                                <header>
                                    <h4 class="h4__header"><?php echo the_title(); ?></h4>
                                    <a class="resources__source" href="<?php the_field('source_page') ?>"><?php the_field('source_title') ?></a>
                                </header>
                                <p class="resources__excerpt p__body"><?php
                                    if( has_excerpt() ){
                                    echo strip_tags(substr( get_the_excerpt(), 0, 650 ))."...";
                                    } else {
                                    echo wp_trim_words(get_the_content(), 300);
                                    }?> </p>
                                <?php 
                                $link = get_field('visit_site_button');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn btn--blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">Visit Site</a>
                                <?php endif; 
                                $downloadpdf = get_field('download_pdf_button');
                                if( $downloadpdf ): 
                                    $downloadpdf_url = $downloadpdf['url'];
                                    $downloadpdf_title = $downloadpdf['title'];
                                    $downloadpdf_target = $downloadpdf['target'] ? $downloadpdf['target'] : '_self';
                                    ?>
                                    <a class="btn btn--red" href="<?php echo esc_url( $downloadpdf_url ); ?>" target="_blank">Download File</a>
                                <?php endif; ?>
                            </article> 
                        <?php endwhile;
              
                    else : ?> <p class="p__lead">No posts at this time</p>
                    <?php
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </section>

        <section id="first-responder-support" class="general--content">
            <h3 class="h3__header"><?php /* Display svg icon*/ echo svg_icon('resources__icon', 'first-aid') ?> First Responder Support</h3>
            <div class="resources">
                <?php
                // Display First Responder Support Resources
                $frsPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'first-responder-support', 'posts_per_page'=>-1));
                    if( $frsPosts->have_posts() ):
                        while( $frsPosts->have_posts() ):
                            $frsPosts->the_post(); ?>
                            <article class="resources__resource">
                                <header>
                                    <h4 class="h4__header"><?php echo the_title(); ?></h4>
                                    <a class="resources__source" href="<?php the_field('source_page') ?>"><?php the_field('source_title') ?></a>
                                </header>
                                <p class="resources__excerpt p__body"><?php
                                    if( has_excerpt() ){
                                    echo strip_tags(substr( get_the_excerpt(), 0, 650 ))."...";
                                    } else {
                                    echo wp_trim_words(get_the_content(), 300);
                                    }?> </p>
                                <?php 
                                $link = get_field('visit_site_button');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn btn--blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">Visit Site</a>
                                <?php endif; 
                                $downloadpdf = get_field('download_pdf_button');
                                if( $downloadpdf ): 
                                    $downloadpdf_url = $downloadpdf['url'];
                                    $downloadpdf_title = $downloadpdf['title'];
                                    $downloadpdf_target = $downloadpdf['target'] ? $downloadpdf['target'] : '_self';
                                    ?>
                                    <a class="btn btn--red" href="<?php echo esc_url( $downloadpdf_url ); ?>" target="_blank">Download File</a>
                                <?php endif; ?>
                            </article> 
                        <?php endwhile;
              
                    else : ?> <p class="p__lead">No posts at this time</p>
                    <?php
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </section>

        <section id="planning-preparedness-grants-emergency-funding-assistance" class="general--content">
            <h3 class="h3__header"><?php /* Display svg icon*/ echo svg_icon('resources__icon', 'hands-usd') ?> Planning &amp; Preparedness Grants and Emergency Funding Assistance</h3>
            <div class="resources">
                <?php
                // Display Planning and Preparedness Grants and Emergency Funding Assistance Resources
                $ppgefaPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'planning-preparedness-grants-and-emergency-funding-assistance', 'posts_per_page'=>-1));
                    if( $ppgefaPosts->have_posts() ):
                        while( $ppgefaPosts->have_posts() ):
                            $ppgefaPosts->the_post(); ?>
                            <article class="resources__resource">
                                <header>
                                    <h4 class="h4__header"><?php echo the_title(); ?></h4>
                                    <a class="resources__source" href="<?php the_field('source_page') ?>"><?php the_field('source_title') ?></a>
                                </header>
                                <p class="resources__excerpt p__body"><?php
                                    if( has_excerpt() ){
                                    echo strip_tags(substr( get_the_excerpt(), 0, 650 ))."...";
                                    } else {
                                    echo wp_trim_words(get_the_content(), 300);
                                    }?> </p>
                                <?php 
                                $link = get_field('visit_site_button');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn btn--blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">Visit Site</a>
                                <?php endif; 
                                $downloadpdf = get_field('download_pdf_button');
                                if( $downloadpdf ): 
                                    $downloadpdf_url = $downloadpdf['url'];
                                    $downloadpdf_title = $downloadpdf['title'];
                                    $downloadpdf_target = $downloadpdf['target'] ? $downloadpdf['target'] : '_self';
                                    ?>
                                    <a class="btn btn--red" href="<?php echo esc_url( $downloadpdf_url ); ?>" target="_blank">Download File</a>
                                <?php endif; ?>
                            </article> 
                        <?php endwhile;
              
                    else : ?> <p class="p__lead">No posts at this time</p>
                    <?php
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </section>

        <section id="community-resilience-planning" class="general--content">
            <h3 class="h3__header"><?php /* Display svg icon*/ echo svg_icon('resources__icon', 'users') ?> Community Resilience Planning</h3>
            <div class="resources">
                <?php
                // Display Community Resilience Planning Resources
                $crpPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'community-resilience-planning', 'posts_per_page'=>-1));
                    if( $crpPosts->have_posts() ):
                        while( $crpPosts->have_posts() ):
                            $crpPosts->the_post(); ?>
                            <article class="resources__resource">
                                <header>
                                    <h4 class="h4__header"><?php echo the_title(); ?></h4>
                                    <a class="resources__source" href="<?php the_field('source_page') ?>"><?php the_field('source_title') ?></a>
                                </header>
                                <p class="resources__excerpt p__body"><?php
                                    if( has_excerpt() ){
                                    echo strip_tags(substr( get_the_excerpt(), 0, 650 ))."...";
                                    } else {
                                    echo wp_trim_words(get_the_content(), 300);
                                    }?> </p>
                                <?php 
                                $link = get_field('visit_site_button');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn btn--blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">Visit Site</a>
                                <?php endif; 
                                $downloadpdf = get_field('download_pdf_button');
                                if( $downloadpdf ): 
                                    $downloadpdf_url = $downloadpdf['url'];
                                    $downloadpdf_title = $downloadpdf['title'];
                                    $downloadpdf_target = $downloadpdf['target'] ? $downloadpdf['target'] : '_self';
                                    ?>
                                    <a class="btn btn--red" href="<?php echo esc_url( $downloadpdf_url ); ?>" target="_blank">Download File</a>
                                <?php endif; ?>
                            </article> 
                        <?php endwhile;
              
                    else : ?> <p class="p__lead">No posts at this time</p>
                    <?php
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </section>

        <section id="criminal-justice-system-victim-support" class="general--content">
            <h3 class="h3__header"><?php /* Display svg icon*/ echo svg_icon('resources__icon', 'gavel') ?> Criminal Justice System – Victim Support</h3>
            <div class="resources">
                <?php
                // Display Criminal Justice System – Victim Support Resources
                $cjsvsPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'criminal-justice-system-victim-support', 'posts_per_page'=>-1));
                    if( $cjsvsPosts->have_posts() ):
                        while( $cjsvsPosts->have_posts() ):
                            $cjsvsPosts->the_post(); ?>
                            <article class="resources__resource">
                                <header>
                                    <h4 class="h4__header"><?php echo the_title(); ?></h4>
                                    <a class="resources__source" href="<?php the_field('source_page') ?>"><?php the_field('source_title') ?></a>
                                </header>
                                <p class="resources__excerpt p__body"><?php
                                    if( has_excerpt() ){
                                    echo strip_tags(substr( get_the_excerpt(), 0, 650 ))."...";
                                    } else {
                                    echo wp_trim_words(get_the_content(), 300);
                                    }?> </p>
                                <?php 
                                $link = get_field('visit_site_button');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn btn--blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">Visit Site</a>
                                <?php endif; 
                                $downloadpdf = get_field('download_pdf_button');
                                if( $downloadpdf ): 
                                    $downloadpdf_url = $downloadpdf['url'];
                                    $downloadpdf_title = $downloadpdf['title'];
                                    $downloadpdf_target = $downloadpdf['target'] ? $downloadpdf['target'] : '_self';
                                    ?>
                                    <a class="btn btn--red" href="<?php echo esc_url( $downloadpdf_url ); ?>" target="_blank">Download File</a>
                                <?php endif; ?>
                            </article> 
                        <?php endwhile;
              
                    else : ?> <p class="p__lead">No posts at this time</p>
                    <?php
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </section>

        <section id="training-exercise" class="general--content">
            <h3 class="h3__header"><?php /* Display svg icon*/ echo svg_icon('resources__icon', 'users-cog') ?> Training and Exercise</h3>
            <div class="resources">
                <?php
                // Display Training & Exercises Resources
                $taePosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'training-and-exercise', 'posts_per_page'=>-1));
                    if( $taePosts->have_posts() ):
                        while( $taePosts->have_posts() ):
                            $taePosts->the_post(); ?>
                            <article class="resources__resource">
                                <header>
                                    <h4 class="h4__header"><?php echo the_title(); ?></h4>
                                    <a class="resources__source" href="<?php the_field('source_page') ?>"><?php the_field('source_title') ?></a>
                                </header>
                                <p class="resources__excerpt p__body"><?php
                                    if( has_excerpt() ){
                                    echo strip_tags(substr( get_the_excerpt(), 0, 650 ))."...";
                                    } else {
                                    echo wp_trim_words(get_the_content(), 300);
                                    }?> </p>
                                <?php 
                                $link = get_field('visit_site_button');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn btn--blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">Visit Site</a>
                                <?php endif; 
                                $downloadpdf = get_field('download_pdf_button');
                                if( $downloadpdf ): 
                                    $downloadpdf_url = $downloadpdf['url'];
                                    $downloadpdf_title = $downloadpdf['title'];
                                    $downloadpdf_target = $downloadpdf['target'] ? $downloadpdf['target'] : '_self';
                                    ?>
                                    <a class="btn btn--red" href="<?php echo esc_url( $downloadpdf_url ); ?>" target="<?php echo esc_attr( $downloadpdf_target ); ?>">Download PDF</a>
                                <?php endif; ?>
                            </article> 
                        <?php endwhile;
              
                    else : ?> <p class="p__lead">No posts at this time</p>
                    <?php
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </section>

        <section id="overall-victim-assistance-resources" class="general--content">
            <h3 class="h3__header"><?php /* Display svg icon*/ echo svg_icon('resources__icon', 'hands-heart') ?> Overall Victim Assistance Resources</h3>
            <div class="resources">
                <?php
                // Display Overall Victim Assistance Resources Resources
                $ovarPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'overall-victim-assistance-resources', 'posts_per_page'=>-1));
                    if( $ovarPosts->have_posts() ):
                        while( $ovarPosts->have_posts() ):
                            $ovarPosts->the_post(); ?>
                            <article class="resources__resource">
                                <header>
                                    <h4 class="h4__header"><?php echo the_title(); ?></h4>
                                    <a class="resources__source" href="<?php the_field('source_page') ?>"><?php the_field('source_title') ?></a>
                                </header>
                                <p class="resources__excerpt p__body"><?php
                                    if( has_excerpt() ){
                                    echo strip_tags(substr( get_the_excerpt(), 0, 650 ))."...";
                                    } else {
                                    echo wp_trim_words(get_the_content(), 300);
                                    }?> </p>
                                <?php 
                                $link = get_field('visit_site_button');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn btn--blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">Visit Site</a>
                                <?php endif; 
                                $downloadpdf = get_field('download_pdf_button');
                                if( $downloadpdf ): 
                                    $downloadpdf_url = $downloadpdf['url'];
                                    $downloadpdf_title = $downloadpdf['title'];
                                    $downloadpdf_target = $downloadpdf['target'] ? $downloadpdf['target'] : '_self';
                                    ?>
                                    <a class="btn btn--red" href="<?php echo esc_url( $downloadpdf_url ); ?>" target="<?php echo esc_attr( $downloadpdf_target ); ?>">Download PDF</a>
                                <?php endif; ?>
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
    


