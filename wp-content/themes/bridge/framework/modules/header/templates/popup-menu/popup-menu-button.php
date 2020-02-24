<?php if($enable_popup_menu == "yes"){ ?>
	<a href="javascript:void(0)" class="popup_menu <?php echo esc_attr( $header_button_size ).' '. esc_attr( $popup_menu_animation_style ); ?>">
		<?php
		switch(bridge_qode_options()->getOptionValue('font_icon_pack_icon_popup')){
			case 'font_awesome':
				echo '<i class="fa fa-bars"></i>';
				break;
			case 'font_elegant':
				echo '<span class="icon_menu"></span>';
				break;
			default:
				echo '<span class="popup_menu_inner"><i class="line">&nbsp;</i></span>';
				break;
		}
		?>
	</a>
<?php } ?>