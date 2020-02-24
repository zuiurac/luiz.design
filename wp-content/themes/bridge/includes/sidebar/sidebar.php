<?php

if(! function_exists('bridge_qode_register_additional_sidebars')){
    function bridge_qode_register_additional_sidebars(){
        $bridge_qode_options = bridge_qode_return_global_options();
        $centered_logo = false;
        if (isset($bridge_qode_options['center_logo_image'])){ if($bridge_qode_options['center_logo_image'] == "yes") { $centered_logo = true; }};
        if(isset($bridge_qode_options['header_bottom_appearance']) && $bridge_qode_options['header_bottom_appearance'] == "fixed_hiding"){
            $centered_logo = true;
        }

        if (function_exists('register_sidebar')) {
            register_sidebar(array(
                'name' => 'Sidebar',
                'id' => 'sidebar',
                'description' => 'Default Sidebar',
                'before_widget' => '<div id="%1$s" class="widget %2$s posts_holder">',
                'after_widget' => '</div>',
                'before_title' => '<h5>',
                'after_title' => '</h5>'
            ));

            register_sidebar(array(
                'name' => 'Sidebar Page',
                'id' => 'sidebar_page',
                'description' => 'Sidebar for Page',
                'before_widget' => '<div id="%1$s" class="widget %2$s posts_holder">',
                'after_widget' => '</div>',
                'before_title' => '<h5>',
                'after_title' => '</h5>'
            ));

            register_sidebar(array(
                'name' => 'Header Top Left',
                'id' => 'header_left',
                'description' => 'Header Top Left',
                'before_widget' => '<div class="header-widget %2$s header-left-widget">',
                'after_widget' => '</div>',
                'before_title' => '',
                'after_title' => ''
            ));

            register_sidebar(array(
                'name' => 'Header Top Right',
                'id' => 'header_right',
                'description' => 'Header Top Right',
                'before_widget' => '<div class="header-widget %2$s header-right-widget">',
                'after_widget' => '</div>',
                'before_title' => '',
                'after_title' => ''
            ));
            if($centered_logo){
                register_sidebar(array(
                    'name' => 'Header Left From Logo',
                    'id' => 'header_left_from_logo',
                    'description' => 'Header Left From Logo',
                    'before_widget' => '<div class="header-widget %2$s header-left-from-logo-widget"><div class="header-left-from-logo-widget-inner"><div class="header-left-from-logo-widget-inner2">',
                    'after_widget' => '</div></div></div>',
                    'before_title' => '',
                    'after_title' => ''
                ));
                register_sidebar(array(
                    'name' => 'Header Right From Logo',
                    'id' => 'header_right_from_logo',
                    'description' => 'Header Right From Logo',
                    'before_widget' => '<div class="header-widget %2$s header-right-from-logo-widget"><div class="header-right-from-logo-widget-inner"><div class="header-right-from-logo-widget-inner2">',
                    'after_widget' => '</div></div></div>',
                    'before_title' => '',
                    'after_title' => ''
                ));
            }
            register_sidebar(array(
                'name' => 'Header Bottom Right',
                'id' => 'header_bottom_right',
                'description' => 'Header Bottom Right (Next to the menu)',
                'before_widget' => '<div class="header_bottom_widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '',
                'after_title' => ''
            ));

            register_sidebar(array(
                'name' => 'Header Bottom Center',
                'id' => 'header_bottom_center',
                'description' => 'This widget area is used only for content of Header Bottom when header type is set to Fixed Header Top',
                'before_widget' => '<div class="header_bottom_center_widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '',
                'after_title' => ''
            ));

            register_sidebar(array(
                'name' => 'Side Area',
                'id' => 'sidearea',
                'description' => 'Side Area',
                'before_widget' => '<div id="%1$s" class="widget %2$s posts_holder">',
                'after_widget' => '</div>',
                'before_title' => '<h5>',
                'after_title' => '</h5>'
            ));

            register_sidebar(array(
                'name' => 'Fullscreen Menu Area',
                'id' => 'fullscreen_menu_area_widget',
                'description' => 'This widget area is rendered below fullscreen menu',
                'before_widget' => '<div id="%1$s" class="widget %2$s posts_holder">',
                'after_widget' => '</div>',
                'before_title' => '<h5>',
                'after_title' => '</h5>'
            ));

            register_sidebar(array(
                'name' => 'Left Menu Area',
                'id' => 'vertical_menu_area',
                'description' => 'Left Menu Area',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h5>',
                'after_title' => '</h5>'
            ));
            register_sidebar(array(
                'name' => 'Footer Column 1',
                'id' => 'footer_column_1',
                'description' => 'Footer Column 1',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h5>',
                'after_title' => '</h5>'
            ));

            register_sidebar(array(
                'name' => 'Footer Column 2',
                'id' => 'footer_column_2',
                'description' => 'Footer Column 2',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h5>',
                'after_title' => '</h5>'
            ));

            register_sidebar(array(
                'name' => 'Footer column 3',
                'id' => 'footer_column_3',
                'description' => 'Footer Column 3',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h5>',
                'after_title' => '</h5>'
            ));

            register_sidebar(array(
                'name' => 'Footer column 4',
                'id' => 'footer_column_4',
                'description' => 'Footer Column 4',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h5>',
                'after_title' => '</h5>'
            ));

            register_sidebar(array(
                'name' => 'Footer Bottom Center',
                'id' => 'footer_text',
                'description' => 'Footer Bottom Center',
                'before_widget' => '',
                'after_widget' => '',
                'before_title' => '<h5 class="footer_text_title">',
                'after_title' => '</h5>'
            ));

            register_sidebar(array(
                'name' => 'Footer Bottom Left',
                'id' => 'footer_text_left',
                'description' => 'Footer Bottom Left',
                'before_widget' => '',
                'after_widget' => '',
                'before_title' => '<h5 class="footer_text_title">',
                'after_title' => '</h5>'
            ));

            register_sidebar(array(
                'name' => 'Footer Bottom Right',
                'id' => 'footer_text_right',
                'description' => 'Footer Bottom Right',
                'before_widget' => '',
                'after_widget' => '',
                'before_title' => '<h5 class="footer_text_title">',
                'after_title' => '</h5>'
            ));

            register_sidebar(array(
                'name' => 'Header fixed right',
                'id' => 'header_fixed_right',
                'description' => 'This widget area is used only with sticky with menu on bottom menu type',
                'before_widget' => '',
                'after_widget' => '',
                'before_title' => '',
                'after_title' => ''
            ));

            register_sidebar(array(
                'name' => 'Left Side Fixed',
                'id' => 'left_side_fixed',
                'description' => 'This widget area is used to show fixed content on the left side of the screen',
                'before_widget' => '',
                'after_widget' => '',
                'before_title' => '',
                'after_title' => ''
            ));

            if(function_exists('is_woocommerce')) {

                register_sidebar(array(
                    'name' => 'WooCommerce Dropdown Widget Area',
                    'id' => 'woocommerce_dropdown',
                    'description' => 'This widget area should be used only for WooCommerce dropdown cart widget',
                    'before_widget' => '',
                    'after_widget' => '',
                    'before_title' => '',
                    'after_title' => ''
                ));

            }
        }
    }

    add_action('after_setup_theme', 'bridge_qode_register_additional_sidebars');
}

