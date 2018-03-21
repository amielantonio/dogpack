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

require SYS_PATH . '/framework/functions.php';

/*
 | -------------------------------------------------------------------
 |  Load the Services
 | -------------------------------------------------------------------
 |
 | Next, get all services that are used by the framework.
 |
 |
 */

require SERVICES_PATH . '/Auth.php';
require SERVICES_PATH . '/Routes.php';
require SERVICES_PATH . '/Migration.php';


/*
 | -------------------------------------------------------------------
 |  Load the Autoload
 | -------------------------------------------------------------------
 |
 | Lastly, get the packages and vendor that are placed in the autoload
 | file. Start each of the package using the autoload function in
 | functions.php file.
 */



