<?php 

function meal_gallery_section_meta($metaboxs){

	$section_id = 0;
	
    if(isset($_REQUEST['post'])|isset($_REQUEST['post_ID'])){
        $section_id = empty($_REQUEST['post_ID'])?$_REQUEST['post']:$_REQUEST['post_ID'];
    }
    if ('section' != get_post_type( $section_id )) {
		return $metaboxs;
	}

    $section_meta = get_post_meta( $section_id, 'metabox_select_type' , true );
    $section_type = $section_meta['meta_type'];

    if ('gallery' != $section_type) {
        return $metaboxs;
    }

	$metaboxs[] = array(
		'id' => 'gallery-section',
		'title' => __('Gallery Settings','meal'),
		'post_type' => 'section',
		'context' => 'normal',
		'priority' => 'default',
		'sections' => array(
			array(
				'name'=> 'gallery-section-meta-1',
				'icon' => 'fa fa-image',
				'fields' => array(
					array(
						'id' => 'protfolio',
						'title' => __('Protfolio','meal'),
						'type' => 'group',
						'button_title' => __('New Image','meal'),
						'accordion_title' => __('Add New Image','meal'),
						'fields' => array(
							array(
								'id' => 'title',
								'title' => __('Image Title','meal'),
								'type' => 'text',
							),
							array(
							'id' => 'image',
							'title' => __('Image','meal'),
							'type' => 'image',
							),
							array(
								'id' => 'categories',
								'title' => __('Category','meal'),
								'type' => 'text',
							),
						),
					),
				)
			)
		)
	);

	return $metaboxs;
}

add_action( 'cs_metabox_options', 'meal_gallery_section_meta');