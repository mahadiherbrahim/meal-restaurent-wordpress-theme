<?php  
    global $meal_section_id;
    $meal_section_meta = get_post_meta( $meal_section_id,'testimonial-section', true );
   

    $meal_section = get_post($meal_section_id);
    $meal_section_title = $meal_section->post_title;
    $meal_section_content = $meal_section->post_content;

?>


<div class="section bg-white" data-aos="fade-up" id="<?php echo esc_attr( $meal_section->post_name ); ?>">
            <div class="container">
                <div class="row section-heading justify-content-center mb-5">
                    <div class="col-md-8 text-center">
                        <h2 class="heading mb-3">
                            <?php echo esc_html( $meal_section_title ); ?>
                        </h2>
                        <p class="sub-heading mb-5">
                            <?php echo wp_kses_post( $meal_section_content ); ?>
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center text-center" data-aos="fade-up">
                    
                    <div class="col-md-8">
                        <div class="owl-carousel home-slider-loop-false">
                        <?php  
                            $meal_testimonials = $meal_section_meta['testimonial'];
                            if(isset($meal_testimonials)):
                        ?>  
                        <?php  
                            foreach ( $meal_testimonials as $meal_testimonial) :
                               $meal_testimonial_image = wp_get_attachment_image_src($meal_testimonial['image'],'medium');
                        ?>
                            <div class="item">
                                <blockquote class="testimonial">
                                    <?php  
                                        echo apply_filters( 'the_content', $meal_testimonial['review'] );
                                    ?>
                                    <div class="author">
                                        <img src="<?php echo esc_url($meal_testimonial_image[0]); ?>" alt="<?php echo esc_attr($meal_testimonial['name']); ?>" class="mb-3">
                                        <h4><?php echo esc_html($meal_testimonial['name']); ?></h4>
                                        <p><?php echo esc_html($meal_testimonial['title']); ?></p>
                                    </div>
                                </blockquote>
                            </div>
                        <?php 
                            endforeach;
                        ?>
                         <?php 
                            endif;
                        ?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div> <!-- .section -->