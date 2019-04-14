<?php
/**
 * Demo Repeater Section
 * @package dineshghimire
 * @subpackage __Text_Domain__
 * @since 1.0.0
 */
$wp_customize->add_section(
    'demo_icons_section', 
    array(
        'title' => esc_html__('Icon Section', '__Text_Domain__'),
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
    'demo_icons_control', 
    array(
        'sanitize_callback' => 'esc_attr',
        'default' => 'fa fa-facebook-f',
    )
);
$wp_customize->add_control(
    new Dglib_Customize_Icons_Control(
        $wp_customize, 
        'demo_icons_control', 
        array(
            'type'=>'icons',
            'label' => esc_html__('Demo Repeater Fields', '__Text_Domain__'),
            'section' => 'demo_icons_section',
            'settings' => 'demo_icons_control',
            'priority' => 10,
        )
    )
);

