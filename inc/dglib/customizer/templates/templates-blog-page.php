<?php
/**
 * Template Index.php
 * @package dineshghimire
 * @subpackage dblib
 * @since 1.0.0
 */
$wp_customize->add_section(
    'template_index_options', 
    array(
        'title' => esc_html__('Blog/Home Page', '__Text_Domain__'),
        'panel' => 'site_template_options',
        'priority' => 50,
    )
);

/**
 * Enable Breadcrumbs
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'dglib_enable_breadcrumbs_index', array(
        'sanitize_callback' => 'esc_attr',
        'default'           => 'enable',
    )
);
$wp_customize->add_control(
    new Dglib_Customize_Switch_Control(
        $wp_customize, 
        'dglib_enable_breadcrumbs_index', 
        array(
            'label' => esc_html__('Enable Breadcrumbs?', '__Text_Domain__'),
            'section' => 'template_index_options',
            'priority' => 10,
            'type'=>'switch',
            'choices'=> array(
                'enable'=> esc_html__('Enable', '__Text_Domain__'),
                'disable'=> esc_html__('Disable', '__Text_Domain__'),
            ),
            'description'=> esc_html__('You can enable breadcrumbs to show before blog page.', '__Text_Domain__'),
        )
    )
);

/**
 * Sidebar Layouts
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'dglib_default_index_sidebar',
    array(
        'default'           => 'right_sidebar',
        'sanitize_callback' => 'sanitize_key',
    )
);
$wp_customize->add_control( 
    new Dglib_Customize_Imageoptions_Control(
        $wp_customize,
        'dglib_default_index_sidebar',
        array(
            'label'    => esc_html__( 'Sidebar Layout', '__Text_Domain__' ),
            'description' => esc_html__( 'Choose sidebar from available layouts', '__Text_Domain__' ),
            'section'  => 'template_index_options',
            'choices'  => array(
                'left_sidebar' => array(
                    'label' => esc_html__( 'Left Sidebar', '__Text_Domain__' ),
                    'url'   => '%s/inc/dglib/assets/img/sidebars/left-sidebar.png'
                ),
                'right_sidebar' => array(
                    'label' => esc_html__( 'Right Sidebar', '__Text_Domain__' ),
                    'url'   => '%s/inc/dglib/assets/img/sidebars/right-sidebar.png'
                ),
                'no_sidebar' => array(
                    'label' => esc_html__( 'No Sidebar', '__Text_Domain__' ),
                    'url'   => '%s/inc/dglib/assets/img/sidebars/no-sidebar.png'
                ),
                'no_sidebar_center' => array(
                    'label' => esc_html__( 'No Sidebar Center', '__Text_Domain__' ),
                    'url'   => '%s/inc/dglib/assets/img/sidebars/no-sidebar-center.png'
                ),
                'both_sidebar' => array(
                    'label' => esc_html__( 'Both Sidebar', '__Text_Domain__' ),
                    'url'   => '%s/inc/dglib/assets/img/sidebars/both-sidebar.png'
                )
            ),
            'priority' => 20
        )
    )
);

/**
 * Read More Text Index.php 
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'dglib_readmore_text_index', array(
        'sanitize_callback' => 'esc_attr',
        'default'           => esc_html__('Read More...', '__Text_Domain__'),
    )
);
$wp_customize->add_control(
    'dglib_readmore_text_index', 
    array(
        'type'=>'text',
        'priority' => 30,
        'label' => esc_html__('Readmore Text', '__Text_Domain__'),
        'section' => 'template_index_options',
        'description'=> esc_html__('If you can show featured image on blog page check on show button.', '__Text_Domain__'),
    )
);

/**
 * Short Description Length 
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'dglib_excerpt_length_index', array(
        'sanitize_callback' => 'absint',
        'default'           => 150,
    )
);
$wp_customize->add_control(
    'dglib_excerpt_length_index', 
    array(
        'type'=>'number',
        'priority' => 40,
        'label' => esc_html__('Description Length', '__Text_Domain__'),
        'section' => 'template_index_options',
        'description'=> esc_html__('Please choose no of character to display description length in blog page.', '__Text_Domain__'),
    )
);

/**
 * Enable Post Date
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'dglib_enable_date_index', array(
        'sanitize_callback' => 'esc_attr',
        'default'           => 'show',
    )
);
$wp_customize->add_control(
    new Dglib_Customize_Switch_Control(
        $wp_customize, 
        'dglib_enable_date_index', 
        array(
            'label' => esc_html__('Show date on posts?', '__Text_Domain__'),
            'section' => 'template_index_options',
            'priority' => 50,
            'type'=>'switch',
            'choices'=> array(
                'show'=> esc_html__('Show', '__Text_Domain__'),
                'hide'=> esc_html__('Hide', '__Text_Domain__'),
            ),
            'description'=> esc_html__('If you can show post date on blog page please check show button.', '__Text_Domain__'),
        )
    )
);

/**
 * Enable Author Name
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'dglib_enable_authorname_index', array(
        'sanitize_callback' => 'esc_attr',
        'default'           => 'show',
    )
);
$wp_customize->add_control(
    new Dglib_Customize_Switch_Control(
        $wp_customize, 
        'dglib_enable_authorname_index', 
        array(
            'label' => esc_html__('Show author name on posts?', '__Text_Domain__'),
            'section' => 'template_index_options',
            'priority' => 60,
            'type'=>'switch',
            'choices'=> array(
                'show'=> esc_html__('Show', '__Text_Domain__'),
                'hide'=> esc_html__('Hide', '__Text_Domain__'),
            ),
            'description'=> esc_html__('If you can show author name on blog page please check show button.', '__Text_Domain__'),
        )
    )
);
