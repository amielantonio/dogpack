<?php

defined('BASEPATH') OR exit('No direct script access allowed');

include_once SYS_PATH . '/Routing/RouteFormatter.php';
include_once SYS_PATH . '/Routing/RouteRegistrar.php';
include_once SYS_PATH . '/Routing/RouteValidator.php';


/**
 * Check if the request URI matches the registered route in the route table.
 */
function _route_matches( $uri ){

    $sanitized_uri = _sanitize_uri( $uri );
    $route_collection = _route_collection();

    if( ! _route_validate( $sanitized_uri, $route_collection ) ){

        return false;

    }

    return true;
}


function _run_routing(){

}