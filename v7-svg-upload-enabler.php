<?php

/**
 * Plugin Name: V7 SVG Upload Enabler
 * Plugin URI: https://vaibhawkumarparashar.in
 * Description: A plugin to enable SVG image uploads in WordPress with security validation.
 * Version: 1.0.0
 * Author: Vaibhaw Kumar
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: v7-svg-upload-enabler
 */

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

/**
 * Currently plugin version.
 */
define('V7_SVG_UPLOAD_ENABLER_VERSION', '1.0.0');

/**
 * The code that runs during plugin activation.
 */
function activate_v7_svg_upload_enabler()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-v7-svg-upload-enabler-activator.php';
    V7_Svg_Upload_Enabler_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 */
function deactivate_v7_svg_upload_enabler()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-v7-svg-upload-enabler-activator.php';
    V7_Svg_Upload_Enabler_Activator::deactivate();
}

register_activation_hook(__FILE__, 'activate_v7_svg_upload_enabler');
register_deactivation_hook(__FILE__, 'deactivate_v7_svg_upload_enabler');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-v7-svg-upload-enabler.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_v7_svg_upload_enabler()
{

    $plugin = new V7_Svg_Upload_Enabler();
    $plugin->run();
}
run_v7_svg_upload_enabler();
