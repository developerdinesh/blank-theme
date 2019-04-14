<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
if(!function_exists('__Domain_Slug___register_sidebar') ):

    function __Domain_Slug___register_sidebar() {

        register_sidebar(array(
            'name' => esc_html__('Sidebar Left', '__Text_Domain__'),
            'id' => 'sidebar-left',
            'description' => esc_html__('Add widgets here to appear in your sidebar.', '__Text_Domain__'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title"><span>',
            'after_title' => '</span></h2>',
        ));
        register_sidebar(array(
            'name' => esc_html__('Sidebar Right', '__Text_Domain__'),
            'id' => 'sidebar-right',
            'description' => esc_html__('Add widgets here to appear in your sidebar.', '__Text_Domain__'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title"><span>',
            'after_title' => '</span></h2>',
        ));
        register_sidebars(3, array(
            'name' => esc_html__('TopFooter Widget Area %s', '__Text_Domain__'),
            'id' => 'topfooter-area',
            'description' => esc_html__('Add widgets here to appear in your footer.', '__Text_Domain__'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title"><span>',
            'after_title' => '</span></h3>',
        ));

        register_sidebars(4, array(
            'name' => esc_html__('Footer Widget Area %s', '__Text_Domain__'),
            'id' => 'footer-area',
            'description' => esc_html__('Add widgets here to appear in your footer.', '__Text_Domain__'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title"><span>',
            'after_title' => '</span></h3>',
        ));

    }
endif;
add_action('widgets_init', '__Domain_Slug___register_sidebar');

if(!function_exists('__Domain_Slug___register_widgets')):

    function __Domain_Slug___register_widgets(){

        /*require_once __Domain_Slug___file_directory('inc/widgets/class-dg-social-widget.php');
        register_widget( 'DG_Social_Icons_Widget' );*/

    }

endif;
add_action('widgets_init', '__Domain_Slug___register_widgets');