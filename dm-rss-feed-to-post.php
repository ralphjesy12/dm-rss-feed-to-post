<?php if(!defined('ABSPATH')) die('Fatal Error');
/*
Plugin Name: Divest Media RSS Feed to Post
Plugin URI: http://divestmedia.com
Description: Divestmedia plugin for importing RSS Feeds and converting it to WP Posts
Author: ralphjesy@gmail.com
Version: 1.0
Author URI: http://github.com/ralphjesy12
*/
define( 'DM_RSS_VERSION', '1.0' );
define( 'DM_RSS_MIN_WP_VERSION', '4.4' );
define( 'DM_RSS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'DM_RSS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'DM_RSS_DEBUG' , true );

require_once DM_RSS_PLUGIN_DIR . '/vendor/autoload.php';
require_once( DM_RSS_PLUGIN_DIR . 'lib/class-dm-rss-feed-to-post-grabber.php');
require_once( DM_RSS_PLUGIN_DIR . 'lib/class-dm-rss-feed-to-post.php');

if(class_exists('DMRSS'))
{
  register_activation_hook(__FILE__, array('DMRSS', 'activate'));
  register_deactivation_hook(__FILE__, array('DMRSS', 'deactivate'));
  $DMRSS = new DMRSS();
}
