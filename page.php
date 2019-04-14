<?php
/**
 * Theme Single Post Section for our theme.
 *
 * @package ThemeGrill
 * @subpackage ColorMag
 * @since ColorMag 1.0
 */
get_header();

?>

<div id="primary">
 <div id="content" class="clearfix">

   <?php 

   while ( have_posts() ) : the_post();

      get_template_part( 'template-parts/content', 'single' );

   endwhile; 
   ?>
</div><!-- #content -->

</div><!-- #primary -->

<?php 
get_sidebar();

get_footer(); 
