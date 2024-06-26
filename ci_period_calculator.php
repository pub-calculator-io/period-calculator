<?php
/*
Plugin Name: CI Period calculator
Plugin URI: https://www.calculator.io/period-calculator/
Description: With our free period calculator, you can find out more about your menstrual cycle and accurately predict when your next period will be.
Version: 1.0.0
Author: Period Calculator / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_period_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Period Calculator by www.calculator.io";

function display_calcio_ci_period_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Period Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_period_calculator_iframe"></iframe></div>';
}


add_shortcode( 'ci_period_calculator', 'display_calcio_ci_period_calculator' );