<?php 

function meal_service_section_meta($metaboxs){

	$section_id = 0;
	
    if(isset($_REQUEST['post'])|isset($_REQUEST['post_ID'])){
        $section_id = empty($_REQUEST['post_ID'])?$_REQUEST['post']:$_REQUEST['post_ID'];
    }
    if ('section' != get_post_type( $section_id )) {
		return $metaboxs;
	}

    $section_meta = get_post_meta( $section_id, 'metabox_select_type' , true );
    $section_type = $section_meta['meta_type'];

    if ('service' != $section_type) {
        return $metaboxs;
    }

	$metaboxs[] = array(
		'id' => 'service-section',
		'title' => __('service Settings','meal'),
		'post_type' => 'section',
		'context' => 'normal',
		'priority' => 'default',
		'sections' => array(
			array(
				'name'=> 'service-section-meta-1',
				'icon' => 'fa fa-image',
				'fields' => array(
					array(
						'id' => 'service',
						'title' => __('service','meal'),
						'type' => 'group',
						'button_title' => __('New service','meal'),
						'accordion_title' => __('Add New service','meal'),
						'fields' => array(
							array(
								'id' => 'icon',
								'title' => __('Icon','meal'),
								'type' => 'select',
								'options' => array(
									'flaticon-chicken' => __('Chicken','meal'),
									'flaticon-pancake' => __('Pancake','meal'),
									'flaticon-salad' => __('Salad','meal'),
									'flaticon-soup' => __('Soup','meal'),
									'flaticon-vegetables' => __('Vegetables','meal'),
									'flaticon-tray' => __('Tray','meal'),
								),
							),
							array(
								'id' => 'title',
								'title' => __('Title','meal'),
								'type' => 'text',
							),
							
							array(
								'id' => 'description',
								'title' => __('description','meal'),
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

add_action( 'cs_metabox_options', 'meal_service_section_meta');