<?php

if (!defined('ABSPATH')) {
    exit('No direct script access allowed');
}


/**
 * Include Helper
 */

require EVCC_PATH . 'functions/evcc_include_folder.php';


/**
 * Include functions
 */
evcc_include_folder(EVCC_PATH . 'functions');


/**
 * Include hooks and models
 */
evcc_include_folder(EVCC_PATH . 'classes');
