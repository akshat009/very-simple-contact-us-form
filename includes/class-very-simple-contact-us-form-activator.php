<?php
/**
 * Fired during plugin activation
 *
 * @link       #
 * @since      1.0.0
 *
 * @package    Very_Simple_Contact_Us_Form
 * @subpackage Very_Simple_Contact_Us_Form/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Very_Simple_Contact_Us_Form
 * @subpackage Very_Simple_Contact_Us_Form/includes
 * @author     Akshat Saxena <saxena.akshat.akshat@gmail.com>
 */
class Very_Simple_Contact_Us_Form_Activator {

	/**
	 * The current version of the database schema defined in activate().
	 * Bump this when the table definition changes so maybe_upgrade() picks it up.
	 *
	 * @since 1.0.1
	 */
	const DB_VERSION = '1.0.1';

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		global $wpdb;
		$table_name = $wpdb->prefix . 'contact_us_form_entries';
		$charset_collate = $wpdb->get_charset_collate();

		$sql ="CREATE TABLE `$table_name` (
			`id` int(11) NOT NULL AUTO_INCREMENT,
			`name` varchar(255) NOT NULL,
			`email` varchar(255) NOT NULL,
			`message` tinytext NOT NULL,
			PRIMARY KEY (`id`)
		)$charset_collate";
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql );

		update_option( 'very_simple_contact_us_form_db_version', self::DB_VERSION );
	}

	/**
	 * Bring an existing install's database schema up to date.
	 *
	 * Hooked on admin_init rather than activation, so sites that update the
	 * plugin files still get schema changes applied without needing to
	 * deactivate and reactivate. Re-runs the same dbDelta() definition used
	 * on activation, which is safe to execute more than once.
	 *
	 * @since 1.0.1
	 */
	public static function maybe_upgrade() {
		$installed_version = get_option( 'very_simple_contact_us_form_db_version', '0' );

		if ( version_compare( $installed_version, self::DB_VERSION, '<' ) ) {
			self::activate();
		}
	}

}
