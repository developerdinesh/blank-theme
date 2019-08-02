<?php
/**
 * Theme Single Post Section for our theme.
 *
 * @package __Author__
 * @subpackage __Theme_Name__
 * @since __Theme_Name__ 1.0.0
 */
get_header();
do_action( 'dglib_breadcrumbs_section_template' );
?>

<div id="primary">
 <div id="content" class="clearfix">

   <?php 

   while ( have_posts() ) : the_post();

      get_template_part( 'template-parts/content', 'single' );

   endwhile; 
   do_action('dblib_reaction_section_icons');
   ?>
</div><!-- #content -->

</div><!-- #primary -->

<?php 
get_sidebar();

get_footer(); 
