<?php  
    global $meal_section_id;
    $meal_section_meta = get_post_meta( $meal_section_id,'service-section', true );
   

    $meal_section = get_post($meal_section_id);
    $meal_section_title = $meal_section->post_title;
    $meal_section_content = $meal_section->post_content;

?>
<div class="section bg-white services-section" id="<?php echo esc_attr( $meal_section->post_name ); ?>" data-aos="fade-up">
            <div class="container">
                <div class="row section-heading justify-content-center mb-5">
                    <div class="col-md-8 text-center">
                        <h2 class="heading mb-3">
			                <?php echo esc_html( $meal_section_title ); ?>
			            </h2>
			            <p class="sub-heading mb-5">
			                <?php echo wp_kses_post( $meal_section_content ); ?>
			            </p>
                        </p>
                    </div>
                </div>
                <?php  
                	$meal_services = $meal_section_meta['service'];
                	if($meal_services):
                ?>
	                <div class="row">
	                	<?php  
	                		foreach($meal_services as $meal_service):
	                	?>
		                    <div class="col-m mb-5d-6 col-lg-4" data-aos="fade-up">
		                        <div class="media feature-icon d-block text-center">
		                            <div class="icon">
		                                <span class="<?php echo esc_attr($meal_service['icon']); ?>"></span>
		                            </div>
		                            <div class="media-body">
		                                <h3>
		                                	<?php echo esc_html($meal_service['title']); ?>
		                                </h3>
		                                <?php  
		                                	echo apply_filters( 'the_content', $meal_service['description'] );
		                                ?>
		                            </div>
		                        </div>
		                    </div>
	                	<?php endforeach; ?>
	                </div>
            	<?php endif ?>
            </div>
        </div> <!-- .section -->