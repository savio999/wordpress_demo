<?php
/*
 * Plugin Name: Recipe
 * description: A simple plugin that allows users to create aand rate those recipes.
 * Version: 1.0
 * Author: Kodework
 * Author URI: http://kodework.com 
 * Text Domain: recipe
 */

if( ! function_exists('add_action')) {
   die('Hi there I m just a plugin, not much can I do when called directly'); 
}

//setup

//includes
include 'includes/activate.php';
include 'includes/init.php';
include 'includes/admin/admin_init.php';

//hooks
register_activation_hook(__FILE__, 'r_register_hook');

add_action('init','recipe_init');

add_action('admin_init','recipe_admin_init');
//shortcodes


