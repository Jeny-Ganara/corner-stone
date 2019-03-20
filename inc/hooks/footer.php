<?php
if ( ! function_exists( 'evision_corporate_after_content' ) ) :
    /**
     * if front page div end
     *
     * @since eVision Corporate 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function evision_corporate_after_content() {
        if ( !is_front_page() || ( is_front_page() && 'posts' == get_option( 'show_on_front' ) ) ) {
            echo'</div>';/*<!-- #content -->';*/
        }
    }
endif;
add_action( 'evision_corporate_action_after_content', 'evision_corporate_after_content', 10 );

if ( ! function_exists( 'evision_corporate_footer' ) ) :
    /**
     * Footer content
     *
     * @since eVision Corporate 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function evision_corporate_footer() {
        global $evision_corporate_customizer_all_values;
        ?>
        <!-- *****************************************
             Footer section starts
    ****************************************** -->
        <section class="wrapper wrap-contact site-footer dark-color-bg">
            <?php if( is_active_sidebar( 'footer-col-one' ) || is_active_sidebar( 'footer-col-two' ) || is_active_sidebar( 'footer-col-three' ) || is_active_sidebar( 'footer-col-four' )){ ?>
                <div class="container overhidden">
                    <div class="contact-inner evision-animate fadeInUp">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <?php if( is_active_sidebar( 'footer-col-one' )) : ?>
                                        <div class="footer-sidebar col-xs-12 col-sm-12 col-md-4">
                                            <?php dynamic_sidebar( 'footer-col-one' ); ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if( is_active_sidebar( 'footer-col-two' )) : ?>
                                        <div class="footer-sidebar col-xs-12 col-sm-12 col-md-4">
                                            <?php dynamic_sidebar( 'footer-col-two' ); ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if( is_active_sidebar( 'footer-col-three' )) : ?>
                                        <div class="footer-sidebar col-xs-12 col-sm-12 col-md-4">
                                            <?php dynamic_sidebar( 'footer-col-three' ); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="container bottom-footer">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <?php
                            if(isset($evision_corporate_customizer_all_values['evision-corporate-footer-copyright'])){
                                echo apply_filters('the_content', $evision_corporate_customizer_all_values['evision-corporate-footer-copyright']);
                            }
                            ?>
                            <?php printf( __( 'Theme : %1$s by %2$s | ', 'evision-corporate' ), 'eVision Corporate', '<a href="'. esc_url('http://evisionthemes.com/').'" rel="designer" target="_blank">eVision Themes</a>' ); ?>
                            <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'evision-corporate' ) ); ?>" target="_blank"><?php printf( __( 'Proudly powered by %s', 'evision-corporate' ), 'WordPress' ); ?></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <?php
                        if( isset( $evision_corporate_customizer_all_values['evision-corporate-footer-social-enable'] )  && 1 == $evision_corporate_customizer_all_values['evision-corporate-footer-social-enable']) {
                            ?>
                            <div class="social-group-nav social-icon-only evision-corporate-social-section">
                                <?php wp_nav_menu( array( 'theme_location' => 'evision-corporate-social', 'menu_id' => 'primary-menu' ) ); ?>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- *****************************************
                 Footer section ends
        ****************************************** -->
    <?php
    }
endif;
add_action( 'evision_corporate_action_footer', 'evision_corporate_footer', 10 );

if ( ! function_exists( 'evision_corporate_page_end' ) ) :
    /**
     * Page end
     *
     * @since eVision Corporate 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function evision_corporate_page_end() {
        global $evision_corporate_customizer_all_values;
        if( isset( $evision_corporate_customizer_all_values['evision-corporate-footer-gotop-enable'] )  && 1 == $evision_corporate_customizer_all_values['evision-corporate-footer-gotop-enable']) {
        ?>
            <a class="evision-corporate-back-to-top" href="#page"><i class="fa fa-angle-up"></i></a>
        <?php
        }
        ?>
        </div><!-- #page -->
    <?php
    }
endif;
add_action( 'evision_corporate_action_after', 'evision_corporate_page_end', 10 );