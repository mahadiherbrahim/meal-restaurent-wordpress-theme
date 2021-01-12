<?php 

function meal_testimonial_section_meta($metaboxs){

	$section_id = 0;
	
    if(isset($_REQUEST['post'])|isset($_REQUEST['post_ID'])){
        $section_id = empty($_REQUEST['post_ID'])?$_REQUEST['post']:$_REQUEST['post_ID'];
    }
    if ('section' != get_post_type( $section_id )) {
		return $metaboxs;
	}

    $section_meta = get_post_meta( $section_id, 'metabox_select_type' , true );
    $section_type = $section_meta['meta_type'];

    if ('testimonial' != $section_type) {
        return $metaboxs;
    }

	$metaboxs[] = array(
		'id' => 'testimonial-section',
		'title' => __('Testimonial Settings','meal'),
		'post_type' => 'section',
		'context' => 'normal',
		'priority' => 'default',
		'sections' => array(
			array(
				'name'=> 'testimonial-section-meta-1',
				'icon' => 'fa fa-image',
				'fields' => array(
					array(
						'id' => 'testimonial',
						'title' => __('Testimonial','meal'),
						'type' => 'group',
						'button_title' => __('New Testimonial','meal'),
						'accordion_title' => __('Add New Testimonial','meal'),
						'fields' => array(
							array(
								'id' => 'name',
								'title' => __('Name','meal'),
								'type' => 'text',
							),
							array(
								'id' => 'title',
								'title' => __('Title','meal'),
								'type' => 'text',
							),
							array(
							'id' => 'image',
							'title' => __('Image','meal'),
							'type' => 'image',
							),
							array(
								'id' => 'review',
								'title' => __('review','meal'),
								'type' => 'textarea',
							),
						),
					),
				)
			)
		)
	);

	return $metaboxs;
}

add_action( 'cs_metabox_options', 'meal_testimonial_section_meta');