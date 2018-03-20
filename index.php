<?php

/*
 | kenneljr
 |
 | An Open source web application development framework written in Procedural PHP
 |
 | Copyright (c) 2018. Amiel Antonio
 |
 | @package Kenneljr
 | @author Amiel Antonio
 | @copyright Copyright (c) 2018. Amiel Antonio
 | @license http://opensource.org/licenses/MIT	MIT License
 | @since Version 1.0.0
 */



/*
 | ---------------------------------------------------
 |  APPLICATION ENTRY POINT
 | ---------------------------------------------------
 |
 | This file is the entry point of the web application
 |
 */

if( ! defined('BASEPATH')){

    // Define the system directory
    define( 'BASEPATH', dirname(__FILE__) );

    //Define the application directory of the system
    define( 'APPPATH', dirname(__FILE__) . '/app');

}
/*
 | ---------------------------------------------------
 |  APPLICATION LOADER
 | ---------------------------------------------------
 |
 | Loads the bootstrap file of the application. This is where all
 | the application codes are started
 |
 */

require APPPATH . '/loader/bootstrap.php';


/*
 | ---------------------------------------------------
 |  Pass the current URI for routing
 | ---------------------------------------------------
 */
$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

/*
 | ---------------------------------------------------
 |  Process the URI and start the routes file
 | ---------------------------------------------------
 */