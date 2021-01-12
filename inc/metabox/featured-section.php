<?php 

function meal_featured_section_meta($metaboxs){

	$section_id = 0;
	if(isset($_REQUEST['post'])|isset($_REQUEST['post_ID'])){
    	$section_id = empty($_REQUEST['post_ID'])?$_REQUEST['post']:$_REQUEST['post_ID'];
    }

    if ('section'!=get_post_type( $section_id )) {
		return $metaboxs;
	}

    $section_meta = get_post_meta( $section_id, 'metabox_select_type' , true );
    $section_type = $section_meta['meta_type'];


    if ('featured' != $section_type) {
        return $metaboxs;
    }

	$metaboxs[] = array(
		'id' => 'featured-section',
		'title' => __('Featured Recipe Settings','meal'),
		'post_type' => 'section',
		'context' => 'normal',
		'priority' => 'default',
		'sections' => array(
			array(
				'id'=> 'featured-section-meta',
				'icon' => 'fa fa-image',
				'fields' => array(
					array(
						'id' => 'featured_recipe',
						'title' => __('Select Recipe','meal'),
						'type' => 'group',
						'button_title' => __('New Recipe','meal'),
						'accordion_title' => __('Add New Recipe','meal'),
						'fields' => array(
							array(
								'id' => 'recipe',
								'title' => __('Select Sections','meal'),
								'type' => 'select',
								'options' => 'post',
								'query_args' => array(
									'post_type' => 'racipe',
									'posts_per_page' =>-1,
								),
							),
						),
					)
				)
			)
		)
	);
	return $metaboxs;
}
add_action( 'cs_metabox_options', 'meal_featured_section_meta');