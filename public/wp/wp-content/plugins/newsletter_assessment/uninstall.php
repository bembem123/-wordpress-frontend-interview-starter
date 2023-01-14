<?php
/**
 * Trigger this file on plugin install
 * 
 * @package Vestahomes Post Slider
 */
if(!defined('WP_UNINSTALL_PLUGIN')){
    die;
}
$post = get_post(array('post_type' => 'PostSlider', 'numberposts'=> -1));
foreach($post as $data){
    wp_delete_post($data->ID,true);
}