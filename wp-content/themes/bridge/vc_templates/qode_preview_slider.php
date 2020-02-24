<?php

$html = "";

$html .=
	'<div class="qode-preview-slider">'.
		'<div class="qode-presl-main-slider">'.
			'<ul class="slides">'.
				do_shortcode($content).
			'</ul>'.
		'</div>'.
		'<div class="qode-presl-small-slider-holder">'.
			'<div class="qode-presl-small-slider">'.
				'<ul class="slides"></ul>'.
			'</div>'.
			'<img itemprop="image" class="qode-presl-phone" src="'.get_template_directory_uri() . '/img/bridge-phone-hollow.png" alt="'. esc_html__('Phone', 'bridge') .'">'.
		'</div>'.
	'</div>'.
'';

echo bridge_qode_get_module_part( $html );

