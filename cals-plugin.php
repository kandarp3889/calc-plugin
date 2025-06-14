<?php

/*
 * Plugin Name:       calc-plugin
 * Description:       Handle the calculation with this plugin.
 * Author:            Best I Coder
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */


 if(!defined('ABSPATH')) exit;

 function custom_css(){
    wp_enqueue_style('custom-style', plugin_dir_url(__FILE__) . 'assets/calc-style.css');
 }
 add_action('wp_enqueue_scripts', 'custom_css');


 require_once plugin_dir_path(__FILE__) . 'public/shortcode.php';