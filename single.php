<?php
/**
 * * The template for displaying the a single resource page
 *
 * @package icptta
 */

get_header();

?>
	<main class="main general resource-page">
    <section class="general--single resource-page__content">
      <?php the_content(); ?>
      <hr class="resource-page__hr" />

      <div class="resource-page__source">
        <h4>Source:</h4>

        <?php
        $source = get_field('source_page');
          if( $source ): 
              ?>
              <a class="resources__source" href="<?php the_field('source_page') ?>" title="Click here to navigate to <?php the_field('source_title') ?>'s page" target="_blank"><?php the_field('source_title') ?></a>
              <?php else : ?> <p class="p__body">No sources at this time</p>
                    
          <?php endif; ?>

        
      </div>

      <div class="resource-page__links">

      

        <h4>Linked Resources:</h4>
        <?php 
          $link = get_field('visit_site_button');
          if( $link ): 
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
              ?>
              <a class="btn btn--blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" title="Click here to visit site">Visit Site</a>
          <?php endif; 
          $downloadpdf = get_field('download_pdf_button');
          if( $downloadpdf ): 
              $downloadpdf_url = $downloadpdf['url'];
              $downloadpdf_title = $downloadpdf['title'];
              $downloadpdf_target = $downloadpdf['target'] ? $downloadpdf['target'] : '_self';
              ?>
            <a class="btn btn--red" href="<?php echo esc_url( $downloadpdf_url ); ?>" target="_blank" rel="noreferrer" title="Click here to download the file">Download File</a>
        <?php endif; ?>
      </div>
      
    </section>
    

	</main>
<?php get_footer(); ?>