<?php

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function evision_corporate_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'evision-corporate' ),
        'id'            => 'sidebar-1',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
        register_sidebar(array(
            'name' => __('Footer Column One', 'evision-corporate'),
            'id' => 'footer-col-one',
            'description' => 'Displays items on footer section.',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title'  => '<h1 class="widget-title">',
            'after_title'   => '</h1>',
        ));
        register_sidebar(array(
            'name' => __('Footer Column Two', 'evision-corporate'),
            'id' => 'footer-col-two',
            'description' => 'Displays items on footer section.',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title'  => '<h1 class="widget-title">',
            'after_title'   => '</h1>',
        ));
        register_sidebar(array(
            'name' => __('Footer Column Three', 'evision-corporate'),
            'id' => 'footer-col-three',
            'description' => 'Displays items on footer section.',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title'  => '<h1 class="widget-title">',
            'after_title'   => '</h1>',
        ));
}
add_action( 'widgets_init', 'evision_corporate_widgets_init' );