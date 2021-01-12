<?php 

function meal_recipe_options($metaboxs){

	$metaboxs[] = array(
		'id' => 'metabox_recipe_option',
		'title' => __('Recipe Settings','meal'),
		'post_type' => 'racipe',
		'context' => 'normal',
		'priority' => 'default',
		'sections' => array(
			array(
				'name'=> 'metabox_recipe_option-one',
				'title' => __('Recipe Options','meal'),
				'icon' => 'fa fa-image',
				'fields' => array(
					array(
						'id' => 'price',
						'title' => __('Recipe Price','meal'),
						'type' => 'text',
					)
				)
			)
		)
	);
	return $metaboxs;
}
add_action( 'cs_metabox_options', 'meal_recipe_options');