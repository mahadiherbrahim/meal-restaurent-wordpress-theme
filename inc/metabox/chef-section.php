<?php 

function meal_chef_section_meta($metaboxs){

	$section_id = 0;
	
    if(isset($_REQUEST['post'])|isset($_REQUEST['post_ID'])){
        $section_id = empty($_REQUEST['post_ID'])?$_REQUEST['post']:$_REQUEST['post_ID'];
    }
    if ('section' != get_post_type( $section_id )) {
		return $metaboxs;
	}

    $section_meta = get_post_meta( $section_id, 'metabox_select_type' , true );
    $section_type = $section_meta['meta_type'];

    if ('chef' != $section_type) {
        return $metaboxs;
    }

	$metaboxs[] = array(
		'id' => 'chef-section',
		'title' => __('Chef Settings','meal'),
		'post_type' => 'section',
		'context' => 'normal',
		'priority' => 'default',
		'sections' => array(
			array(
				'name'=> 'chef-section-meta-1',
				'icon' => 'fa fa-image',
				'fields' => array(
					array(
						'id' => 'chef',
						'title' => __('Chef','meal'),
						'type' => 'group',
						'button_title' => __('New Chef','meal'),
						'accordion_title' => __('Add New Chef','meal'),
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
								'id' => 'bio',
								'title' => __('Bio','meal'),
								'type' => 'textarea',
							),
							array(
								'id' => 'social_profile',
								'type' => 'fieldset',
								'title' => __('Social Links','meal'),
								'fields' => array(
									array(
										'id' => 'facebook',
										'type' => 'text',
										'title' => __('Facebook','meal'),
									),
									array(
										'id' => 'twitter',
										'type' => 'text',
										'title' => __('Twitter','meal'),
									),
									array(
										'id' => 'instagram',
										'type' => 'text',
										'title' => __('Instagram','meal'),
									),
									
								),
							),
						),
					),
				)
			)
		)
	);

	return $metaboxs;
}

add_action( 'cs_metabox_options', 'meal_chef_section_meta');