<?php 

function meal_banner_section_meta($metaboxs){

	$section_id = 0;
	
    if(isset($_REQUEST['post'])|isset($_REQUEST['post_ID'])){
        $section_id = empty($_REQUEST['post_ID'])?$_REQUEST['post']:$_REQUEST['post_ID'];
    }
    if ('section'!=get_post_type( $section_id )) {
		return $metaboxs;
	}

    $section_meta = get_post_meta( $section_id, 'metabox_select_type' , true );
    $section_type = $section_meta['meta_type'];


    if ('banner' != $section_type) {
        return $metaboxs;
    }

	$metaboxs[] = array(
		'id' => 'banner-section',
		'title' => __('Banner Settings','meal'),
		'post_type' => 'section',
		'context' => 'normal',
		'priority' => 'default',
		'sections' => array(
			array(
				'id'=> 'banner-section-meta',
				'icon' => 'fa fa-image',
				'fields' => array(
					array(
						'id' => 'banner_image',
						'title' => __('Banner Image','meal'),
						'type' => 'image',
					),
					array(
						'id' => 'button_target',
						'title' => __('Button target','meal'),
						'type' => 'text',
					),
					array(
						'id' => 'button_title',
						'title' => __('Button Title','meal'),
						'type' => 'text',
					),
				)
			)
		)
	);
	return $metaboxs;
}
add_action( 'cs_metabox_options', 'meal_banner_section_meta');