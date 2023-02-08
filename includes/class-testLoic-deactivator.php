<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://http://TestLoic.com
 * @since      1.0.0
 *
 * @package    TestLoic
 * @subpackage TestLoic/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    TestLoic
 * @subpackage TestLoic/includes
 * @author     Loic Ernest <loicernest444@gmail.com>
 */
class TestLoic_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		$sets = get_option( 'rtcl_misc_settings' );
		$sets['image_allowed_type'] = array('png', 'jpg', 'jpeg');
		update_option('rtcl_misc_settings', $sets);
	}

}
