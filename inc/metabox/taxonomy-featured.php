<?php 


function meal_recipe_featured_cat($metaboxes){

	$metaboxes[] = array(
		'id' => 'meal-recipe-category',
		'taxonomy' => 'category',
		'fields' => array(
			array(
				'id' => 'featured',
				'type' => 'switcher',
				'Title' => __('Featured','meal')
			),
		),
	); 

	return $metaboxes;
}
add_filter( 'cs_taxonomy_options', 'meal_recipe_featured_cat' );