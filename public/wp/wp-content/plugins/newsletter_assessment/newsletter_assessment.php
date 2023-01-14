<?php
/** 
 * @package Newsletter Assessment
  */
  /*
  Plugin Name: Newsletter Assessment
  Plugin URI: https://github.com/prunderground-dev/wordpress-frontend-interview-starter
  Description: Create newsletter opt-in way more visible to the users.
  Version: 1.0.0
  Author: Denver Aleta
  Text Domain: Denver Aleta Plugin
  */
 
  if(!defined('ABSPATH')){
    die;
}
  class NewsletterAssessment{

    
    function __construct()
    {
        //
    }
  
    function activate(){
        flush_rewrite_rules();
        $this->create_plugin_database_table();
    }

    function deactivate(){
        flush_rewrite_rules();
    }

    function add_view()
    {
          require_once "template-parts/content-form.php";
    }

    function register_my_custom_menu_page(){
        add_menu_page( 'my newsletter', 'My Newsletter', 'manage_options', 'my-newsletter', array($this, 'add_view'), plugins_url( 'cp-display/images/icon.png' ), 66 );
    }

    function display_icon_menu_bar()
    {
        add_action( 'admin_menu', array($this, 'register_my_custom_menu_page'));
    }

    function registerScript(){
        add_action('wp_enqueue_scripts',array($this,'news_scripts'));
        add_action('wp_head', array($this, 'display_newsletter'));
    }

    function news_scripts(){
        wp_enqueue_script('newsletter_js', plugins_url('/js/newsletter.js',__FILE__ ),array('jquery'),true);
        wp_enqueue_style('newsletter_css', plugins_url('/css/newsletter.css',__FILE__ ),array(),false);
    }
    

    function create_plugin_database_table() {
        global $wpdb;
        $table_name = $wpdb->prefix . 'newsletter_assessment';
        $sql = "CREATE TABLE $table_name (
            id mediumint(9) unsigned NULL AUTO_INCREMENT,
            name varchar(100) NULL,
            email varchar(100) NULL,
            date varchar(100) DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY  (id)
            );";
    
        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        dbDelta( $sql );
    }

    function shortcode(){
        add_shortcode( 'd_newsletter', array($this,'display_newsletter') );
    }

    function display_newsletter(){
        include_once('template-parts/newsletter-form.php');       
    }


  }
  if(class_exists('NewsletterAssessment')){
    $newletter = new NewsletterAssessment();
    $newletter->display_icon_menu_bar();                                                            
    $newletter->registerScript();
    $newletter->shortcode();
  }
  
  register_activation_hook(__FILE__, array($newletter, 'activate'));
  register_deactivation_hook(__FILE__, array($newletter, 'deactivate'));
  register_activation_hook( __FILE__, array( $newletter, 'create_plugin_database_table' ) );