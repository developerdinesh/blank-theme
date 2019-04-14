<?php

/**
 * __Theme_Name__ Theme Customizer.
 *
 * @package dineshghimire
 * @subpackage __Theme_Name__
 * @since 1.0.0
 */
if( !function_exists('__Domain_Slug___customizer') ):

    function __Domain_Slug___customizer($wp_customize){

        require_once __Domain_Slug___file_directory('inc/customizer/demo/panel-demo.php');

        require_once __Domain_Slug___file_directory('inc/customizer/header/panel-header.php');
        require_once __Domain_Slug___file_directory('inc/customizer/templates/panel-templates.php');
        require_once __Domain_Slug___file_directory('inc/customizer/footer/panel-footer.php');
        require_once __Domain_Slug___file_directory('inc/customizer/colors/panel-colors.php');
        require_once __Domain_Slug___file_directory( '/inc/customizer/sections/panel-sections.php' );
        require_once __Domain_Slug___file_directory('inc/customizer/options/panel-options.php');

    }

endif;
add_action( 'customize_register', '__Domain_Slug___customizer', 10, 1 );