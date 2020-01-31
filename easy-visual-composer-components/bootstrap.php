<?php

if (!defined('ABSPATH')) {
    exit('No direct script access allowed');
}


/**
 * Include Helper
 */

require EVCC_CORE_PATH . 'functions/evcc_include_folder.php';


/**
 * Include functions
 */
reboot_include_folder(EVCC_CORE_PATH . 'functions');


/**
 * Include hooks and models
 */
reboot_include_folder(EVCC_CORE_PATH . 'classes');
