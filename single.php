<?php
/**
 * Theme Single Post Section for our theme.
 *
 * @package ThemeGrill
 * @subpackage ColorMag
 * @since ColorMag 1.0
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
do_action('dblib_reaction_section_icons');
if ( get_the_author_meta( 'description' ) ) : ?>
   <div class="author-box">
      <div class="author-img"><?php echo get_avatar( get_the_author_meta( 'user_email' ), '100' ); ?></div>
      <h4 class="author-name"><?php the_author_meta( 'display_name' ); ?></h4>
      <p class="author-description"><?php the_author_meta( 'description' ); ?></p>
   </div>
<?php 
endif;
// If comments are open or we have at least one comment, load up the comment template
if ( comments_open() || get_comments_number() )
   comments_template();
do_action( 'dblib_reaction_section_icons' );
?>
</div><!-- #primary -->
<?php 
get_sidebar();
get_footer(); 