// register custom sidebars to theme
add_theme_support('BridgeQodeSidebar');
if (get_theme_support('BridgeQodeSidebar')) new BridgeQodeSidebar();

if (!function_exists('bridge_qode_is_user_made_sidebar')) {
    function bridge_qode_is_user_made_sidebar($name){

        //this have to be changed depending on theme
        if ($name == 'Sidebar') {
            return false;
        } else if ($name == 'Sidebar Page') {
            return false;
        } else if ($name == 'Header Top Left') {
            return false;
        } else if ($name == 'Header Top Right') {
            return false;
        } else if ($name == 'Header Bottom Right') {
            return false;
        } else if ($name == 'Header Right From Logo') {
            return false;
        } else if ($name == 'Header Left From Logo') {
            return false;
        } else if ($name == 'Side Area') {
            return false;
        } else if ($name == 'Left Menu Area') {
            return false;
        } else if ($name == 'Footer Column 1') {
            return false;
        } else if ($name == 'Footer Column 2') {
            return false;
        } else if ($name == 'Footer Column 3') {
            return false;
        } else if ($name == 'Footer Column 4') {
            return false;
        } else if ($name == 'Footer Bottom Center') {
            return false;
        }else if ($name == 'Footer Bottom Right') {
            return false;
        }else if ($name == 'Footer Bottom Left') {
            return false;
        } else if ($name == 'Header Fixed Right') {
            return false;
        } else if ($name == 'WooCommerce Dropdown Widget Area') {
            return false;
        } else {
            return true;
        }
    }
}