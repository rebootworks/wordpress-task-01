<?php

if (!defined('ABSPATH')) {
    exit('No direct script access allowed');
}

if (!function_exists('evcc_include_folder')) {

    /**
     * Include PHP files in given folder name
     *
     * @param $folder
     */
    function evcc_include_folder($folder)
    {
        if (file_exists($folder)) {
            foreach (glob("$folder/*.php") as $filename) {
                require_once $filename;
            }
        }
    }

}