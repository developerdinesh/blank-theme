<?php
/*
 * Panel Footer
 */
$wp_customize->add_panel(
	'demo_customizer_panel',
	array(
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => esc_html__('Demo Options', '__Text_Domain__'),
		'description'    => esc_html__('This is just a demo customizer options to test dg library.', '__Text_Domain__'),
	)
);

require_once __Domain_Slug___file_directory( 'inc/customizer/demo/section-demo-repeater.php' );
require_once __Domain_Slug___file_directory( 'inc/customizer/demo/section-icons-control.php' );
require_once __Domain_Slug___file_directory( 'inc/customizer/demo/section-imageoptions-control.php' );

