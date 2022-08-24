<?php
/** 
 * The page template file.<br>
 * This file works as display page content (post type "page") and its comments.
 * 
 * @package bootstrap-basic4
 */


// begins template. -------------------------------------------------------------------------
get_header();

?> 
<!-- <div class="container">
   <div class="row"> -->
   <?php if(!is_front_page()) { ?>
        <div class="container d-flex justify-content-center" id="breadcrumb_container_page">
            <div class="row">
                <?php
                if ( function_exists('yoast_breadcrumb') && !is_front_page() ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
                ?>
            </div>
        </div> 
        <?php } ?>
      <div class="col-md-12 site-main" role="main">
         <?php
         if (have_posts()) {
            the_content(); 
         } else {
            get_template_part('template-parts/section', 'no-results');
         }// endif;
         ?> 
      </div>
   <!-- </div>
</div>  -->

<?php
get_sidebar('right');
get_footer();
?>