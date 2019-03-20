<?php
add_action( 'wp_head', 'evision_corporate_wp_head' );

if( ! function_exists( 'evision_corporate_wp_head' ) ) :

    /**
     * evision_corporate_wp_head
     *
     * @since  Evision Corporate 1.0.0
     */
    function evision_corporate_wp_head(){
        global $evision_corporate_customizer_all_values;
        $css = '';
        // Color layout css
        $evision_corporate_inline_css = '';
        ?>
        <style type="text/css">
            <?php if(isset($evision_corporate_customizer_all_values['evision-corporate-service-background']) && !empty($evision_corporate_customizer_all_values['evision-corporate-service-background'])) { ?>
            .block-service{
                background: url(<?php echo $evision_corporate_customizer_all_values['evision-corporate-service-background']?>) no-repeat center center;
            }
            <?php
            }
            ?>
            <?php if(isset($evision_corporate_customizer_all_values['evision-corporate-testimonial-background']) && !empty($evision_corporate_customizer_all_values['evision-corporate-testimonial-background'])) { ?>
            .block-testimonial{
                background: url(<?php echo $evision_corporate_customizer_all_values['evision-corporate-testimonial-background']?>) no-repeat center center;
            }
            <?php
            }
            ?>
            <?php if(isset($evision_corporate_customizer_all_values['evision-corporate-team-background']) && !empty($evision_corporate_customizer_all_values['evision-corporate-team-background'])) { ?>
            .block-team{
                background:url(<?php echo $evision_corporate_customizer_all_values['evision-corporate-team-background']?>) no-repeat center center;
            }
            <?php
            }
            ?>
            <?php if(isset($evision_corporate_customizer_all_values['evision-corporate-contact-background']) && !empty($evision_corporate_customizer_all_values['evision-corporate-contact-background'])) { ?>
            .block-contact{
                background:url(<?php echo $evision_corporate_customizer_all_values['evision-corporate-contact-background']?>) no-repeat center center;
            }
            <?php
            }
            ?>
        </style>
    <?php
    // Declare variable to store custom css
        $evision_corporate_custom_css = '';
        // Check if the custom CSS feature of 4.7 exists
        if ( function_exists( 'wp_update_custom_css_post' ) ) {
            // Migrate any existing theme CSS to the core option added in WordPress 4.7.
            if( !empty( $evision_corporate_customizer_all_values['evision-corporate-advanced-custom-css'] ) )
                $css = $evision_corporate_customizer_all_values['evision-corporate-advanced-custom-css'];
            
            if ( $css ) {
                $core_css = wp_get_custom_css(); // Preserve any CSS already added to the core option.
                $return = wp_update_custom_css_post( $core_css . $css );
                
                if ( ! is_wp_error( $return ) ) {
                    // Remove the old theme_mod, so that the CSS is stored in only one place moving forward.
                    $evision_corporate_customizer_all_values['evision-corporate-advanced-custom-css'] = '';
                    set_theme_mod( 'evision-corporate-options', $evision_corporate_customizer_all_values );
                }
            }
        } else {
            // Back-compat for WordPress < 4.7.
            if ( isset( $evision_corporate_customizer_all_values['evision-corporate-advanced-custom-css'] ) ) {
                $evision_corporate_custom_css = $evision_corporate_customizer_all_values['evision-corporate-advanced-custom-css'];
                $evision_corporate_inline_css .= $evision_corporate_custom_css;
            }
        }   

        $css .= $evision_corporate_inline_css;
        wp_add_inline_style( 'evision-corporate-style', $css );
    }
endif;