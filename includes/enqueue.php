<?php
// CSS Link
wp_register_style('terra_style_custome', get_theme_file_uri('assets/css/style_custome.css'));
wp_enqueue_style('terra_style_custome');

wp_register_style('terra_style', get_theme_file_uri('assets/css/style.css'));
wp_enqueue_style('terra_style');

wp_register_style('terra_style_responsive', get_theme_file_uri('assets/css/responsive.css'));
wp_enqueue_style('terra_style_responsive');

wp_register_style('terra_style_animation', get_theme_file_uri('assets/vendors/animation/animate.css'));
wp_enqueue_style('terra_style_animation');

wp_register_style('terra_style_bootstrap', get_theme_file_uri('assets/vendors/bootstrap/css/bootstrap.min.css'));
wp_enqueue_style('terra_style_bootstrap');

wp_register_style('terra_style_all_min', get_theme_file_uri('assets/vendors/fontawesome/css/all.min.css'));
wp_enqueue_style('terra_style_all_min');

wp_register_style('terra_style_icons', get_theme_file_uri('assets/vendors/phosphor/css/icons.css'));
wp_enqueue_style('terra_style_icons');


wp_register_style('terra_style_icons', get_theme_file_uri('assets/vendors/phosphor/css/icons.css'));
wp_enqueue_style('terra_style_icons');


// JS Link

wp_register_script('terra_script_custome', get_theme_file_uri('assets/js/custom.css'));
wp_enqueue_script('terra_script_custome');

wp_register_script('terra_script_gmaps', get_theme_file_uri('assets/js/gmaps.min.css'));
wp_enqueue_script('terra_script_gmaps');

wp_register_script('terra_script_bootstrap', get_theme_file_uri('assets/vendors/bootstrap/js/bootstrap.min.css'));
wp_enqueue_script('terra_script_bootstrap');

?>