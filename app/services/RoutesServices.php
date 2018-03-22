<?php

defined('BASEPATH') OR exit('No direct script access allowed');


/*
 | -------------------------------------------------------------------
 |  MAIN ROUTES FILE
 | -------------------------------------------------------------------
 |
 | This file is the main routes file, where all standard routing
 | functions are being processed. Please take not that this is a custom
 | routing of kenneljr and we use an Array-based payload instead of the
 | usual routing method like laravel's or any other PHP frameworks
 | out there
 |
 */

include_once SYS_PATH . '/Routing/Router.php';

/**
 * Main routing function that boots the framework to start the routing.
 * It is used in the index.php to tell the framework that the routing has
 * started. The URI that is being passed thru is the current uri of the
 * web application
 *
 * @param $uri
 * @throws exception
 */
function route_boot( $uri ){

    /*
     * Match the given $uri to a specific route
     */
    if( ! _route_matches( $uri ) ){

        throw new exception( 'Routing Error: Route not registered.' );

    }

    _run_routing();
}