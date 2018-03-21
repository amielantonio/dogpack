<?php

defined('BASEPATH') OR exit('No direct script access allowed');


/*
 | ------------------------------------------------------------
 | Application Functions
 | ------------------------------------------------------------
 |
 | This file contains application functions that will be using
 | through out the database
 */



/**
 * Return base url
 *
 * @return string
 */
function base_url(){

    // Get config file
    $base_url = require CONFIG_PATH . '/config.php';

    $base_url = $base_url['server_host'] . $base_url['base_url'];

    $route = $base_url.'/';


    return $route;
}

/**
 * Return URI string for accessing pages
 *
 * @param string $uri
 * @return string
 */
function route( $uri = '' ){

    // Get config file
    $base_url = require CONFIG_PATH . '/config.php';

    $base_url = $base_url['server_host'] . $base_url['base_url'];

    $route = $base_url.'/' . $uri;

    return $route;

}

/**
 * Return a path for the resources in the resource folder
 *
 * @param $path
 * @return string
 */
function asset( $path ){

    // Get config file
    $base_url = require CONFIG_PATH . '/config.php';

    $base_url = $base_url['APP_BASE_URL'];

    $thisPath = "/{$base_url}/resources/{$path}";

    //Return route
    return $thisPath;

}

/**
 * Return a directory path of the specified resources
 *
 * @param $path
 * @return string
 */
function asset_dir( $path ){

    return RESOURCE_PATH . "\\{$path}";
}
