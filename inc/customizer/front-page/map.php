<?php
global $evision_corporate_sections;
global $evision_corporate_settings_controls;
global $evision_corporate_repeated_settings_controls;
$evision_corporate_sections['evision-corporate-map'] =
    array(
        'priority'       => 100,
        'title'          => __( 'Map section', 'evision-corporate' ),
        'description'    => __( 'Customize map section', 'evision-corporate' ),
        'panel'          => 'evision-corporate-home',
    );
/*creating setting control for evision-corporate-map start*/
$evision_corporate_settings_controls['evision-corporate-map-enable'] =
    array(
        'control' => array(
            'label'                 =>  __( 'Enable map section', 'evision-corporate' ),
            'section'               => 'evision-corporate-map',
            'type'                  => 'checkbox',
            'priority'              => 2,
            'description'           => '',
            'active_callback'       => ''
        )
    );
$evision_corporate_settings_controls['evision-corporate-map-latitude'] =
    array(
        'setting' => array(
            'default'              => 40.712784
        ),
        'control' => array(
            'label'                 =>  __( 'Map latitude', 'evision-corporate' ),
            'section'               => 'evision-corporate-map',
            'type'                  => 'number',
            'priority'              => 4,
            'description'           => '',
            'active_callback'       => ''
        )
    );
$evision_corporate_settings_controls['evision-corporate-map-longitude'] =
    array(
        'setting' => array(
            'default'              => -74.005941
        ),
        'control' => array(
            'label'                 =>  __( 'Map longitude', 'evision-corporate' ),
            'section'               => 'evision-corporate-map',
            'type'                  => 'number',
            'priority'              => 6,
            'description'           => '',
            'active_callback'       => ''
        )
    );


    $evision_corporate_settings_controls['evision-corporate-map-enable-plugin'] =
        array(
            'control' => array(
                'label'                 =>  __( 'Enable map using plugin ', 'evision-corporate' ),
                'section'               => 'evision-corporate-map',
                'type'                  => 'checkbox',
                'priority'              => 10,
                'description'           => sprintf( __( 'Will replace the above map settings, Using %1$s WP Google Maps %2$s Plugin', 'evision-corporate' ),'<a href="'.esc_url('https://wordpress.org/plugins/wp-google-maps/').'" target="_blank">','</a>' ),
                'active_callback'       => ''
            )
        );


        $evision_corporate_settings_controls['evision-corporate-map-shortcode'] =
            array(
                'control' => array(
                    'label'                 =>  __( 'Enter Mape Shortcode', 'evision-corporate' ),
                    'section'               => 'evision-corporate-map',
                    'type'                  => 'text_html',
                    'priority'              => 12,
                    'description'       => sprintf( __( 'Recommended %1$s WP Google Maps %2$s plugin', 'evision-corporate' ), '<a href="'.esc_url('https://wordpress.org/plugins/wp-google-maps/').'" target="_blank">','</a>' ),
                )
            );