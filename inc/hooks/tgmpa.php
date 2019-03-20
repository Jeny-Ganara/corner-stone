<?php
add_action( 'tgmpa_register', 'evision_corporate_recommended_plugins' );

if( ! function_exists( 'evision_corporate_recommended_plugins' ) ) :

  /**
   * Recommended plugins
   *
   * @since  Evision Corporate 1.0.0
   */
  function evision_corporate_recommended_plugins(){
      $evision_corporate_plugins = array(
        array(
            'name'     => __( 'WP Google Maps', 'evision-corporate' ),
            'slug'     => 'wp-google-maps',
            'required' => false,
        ),
          array(
              'name'     => __( 'Contact Form 7', 'evision-corporate' ),
              'slug'     => 'contact-form-7',
              'required' => false,
          )
      );
      $evision_corporate_plugins_config = array(
          'dismiss_msg'     => __( 'As from now onward in WordPress dot org, the map section ( google map ) falls under the plugin territory, so we are planning to move our users safely to the google map plugin ( WP Google Maps ). On our next version of this theme,  the map section will be completely dependable with this plugin.', 'evision-corporate' ),
          'dismissable' => false,
      );
      
      tgmpa( $evision_corporate_plugins, $evision_corporate_plugins_config );
  }
endif;