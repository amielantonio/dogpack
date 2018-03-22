<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 | -------------------------------------------------------------------
 |  Load the core configuration files
 | -------------------------------------------------------------------
 |
 | The first thing to do is to load the configuration files of the
 | web application.
 |
 */

require APPPATH . '/config/config.php';
require APPPATH . '/config/constants.php';

/*
 | -------------------------------------------------------------------
 |  Start the Application functions
 | -------------------------------------------------------------------
 |
 | Second, we will load the functions.php file. This file contains
 | the important and most common functionality that is used by both
 | the framework and the application.
 |
 */

require SYS_PATH . '/Framework/Functions.php';

/*
 | -------------------------------------------------------------------
 |  Load the Default Services
 | -------------------------------------------------------------------
 |
 | Next, Load all the default services that the framework is using to
 | help create start the web application.
 |
 */

require SERVICES_PATH . '/AuthServices.php';
require SERVICES_PATH . '/RoutesServices.php';
require SERVICES_PATH . '/MigrationServices.php';


/*
 | -------------------------------------------------------------------
 |  Load the Autoload
 | -------------------------------------------------------------------
 |
 | Lastly, get the packages and vendor that are placed in the autoload
 | file. Start each of the package using the autoload function in
 | functions.php file.
 */



