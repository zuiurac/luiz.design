<?php

if(!function_exists('bridge_core_add_video_box_shortcodes')) {
	function bridge_core_add_video_box_shortcodes($shortcodes_class_name) {
		$shortcodes = array(
			'Bridge\Shortcodes\VideoBox\VideoBox'
		);
		
		$shortcodes_class_name = array_merge($shortcodes_class_name, $shortcodes);
		
		return $shortcodes_class_name;
	}
	
	add_filter('bridge_core_filter_add_vc_shortcode', 'bridge_core_add_video_box_shortcodes');
}