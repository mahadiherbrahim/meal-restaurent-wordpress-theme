<?php 
/*
*Template Name: Landing Page Template;
*/ 
    get_header();
?>

    <div class="main-wrap " id="section-home">


        <?php  
            $meal_current_page_id = get_the_ID();
            $meal_page_meta = get_post_meta( $meal_current_page_id, 'section_picker_metabox',true);
            foreach ($meal_page_meta['section-1'] as $meal_page_section):
                $meal_section_id = $meal_page_section['section'];
                $meal_section_meta = get_post_meta(  $meal_section_id,'metabox_select_type',true );
                $meal_section_type = $meal_section_meta['meta_type'];

                get_template_part( "section-templates/{$meal_section_type}" );
            endforeach;
        ?>
        




        <div class="map-wrap" id="map" data-aos="fade">
            
        </div>


        <footer class="ftco-footer">
            <div class="container">

                <div class="row">
                    <div class="col-md-4 mb-5">
                        <?php  
                            if (is_active_sidebar('footer-left')) {
                                dynamic_sidebar( 'footer-left' );
                            }
                        ?>
                    </div>
                    <div class="col-md-4 mb-5">
                        <?php  
                            if (is_active_sidebar('footer-middle')) {
                                dynamic_sidebar( 'footer-middle' );
                            }
                        ?>
                    </div>

                    <div class="col-md-4">
                        <?php  
                            if (is_active_sidebar('footer-right')) {
                                dynamic_sidebar( 'footer-right' );
                            }
                        ?>
                        <div class="footer-widget">
                            <div id="mc_embed_signup">
                                <h3 class="mb-4"><?php _e( 'Newsletter', 'meal' ); ?></h3>
                                <form action="https://xyz.us10.list-manage.com/subscribe/post?u=a78c234043cb4db8bbf6ec30c&id=8d14a8da0e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="ftco-footer-newsletter" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll" class=" form-group">
                                    
                                        <input type="email" value="" name="EMAIL" class="email form-control" id="mce-EMAIL" placeholder="Enter Email" required>

                                        <button class="button"  name="subscribe" id="mc-embedded-subscribe"><span class="fa fa-envelope"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row pt-5">
                    <div class="col-md-12 text-center">
                        <?php  
                            if (is_active_sidebar('footer-bottom')) {
                                dynamic_sidebar( 'footer-bottom' );
                            }
                        ?>
                    </div>
                </div>
            </div>
        </footer>

    </div>
<?php 
    get_footer();
?>