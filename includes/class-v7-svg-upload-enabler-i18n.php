<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://vaibhawkumarparashar.in
 * @since      1.0.0
 *
 * @package    V7_Svg_Upload_Enabler
 * @subpackage V7_Svg_Upload_Enabler/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    V7_Svg_Upload_Enabler
 * @subpackage V7_Svg_Upload_Enabler/includes
 * @author     Vaibhaw Kumar <imvaibhaw@gmail.com>
 */
class V7_Svg_Upload_Enabler_i18n
{


    /**
     * Load the plugin text domain for translation.
     *
     * @since    1.0.0
     */
    public function load_plugin_textdomain()
    {

        load_plugin_textdomain(
            'v7-svg-upload-enabler',
            false,
            dirname(dirname(plugin_basename(__FILE__))) . '/languages/'
        );
    }
}
