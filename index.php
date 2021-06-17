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

        <section class="general--narrow">
            <h3 class="h3__header">Incident Command System</h3>
            <?php
            // Display Best Practice #1 Resources
            $icsPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'incident-command-system', 'posts_per_page'=>-1));
                if( $icsPosts->have_posts() ):
                    while( $icsPosts->have_posts() ):
                        $icsPosts->the_post(); ?>
                        <article class="resource" href="">
                            <h4 class="h4__header"><?php echo the_title(); ?></h4>
                            <p class="p__body"><?php echo the_excerpt(); ?></p>
                            <a class="btn btn--blue" href="<?php echo get_permalink(); ?>">Learn More</a>
                        </article> 
                    <?php endwhile;
                wp_reset_postdata();
                endif;
            ?>
        </section>

        <section class="general--narrow">
            <h3 class="h3__header">Committee Identification &amp; Engagement</h3>
            <?php
            // Display Best Practice #1 Resources
            $ciePosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'committee-identification-engagement', 'posts_per_page'=>-1));
                if( $ciePosts->have_posts() ):
                    while( $ciePosts->have_posts() ):
                        $ciePosts->the_post(); ?>
                        <article class="resource" href="">
                            <h4 class="h4__header"><?php echo the_title(); ?></h4>
                            <p class="p__body"><?php echo the_excerpt(); ?></p>
                            <a class="btn btn--blue" href="<?php echo get_permalink(); ?>">Learn More</a>
                        </article> 
                    <?php endwhile;
                wp_reset_postdata();
                endif;
            ?>
        </section>

        <section class="general--narrow">
            <h3 class="h3__header">Contact List</h3>
            <?php
            // Display Best Practice #1 Resources
            $clPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name' => 'contact-list', 'posts_per_page'=>-1));
                if( $clPosts->have_posts() ):
                    while( $clPosts->have_posts() ):
                        $ciePosts->the_post(); ?>
                        <article class="resource" href="">
                            <h4 class="h4__header"><?php echo the_title(); ?></h4>
                            <p class="p__body"><?php echo the_excerpt(); ?></p>
                            <a class="btn btn--blue" href="<?php echo get_permalink(); ?>">Learn More</a>
                        </article> 
                    <?php endwhile;
                wp_reset_postdata();
                endif;
            ?>
        </section>
	</main>
<?php get_footer(); ?>
    


