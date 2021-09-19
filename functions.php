<?php

add_action( 'wp_enqueue_scripts', 'upfront_child_enqueue_styles' );

function upfront_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

require 'psource/theme-updates/theme-update-checker.php';
$MyThemeUpdateChecker = new ThemeUpdateChecker(
	'upfront-child', 
	'https://n3rds.work//wp-update-server/?action=get_metadata&slug=upfront-child' 
);


