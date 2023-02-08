<?php

/**
 * Fired during plugin activation
 *
 * @link       https://http://TestLoic.com
 * @since      1.0.0
 *
 * @package    TestLoic
 * @subpackage TestLoic/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    TestLoic
 * @subpackage TestLoic/includes
 * @author     Loic Ernest <loicernest444@gmail.com>
 */
class TestLoic_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		//update_option("rtcl_misc_settings",'a:11:{s:18:"image_size_gallery";a:3:{s:5:"width";i:924;s:6:"height";i:462;s:4:"crop";s:3:"yes";}s:28:"image_size_gallery_thumbnail";a:3:{s:5:"width";i:150;s:6:"height";i:105;s:4:"crop";s:3:"yes";}s:20:"image_size_thumbnail";a:3:{s:5:"width";i:320;s:6:"height";i:240;s:4:"crop";s:3:"yes";}s:18:"image_allowed_type";a:3:{i:0;s:3:"mp4";i:1;s:3:"jpg";i:2;s:4:"jpeg";}s:20:"image_allowed_memory";i:2;s:14:"image_edit_cap";s:3:"yes";s:15:"social_services";a:2:{i:0;s:8:"facebook";i:1;s:7:"twitter";}s:12:"social_pages";a:1:{i:0;s:7:"listing";}s:8:"map_type";s:3:"osm";s:14:"map_zoom_level";i:10;s:10:"map_center";a:3:{s:7:"address";s:0:"";s:3:"lat";i:0;s:3:"lng";i:0;}}');
		//$devise_table_name = $wpdb->prefix . 'devise_table';
		//$info1 = $wpdb->get_results("SELECT * FROM $devise_table_name");


		$sets = get_option( 'rtcl_misc_settings' );
		$sets['image_allowed_type'] = array('png', 'jpg', 'jpeg','mp4', 'mp3', 'avi');
		update_option('rtcl_misc_settings', $sets);
	}

}
