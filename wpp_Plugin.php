<?php
/**
* @package syntaxified
* @version 1.0.0
*/
/*
Plugin Name: Syntaxfied Testomonials
Plugin URI: https://www.syntaxified.com/
Description: WP Custom Plugins
Author: Fritz Darry
Author URI: https://www.syntaxified.com/
Version: 1.0.0
License: GPLv2 or later
Text Domain: wppx-extend
*/
/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

defined('ABSPATH') or die('You are not in wordpress directory.');

class wppx_extend
{

     function __construct(){
         add_action('init', array($this, 'custom_post_type'));
     }

     function register(){
         add_action('admin_enqueue_scripts', array($this, 'enqueue'));
     }

     function activate(){

        $this->custom_post_type();
        flush_rewrite_rules();

     }

     function deactive(){
        flush_rewrite_rules();
     }

    

     function custom_post_type(){
        
        register_post_type('Testimonials', ['public' => true, 'labels' => array('name' => __('Testimonials'), 'singular_name' => __('Testimonial'), 'add_new_item' => __('Add new Testimonial'), 'add_new' => __('Add Testimonial'))]);

     }

     function enqueue(){
         wp_enqueue_style('wpp-extend-css', plugins_url('/assets/custom.css',__FILE__));
         wp_enqueue_script('wpp-extend-js', plugins_url('/assets/custom.js',__FILE__));
     }

}

if(class_exists('wppx_extend')){

    $wpxDev = new wppx_extend();
    $wpxDev->register();

    //activate
    register_activation_hook(__FILE__, array($wpxDev, 'activate'));
    //dactivate
    register_deactivation_hook(__FILE__, array($wpxDev, 'deactivate'));
    //uninstall
    //register_uninstall_hook(__FILE__, array($wpxDev, 'uninstall'));
}
