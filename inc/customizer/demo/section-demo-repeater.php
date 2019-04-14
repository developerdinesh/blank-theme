<?php
/**
 * Demo Repeater Section
 * @package dineshghimire
 * @subpackage __Text_Domain__
 * @since 1.0.0
 */
$wp_customize->add_section(
    'demo_repeater_sections', 
    array(
        'title' => esc_html__('Demo Repeater', '__Text_Domain__'),
        'panel' => 'demo_customizer_panel',
        'priority' => 10,
    )
);

/**
 * Repeater field for social media icons
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'demo_repeater_fields', 
    array(
        'sanitize_callback' => 'dglib_sanitize_repeater_data',
        'default' => json_encode(
            array(
                array(
                    'icon_class' => 'fa fa-facebook-f',
                    'icon_url' => '',
                    'icon_background' => '',
                )
            )
        )
    )
);
$wp_customize->add_control(
    new Dglib_Customizer_Repeater_Control(
        $wp_customize, 
        'demo_repeater_fields', 
        array(
            'label' => esc_html__('Demo Repeater Fields', '__Text_Domain__'),
            'section' => 'demo_repeater_sections',
            'settings' => 'demo_repeater_fields',
            'priority' => 10,
            'add_row_label' => esc_html__('Add Field', '__Text_Domain__'),
            'wraper_item_label' => esc_html__('Demo Wrapper Label', '__Text_Domain__'),
        ), 
        array(
            'icon_class' => array(
                'type' => 'icons',
                'label' => esc_html__('Social Media Icon', '__Text_Domain__'),
                'description' => esc_html__('Choose social media icon.', '__Text_Domain__')
            ),
            'icon_url' => array(
                'type' => 'url',
                'label' => esc_html__('Social Icon Url', '__Text_Domain__'),
                'description' => esc_html__('Enter social media url.', '__Text_Domain__')
            ),
            'icon_background' => array(
                'type' => 'color',
                'default' => '#214d74',
                'label' => esc_html__('Social Icon Background', '__Text_Domain__'),
                'description' => esc_html__('Choose social media icon background color.', '__Text_Domain__')
            ),
        )
    )
);

