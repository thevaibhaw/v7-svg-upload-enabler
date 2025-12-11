<?php

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    V7_Svg_Upload_Enabler
 * @subpackage V7_Svg_Upload_Enabler/includes
 * @author     Vaibhaw Kumar <imvaibhaw@gmail.com>
 */
class V7_Svg_Upload_Enabler_Activator
{

    /**
     * Short Description. (use period)
     *
     * Long Description.
     *
     * @since    1.0.0
     */
    public static function activate()
    {
        // No settings needed, SVG uploads enabled by default
    }

    /**
     * Short Description. (use period)
     *
     * Long Description.
     *
     * @since    1.0.0
     */
    public static function deactivate()
    {
        // Clean up options if needed
    }
}
