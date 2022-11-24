<?php

/**
 * Plugin Name:       SM Scrollbar
 * Plugin URI:        https://github.com/msulaimanmisri/sm-scrollbar
 * Description:       A simple WordPress plugin that turns your windows scrollbar into look-like MacOS scrollbar
 * Version:           1.1.2
 * Author:            Sulaiman Misri
 * Author URI:        https://github.com/msulaimanmisri
 * Text Domain:       sm-scrollbar
 * Domain Path:       /languages
 */

if (!defined('ABSPATH')) {
    exit;
}

function smScrollbar()
{
    wp_enqueue_style('sm-custom-style', plugins_url('/style.min.css', __FILE__));
    wp_enqueue_script('sm-custom-script', plugins_url('/script.js', __FILE__), ['jquery'], '1.0', true);
}

add_action('wp_enqueue_scripts', 'smScrollbar', 999);