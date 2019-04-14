<?php
if (!function_exists('blank_theme_setup')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function blank_theme_setup() {

        // Make theme available for translation. Translations can be filed in the /languages/ directory
        //load_theme_textdomain('lekh', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        // Let WordPress manage the document title
        add_theme_support('title-tag');

        // Enable support for Post Thumbnail
        add_theme_support('post-thumbnails');

        // Set the default content width.
        $GLOBALS['content_width'] = 1160;

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => esc_html__('Primary', '__Text_Domain__'),
        ));
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array('comment-form', 'comment-list', 'gallery', 'caption'));

        // Enable support for Post Formats
        add_theme_support('post-formats', array('image', 'video', 'audio', 'gallery', 'quote'));

        // Enable support for custom logo.
        add_theme_support('custom-logo', array(
            'height' => 400,
            'width' => 400,
            'flex-height' => true,
        ));

        // Set up the WordPress Custom Background Feature.
        $defaults = array(
            'default-color' => '#ffffff',
            'default-image' => '',
        );
        add_theme_support('custom-background', $defaults);



        // This theme styles the visual editor to resemble the theme style,
        //add_editor_style(array('assets/css/editor-style.css', lekh_fonts_url()));

    }

endif;
add_action('after_setup_theme', 'blank_theme_setup');

if(!function_exists('blank_theme_enqueue_scripts')):

    function blank_theme_enqueue_scripts(){
         wp_enqueue_style('default-style', get_stylesheet_uri(), array(), '1.0.0');
    }

endif;

add_action('wp_enqueue_scripts', 'blank_theme_enqueue_scripts');