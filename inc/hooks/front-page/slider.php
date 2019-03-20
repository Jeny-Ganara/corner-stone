<?php
if ( ! function_exists( 'evision_corporate_front_slider' ) ) :
    /**
     * slider
     *
     * @since eVision Corporate 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function evision_corporate_front_slider() {
global $post;
        global $evision_corporate_customizer_all_values;
        $evision_corporate_sliders = coder_get_repeated_all_value('evision-corporate-slider');

        // if( isset( $evision_corporate_customizer_all_values['evision-corporate-slider-enable'] ) && $evision_corporate_customizer_all_values['evision-corporate-slider-enable'] && null != $evision_corporate_sliders ){
          $evision_corporate_slider_pages_ids = array();
          $evision_corporate_slider_query = false;

            foreach($evision_corporate_sliders as $evision_corporate_slider) {
                if( 0 != $evision_corporate_slider['evision-corporate-slider-pages'] ){
                    $evision_corporate_slider_pages_ids[] = $evision_corporate_slider['evision-corporate-slider-pages'];
                }
            }

            if( count( $evision_corporate_slider_pages_ids ) > 0 ) {
             
                  $evision_corporate_slider_query = get_posts(
                      array(
                          'post_type' => 'page',
                          'post__in' => $evision_corporate_slider_pages_ids,
                          'posts_per_page' => 3,
                          'orderby' => 'post__in'
                      )                      
                  );                 
                  
            } else {
              $evision_corporate_slider_query = array();
              
              $evision_corporate_slider_query[0] = new stdClass();
              $evision_corporate_slider_query[0]->ID = 0;
              $evision_corporate_slider_query[0]->post_title    = 'Welcome to Evision-corporate';
              $evision_corporate_slider_query[0]->post_content  = 'This is your dummy post. Please select  page from Customizer - home page all section - Slider Section.';
                   

            }
          ?>
                <!-- *****************************************
                      hero banner section start
                  ****************************************** -->
                <section class="wrapper hero-banner-block" id="evision-corporate-slider">
                    <ul class="evision-corporate-main-slider">
                        <?php
                         if( count( $evision_corporate_slider_query ) > 0 ) :
                            /*loop*/
                           foreach( $evision_corporate_slider_query as $post ) :
                                if( $post->ID != 0  ) {
                                  setup_postdata( $post );
                                }
                                ?>
                                <li class="post-<?php echo $post->ID ;?>">
                                    <?php
                                    if ( has_post_thumbnail() ):
                                        $evision_corporate_slider_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'corporate-main-banner');
                                    else:
                                        $evision_corporate_slider_image[0] = get_template_directory_uri() . '/assets/img/block-banner1.jpg';
                                    endif;
                                    ?>
                                    <img src="<?php echo $evision_corporate_slider_image[0]; ?>" alt="<?php the_title_attribute(); ?>"/>
                                    <div class="evision-corporate-slider-content">
                                        <div class="container">
                                            <div class="evision-corporate-slider-caption">
                                                <div class="main-title">
                                                  <?php if( $post->ID  != 0 ) {?>
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_title(); ?>
                                                    </a>
                                                    <?php } else {?>
                                                    <?php echo $post->post_title;?>
                                                    <?php } ?>
                                                </div>
                                                <?php
                                                if( $post->ID  != 0  ) {
                                                echo evision_corporate_words_count(40, get_the_content());
                                                 } else {
                                                   echo $post->post_content;
                                                  } 
                                                ?>
                                                <div class="clearfix"</div>
                                              
                                                <a class="big-btn" href="<?php the_permalink(); ?>"><?php _e( 'Know more', 'evision-corporate' )?></a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                            <!-- end of the loop -->
                            <?php // wp_reset_postdata(); ?>
                        <?php else : ?>
                            <!--Probably this message never display-->
                            <?php _e( 'Please select pages for slider, also make sure to have featured image for all pages', 'evision-corporate' ); ?>
                        <?php endif;?>
                    </ul>
                </section>
                <!-- *****************************************
                          hero banner section ends
                ****************************************** -->
            <?php
          }
    // }
endif;
add_action( 'evision_corporate_action_front_slider', 'evision_corporate_front_slider', 10 );