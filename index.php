<?php
/**
 * Theme Index Section for our theme.
 *
 * @package ThemeGrill
 * @subpackage ColorMag
 * @since ColorMag 1.0
 */
get_header();

do_action( 'colormag_before_body_content' ); 

?>

<div id="primary">

	<div id="content" class="clearfix">

		<?php 
		if ( have_posts() ) :

			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', '' ); 

			endwhile; 

		endif;
		?>

	</div><!-- #content -->

</div><!-- #primary -->

<?php 

get_sidebar();

do_action( 'colormag_after_body_content' ); 

get_footer();
