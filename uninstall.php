<?php
/**
* Trigger this file on plugin uninstall
* 
* @package Syntaxified
*/
if(!defined('WP_UNINSTALL_PLUGIN')){
    die;
}

//Clear database meron testimonials
$testimonials = get_post( array('post_type' => 'testimonials', 'numberposts' => -1));

foreach($testimonials as $testi){

    wp_delete_post($testi->ID, true);
}

// global $wpdb;
// $wpdb->query("DELETE FROM wp_posts WHERE post_type = 'testimonials'");
// $wpdb->query("DELETE FROM wp_postmeta WHERE post_id NOT IN(SELECT if FROM wp_posts)");
// $wpdb->query("DELETE FROM wp_term_relationships WHERE object_id NOT IN(SELECT if FROM wp_posts)");
