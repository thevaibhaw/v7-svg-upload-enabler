<?php

/**
 * The file that contains the core plugin class
 *
 * @since      1.0.0
 *
 * @package    V7_Svg_Upload_Enabler
 * @subpackage V7_Svg_Upload_Enabler/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    V7_Svg_Upload_Enabler
 * @subpackage V7_Svg_Upload_Enabler/includes
 * @author     Vaibhaw Kumar <imvaibhaw@gmail.com>
 */
class V7_Svg_Upload_Enabler
{

    /**
     * The loader that's responsible for maintaining and registering all hooks that power
     * the plugin.
     *
     * @since    1.0.0
     * @access   protected
     * @var      V7_Svg_Upload_Enabler_Loader    $loader    Maintains and registers all hooks for the plugin.
     */
    protected $loader;

    /**
     * The unique identifier of this plugin.
     *
     * @since    1.0.0
     * @access   protected
     * @var      string    $plugin_name    The string used to uniquely identify this plugin.
     */
    protected $plugin_name;

    /**
     * The current version of the plugin.
     *
     * @since    1.0.0
     * @access   protected
     * @var      string    $version    The current version of the plugin.
     */
    protected $version;

    /**
     * Define the core functionality of the plugin.
     *
     * Set the plugin name and the plugin version that can be used throughout the plugin.
     * Load the dependencies, define the locale, and set the hooks for the admin area and
     * the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function __construct()
    {
        if (defined('V7_SVG_UPLOAD_ENABLER_VERSION')) {
            $this->version = V7_SVG_UPLOAD_ENABLER_VERSION;
        } else {
            $this->version = '1.0.0';
        }
        $this->plugin_name = 'v7-svg-upload-enabler';

        $this->load_dependencies();
        $this->set_locale();
        $this->define_public_hooks();
    }

    /**
     * Load the required dependencies for this plugin.
     *
     * Include the following files that make up the plugin:
     *
     * - V7_Svg_Upload_Enabler_Loader. Orchestrates the hooks of the plugin.
     * - V7_Svg_Upload_Enabler_i18n. Defines internationalization functionality.
     * - V7_Svg_Upload_Enabler_Admin. Defines all hooks for the admin area.
     * - V7_Svg_Upload_Enabler_Public. Defines all hooks for the public side of the site.
     *
     * Create an instance of the loader which will be used to register the hooks
     * with WordPress.
     *
     * @since    1.0.0
     * @access   private
     */
    private function load_dependencies()
    {

        /**
         * The class responsible for orchestrating the actions and filters of the
         * core plugin.
         */
        require_once plugin_dir_path(dirname(__FILE__)) . 'includes/class-v7-svg-upload-enabler-loader.php';

        /**
         * The class responsible for defining internationalization functionality
         * of the plugin.
         */
        require_once plugin_dir_path(dirname(__FILE__)) . 'includes/class-v7-svg-upload-enabler-i18n.php';

        /**
         * The class responsible for defining all actions that occur in the public-facing
         * side of the site.
         */
        require_once plugin_dir_path(dirname(__FILE__)) . 'public/class-v7-svg-upload-enabler-public.php';

        $this->loader = new V7_Svg_Upload_Enabler_Loader();
    }

    /**
     * Define the locale for this plugin for internationalization.
     *
     * Uses the V7_Svg_Upload_Enabler_i18n class in order to set the domain and to register the hook
     * with WordPress.
     *
     * @since    1.0.0
     * @access   private
     */
    private function set_locale()
    {

        $plugin_i18n = new V7_Svg_Upload_Enabler_i18n();

        $this->loader->add_action('plugins_loaded', $plugin_i18n, 'load_plugin_textdomain');
    }

    /**
     * Register all of the hooks related to the public-facing functionality
     * of the plugin.
     *
     * @since    1.0.0
     * @access   private
     */
    private function define_public_hooks()
    {

        $plugin_public = new V7_Svg_Upload_Enabler_Public($this->get_plugin_name(), $this->get_version());

        $this->loader->add_action('wp_enqueue_scripts', $plugin_public, 'enqueue_styles');
        $this->loader->add_action('wp_enqueue_scripts', $plugin_public, 'enqueue_scripts');

        // Enable SVG uploads
        $this->loader->add_filter('upload_mimes', $plugin_public, 'enable_svg_upload', 10, 1);

        // Validate SVG uploads
        $this->loader->add_filter('wp_handle_upload_prefilter', $plugin_public, 'validate_svg_upload', 10, 1);
    }

    /**
     * Run the loader to execute all of the hooks with WordPress.
     *
     * @since    1.0.0
     */
    public function run()
    {
        $this->loader->run();
    }

    /**
     * The name of the plugin used to uniquely identify it within the context of
     * WordPress and to define internationalization functionality.
     *
     * @since     1.0.0
     * @return    string    The name of the plugin.
     */
    public function get_plugin_name()
    {
        return $this->plugin_name;
    }

    /**
     * The reference to the class that orchestrates the hooks with the plugin.
     *
     * @since     1.0.0
     * @return    V7_Svg_Upload_Enabler_Loader    Orchestrates the hooks of the plugin.
     */
    public function get_loader()
    {
        return $this->loader;
    }

    /**
     * Retrieve the version number of the plugin.
     *
     * @since     1.0.0
     * @return    string    The version number of the plugin.
     */
    public function get_version()
    {
        return $this->version;
    }
}
