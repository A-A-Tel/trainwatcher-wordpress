<?php
/**
 * Train Watch
 *
 * @package           TrainWatch
 * @author            Anouar-Anthony Tel
 *
 * @wordpress-plugin
 * Plugin Name:       Train Watch
 * Description:       This plugin allows you to add train disruptions to your website from NS.
 * Version:           0.0.1
 * Requires PHP:      8.2
 * Author:            Anouar-Anthony Tel
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_menu_page( 'admin_menu', 'my_custom_admin_menu' );
