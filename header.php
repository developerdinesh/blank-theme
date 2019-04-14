<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11"/>
	<?php
	/**
	 * This hook is important for wordpress plugins and other many things
	 */
	wp_head();
	?>
</head>

<body <?php body_class(); ?>>

	<?php do_action( 'colormag_before' ); ?>

	<div id="page" class="hfeed site">
		<?php do_action( 'colormag_before_header' ); ?>

		<?php
	// Add the main total header area display type dynamic class
		$main_total_header_option_layout_class = get_theme_mod( 'colormag_main_total_header_area_display_type', 'type_one' );

		$class_name = '';
		if ( $main_total_header_option_layout_class == 'type_two' ) {
			$class_name = 'colormag-header-clean';
		} else if ( $main_total_header_option_layout_class == 'type_three' ) {
			$class_name = 'colormag-header-classic';
		}
		?>

		<header id="masthead" class="site-header clearfix <?php echo esc_attr( $class_name ); ?>">
			<div id="header-text-nav-container" class="clearfix">
				<nav id="site-navigation" class="main-navigation clearfix" role="navigation">
					<div class="inner-wrap clearfix">
						<div class="home-icon">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><i class="fa fa-home"></i></a>
						</div>
						<p class="menu-toggle"></p>
						<?php
						if ( has_nav_menu( 'primary' ) ) {
							wp_nav_menu( array(
								'theme_location'  => 'primary',
								'container_class' => 'menu-primary-container',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							) );
						} else {
							wp_page_menu();
						}
						?>
						<i class="fa fa-search search-top"></i>
						<div class="search-form-top">
							<?php get_search_form(); ?>
						</div>
					</div>
				</nav>
			</div><!-- #header-text-nav-container -->
		</header>
		<?php do_action( 'colormag_after_header' ); ?>
		<?php do_action( 'colormag_before_main' ); ?>
		<div id="main" class="clearfix">
			<div class="inner-wrap clearfix">
