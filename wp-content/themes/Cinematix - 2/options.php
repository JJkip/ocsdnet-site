<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	$themename = 'cinematix';

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	// Test data
	$color_scheme = array("0" => "None","1" => "Grape","2" => "Blue","3" => "Pink","4" => "Pumpkin Orange","5" => "Golden Brown","6" => "Green","7" => "Hazel Green","8" => "Teal","9" => "Red Wine","10" => "White");

	// Multicheck Array
	$multicheck_array = array("one" => "French Toast", "two" => "Pancake", "three" => "Omelette", "four" => "Crepe", "five" => "Waffle");

	// Multicheck Defaults
	$multicheck_defaults = array("one" => "1","five" => "1");

	// Background Defaults

	$background_defaults = array('color' => '', 'image' => '', 'repeat' => 'repeat','position' => 'top center','attachment'=>'scroll');


	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
    	$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
    	$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_stylesheet_directory_uri() . '/images/';

	$options = array();


	$options[] = array( "name" => "General Settings",
						"type" => "heading");

	$options[] = array( "name" => "Uploader",
						"desc" => "You can upload your logo or something else and paste path below.",
						"id" => "example_uploader",
						"type" => "upload");


	$options[] = array( "name" => "Your logo`s path",
						"desc" => "Put your logo`s path here. You can upload your logo using the Uploader above",
						"id" => "logo_path",
						"std" => "http://www.demo1.diaboliquedesign.com/5/logo.png",
						"type" => "text");


	$options[] = array( "name" => "Your favicon`s path",
						"desc" => "Put your favicon`s path here. You can upload your favicon using the Uploader above",
						"id" => "favicon_path",
						"std" => "http://www.demo1.diaboliquedesign.com/5/favicon.gif",
						"type" => "text");


		$options[] = array(
		'name' => "Color scheme",
		'desc' => "Change color scheme of theme",
		'id' => 'color-scheme-select',
		'std' => '0',
		'type' => 'select',
		'class' => 'mini', //mini, tiny, small
		'options' => $color_scheme);


	$options[] = array( "name" => "Enable WP bar",
	"desc" => "Make WP bar invisible", "options_check",
	"id" => "wpbar",
	"std" => "0",
	"type" => "checkbox");


	$options[] = array( "name" => "Number of recent posts on the widget",
						"desc" => "",
						"id" => "widget-1",
						"std" => "3",
						"type" => "text");

	$options[] = array( "name" => "Number of recent forum topics on the widget",
						"desc" => "",
						"id" => "widget-2",
						"std" => "4",
						"type" => "text");

	$options[] = array( "name" => "Link to the Facebook profile",
						"desc" => "",
						"id" => "fb",
						"std" => "http://www.facebook.com",
						"type" => "text");


	$options[] = array( "name" => "Website Analytics",
						"desc" => "You can paste google analytics code here",
						"id" => "analytics",
						"std" => "",
						"type" => "textarea");



	$options[] = array( "name" => "Slider",
						"type" => "heading");


	$options[] = array( "name" => "Take a tour! image`s path",
						"desc" => "Put your path to the `Take a tour` image. You can upload it using the Uploader",
						"id" => "take-a-tour_path",
						"std" => "http://www.demo1.diaboliquedesign.com/5/tour.png",
						"type" => "text");






	return $options;
}