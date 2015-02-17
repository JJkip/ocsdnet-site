<?php


//Custom functionality for your CBOX Child Theme.
require_once( 'engine/includes/custom.php' );
require_once( 'engine/includes/showcase/setup.php' );

/**
 * Set this to true to put Infinity into developer mode. Developer mode will refresh the dynamic.css on every page load.
 */
define( 'INFINITY_DEV_MODE', true );



add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}

if(!function_exists('break_the_title'))
{
	function break_the_title($title=null, $length=6)
	{
		$title = explode(' ', (($title) ? $title : get_the_title()));

		if(count($title) > $length)
		{
		   $title = array_merge(array_slice($title, 0, $length), array('...'));
		} 

	   $title = implode(' ', $title);

	   return $title;
	}
}

if(!function_exists('sort_em_events_by_date'))
{
	function sort_em_events_by_date(&$events)
	{
		if(!is_array($events)) $events = array();

		usort($events, function($evnt_a, $evnt_b){
			//event a
			 $evnt_a_year  = intval($evnt_a['year']);
			 $evnt_a_month = intval($evnt_a['month']);
			 $evnt_a_date  = intval($evnt_a['day']);

			 // event b
			 $evnt_b_year  = intval($evnt_b['year']);
			 $evnt_b_month = intval($evnt_b['month']);
			 $evnt_b_date  = intval($evnt_b['day']);

			 if($evnt_a_year < $evnt_b_year)
			 {
			 	return -1;
			 }
			 elseif($evnt_a_year > $evnt_b_year)
			 {
			 	return 1;
			 }
			 
			 if($evnt_a_year === $evnt_b_year)
			 {
			 	 if($evnt_a_month < $evnt_b_month)
				 {
				 	return -1;
				 }
				 elseif($evnt_a_month > $evnt_b_month)
				 {
				 	return 1;
				 }

				 if($evnt_a_month === $evnt_b_month)
				 {
				 	if($evnt_a_date < $evnt_b_date)
					 {
					 	return -1;
					 }
					 elseif($evnt_a_date > $evnt_b_date)
					 {
					 	return 1;
					 }
				}
			}

			return 0;
		});

		return $events;
	}
}

if(!function_exists('ordinate_month'))
{
	function ordinate_date($num) {
	    if (!in_array(($num % 100),array(11,12,13))){
	      switch ($num % 10) {
	        // Handle 1st, 2nd, 3rd
	        case 1:  return $num.'st';
	        case 2:  return $num.'nd';
	        case 3:  return $num.'rd';
	      }
	    }
    	return $num.'th';
    }
}

if(!function_exists('check_event_date'))
{
	function check_event_date($event)
	{}
}
