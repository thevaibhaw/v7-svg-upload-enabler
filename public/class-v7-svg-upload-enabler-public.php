<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://vaibhawkumarparashar.in
 * @since      1.0.0
 *
 * @package    V7_Svg_Upload_Enabler
 * @subpackage V7_Svg_Upload_Enabler/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    V7_Svg_Upload_Enabler
 * @subpackage V7_Svg_Upload_Enabler/public
 * @author     Vaibhaw Kumar <imvaibhaw@gmail.com>
 */
class V7_Svg_Upload_Enabler_Public
{

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $plugin_name       The name of the plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct($plugin_name, $version)
    {

        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    /**
     * Register the stylesheets for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_styles()
    {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in V7_Svg_Upload_Enabler_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The V7_Svg_Upload_Enabler_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/v7-svg-upload-enabler-public.css', array(), $this->version, 'all');
    }

    /**
     * Register the JavaScript for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts()
    {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in V7_Svg_Upload_Enabler_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The V7_Svg_Upload_Enabler_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/v7-svg-upload-enabler-public.js', array('jquery'), $this->version, false);
    }

    /**
     * Enable SVG uploads by adding to allowed mime types.
     *
     * @since    1.0.0
     * @param    array    $mimes    Allowed mime types.
     * @return   array
     */
    public function enable_svg_upload($mimes)
    {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }

    /**
     * Validate SVG uploads for security.
     *
     * @since    1.0.0
     * @param    array    $file    Uploaded file data.
     * @return   array
     */
    public function validate_svg_upload($file)
    {
        if (get_option('v7_svg_upload_enabled', '1') !== '1') {
            return $file;
        }

        $file_type = $file['type'];
        if ($file_type === 'image/svg+xml') {
            $file_content = file_get_contents($file['tmp_name']);

            // Check if it's a valid SVG
            if (strpos($file_content, '<svg') === false) {
                $file['error'] = __('The uploaded file is not a valid SVG.', 'v7-svg-upload-enabler');
                return $file;
            }

            // Basic security check: remove script tags
            $file_content = preg_replace('/<script[^>]*>.*?<\/script>/is', '', $file_content);

            // Save the sanitized content
            file_put_contents($file['tmp_name'], $file_content);
        }

        return $file;
    }
}
