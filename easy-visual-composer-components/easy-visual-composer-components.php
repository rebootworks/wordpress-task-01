<?php

/**
 * Plugin Name: Easy Visual Composer Components
 * Description: Make
 * Version:     1.0.0
 * Author:      Reboot
 * Author URI:  https://reboot.com.tr
 * Text Domain: reboot-core
 * Domain Path: /languages
 */

if (!defined('ABSPATH')) {
    exit('No direct script access allowed');
}

if (!class_exists('EVCC')) {

    define('EVCC_VERSION', '1.0.0');

    define('EVCC_PATH', plugin_dir_path(__FILE__));
    define('EVCC_URL', plugin_dir_url(__FILE__));

    define('EVCC_NONCE_KEY', '1c1d1bdd7e6c24057ef271c2bd5e3d6c');
    define('EVCC_TEXT_DOMAIN', 'easy-visual-composer-components');

    define('EVCC_SHORTCODES_PATH', EVCC_PATH . 'shortcodes/');
    define('EVCC_SHORTCODES_URL', EVCC_URL . 'shortcodes/');

    class EVCC
    {
        function __construct()
        {
            add_action('plugins_loaded', [$this, 'plugins_loaded']);
        }

        function plugins_loaded(){
            require EVCC_PATH . 'config.php';
            require EVCC_PATH . 'bootstrap.php';
        }

        static function getVersion()
        {
            return EVCC_VERSION;
        }
    }

    new EVCC;

}