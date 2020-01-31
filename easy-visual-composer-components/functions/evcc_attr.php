<?php if (!defined('ABSPATH')) exit('No direct script access allowed');

if (!function_exists('evcc_attr')) {

    function evcc_attr($key, $value = '')
    {
        if(empty($key)) {
            return '';
        }

        if(empty($value)) {
            if($key != 'id') {
                return sprintf(' %s', $key);
            }
        } else {
            return sprintf(' %s="%s"', $key, $value);
        }

        return '';
    }

}