<?php
/**
 * Demo Repeater Section
 * @package dineshghimire
 * @subpackage __Text_Domain__
 * @since 1.0.0
 */
$wp_customize->add_section(
    'demo_imageoptions_section', 
    array(
        'title' => esc_html__('Image Options Section', '__Text_Domain__'),
        'panel' => 'demo_customizer_panel',
        'priority' => 20,
    )
);

/**
 * Repeater field for social media icons
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'demo_image_option_control', 
    array(
        'sanitize_callback' => 'esc_attr',
        'default' => 'fa fa-facebook-f',
    )
);
$wp_customize->add_control(
    new Dglib_Customize_Imageoptions_Control(
        $wp_customize, 
        'demo_image_option_control', 
        array(
            'type'=>'imageoptions',
            'label' => esc_html__('Demo Repeater Fields', '__Text_Domain__'),
            'section' => 'demo_imageoptions_section',
            'settings' => 'demo_image_option_control',
            'priority' => 10,
            'choices' => array(
                'image1' => array(
                    'label'=>'Image One',
                    'url'=> "%s/inc/dglib/assets/img/angry.png",
                ),
                'image2' => array(
                    'label'=>'Image Two',
                    'url'=> "%s/inc/dglib/assets/img/crying.png",
                ),
                'image3' => array(
                    'label'=>'Image Three',
                    'url'=> "%s/inc/dglib/assets/img/happy.png",
                ),
                'image4' => array(
                    'label'=>'Image Four',
                    'url'=> "%s/inc/dglib/assets/img/love.png",
                ),
            ),
        )
    )
);

