<?php  
    global $meal_section_id;
    $meal_section_meta = get_post_meta( $meal_section_id,'chef-section', true );
   

    $meal_section = get_post($meal_section_id);
    $meal_section_title = $meal_section->post_title;
    $meal_section_content = $meal_section->post_content;

?>

<div class="section bg-white" data-aos="fade-up" id="<?php echo esc_attr( $meal_section->post_name ); ?>">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-12 section-heading text-center">
				<h2 class="heading mb-3">
                    <?php echo esc_html( $meal_section_title ); ?>
                </h2>
                <p class="sub-heading mb-5">
                    <?php echo wp_kses_post( $meal_section_content ); ?>
                </p>
			</div>
		</div>
		<?php  
			$meal_chef = $meal_section_meta['chef'];
			if(isset($meal_chef )):
		?>
		<div class="row">
			<?php  
				foreach ($meal_chef as $mea_chef_m) :
				$meal_chef_image = wp_get_attachment_image_src( $mea_chef_m['image'], 'medium');
			?>
				<div class="col-md-6 pr-md-5 text-center mb-5">
					<div class="ftco-38">
						<div class="ftco-38-img">
							<div class="ftco-38-header">
								<img src="<?php echo esc_url($meal_chef_image[0]); ?>"
								alt="<?php echo esc_attr($mea_chef_m['name']); ?>">
								<h3 class="ftco-38-heading"><?php echo esc_html($mea_chef_m['name']); ?></h3>
								<p class="ftco-38-subheading"><?php echo esc_html($mea_chef_m['title']); ?></p>
							</div>
							<div class="ftco-38-body">
								<?php  
									echo apply_filters( 'the_content', $mea_chef_m['bio'] );
								?>
								<p>	
									<?php  
										if($mea_chef_m['social_profile']['facebook']):
									?>
										<a href="<?php echo esc_url($mea_chef_m['social_profile']['facebook']); ?>" class="p-2"><span class="fa fa-facebook"></span></a>
									<?php  
										endif;
									?>
									<?php  
										if($mea_chef_m['social_profile']['twitter']):
									?>
										<a href="<?php echo esc_url($mea_chef_m['social_profile']['twitter']); ?>" class="p-2"><span class="fa fa-twitter"></span></a>
									<?php  
										endif;
									?>
									<?php  
										if($mea_chef_m['social_profile']['instagram']):
									?>
										<a href="<?php echo esc_url($mea_chef_m['social_profile']['instagram']); ?>" class="p-2"><span class="fa fa-instagram"></span></a>
									<?php  
										endif;
									?>
									
								</p>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
			<!-- <div class="col-md-4"></div> -->
		</div>
		<?php endif; ?>
	</div>
</div> <!-- .section -->