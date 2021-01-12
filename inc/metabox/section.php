<?php 

function meal_metabox_options($metaboxs){

	

	$metaboxs[] = array(
		'id' => 'metabox_select_type',
		'title' => __('Metabox Select Type','meal'),
		'post_type' => 'section',
		'context' => 'normal',
		'priority' => 'default',
		'sections' => array(
			array(
				'name'=> 'meal-type-section-one',
				'title' => __('Metabox Section Select','meal'),
				'icon' => 'fa fa-image',
				'fields' => array(
					array(
						'id' => 'meta_type',
						'title' => __('Select Section Type','meal'),
						'type' => 'select',
						'options' => array(
							'banner' =>__('Banner','meal'),
							'featured' =>__('Featured Recipe','meal'),
							'gallery' =>__('Gallery','meal'),
							'chef' =>__('Chef','meal'),
							'menu' =>__('Menu','meal'),
							'service' =>__('Services','meal'),
							'reservation' =>__('Reservation','meal'),
							'testimonial' =>__('Testimonials','meal'),
							'contact' =>__('Contact','meal')
						)
					)
				)
			)
		)
	);
	return $metaboxs;
}
add_action( 'cs_metabox_options', 'meal_metabox_options');