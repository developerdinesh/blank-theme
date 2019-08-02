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
   ?>
</div><!-- #content -->
<?php 
get_template_part( 'navigation', 'single' );

if ( get_the_author_meta( 'description' ) ) : ?>
   <div class="author-box">
      <div class="author-img"><?php echo get_avatar( get_the_author_meta( 'user_email' ), '100' ); ?></div>
      <h4 class="author-name"><?php the_author_meta( 'display_name' ); ?></h4>
      <p class="author-description"><?php the_author_meta( 'description' ); ?></p>
   </div>
<?php 
endif;
do_action('dblib_reaction_section_icons');
// If comments are open or we have at least one comment, load up the comment template
if ( comments_open() || get_comments_number() )
   comments_template();
?>
</div><!-- #primary -->
<?php 
get_sidebar();
get_footer(); 
