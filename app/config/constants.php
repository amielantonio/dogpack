<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 | ---------------------------------------------------
 |
 | ---------------------------------------------------
 |
 |
 |
 |
 */

/*
 | ---------------------------------------------------
 |  Define Config Path
 | ---------------------------------------------------
 |
 | The Configuration directory that contains all the web applications config
 */
defined( 'CONFIGPATH' ) OR define( 'CONFIGPATH', APPPATH . '/config' );


/*
 | ---------------------------------------------------
 |  Define Core Path
 | ---------------------------------------------------
 |
 | Contains all core files that is responsible for the overall functionality
 | of the web application.
 */

defined( 'COREPATH' ) OR define( 'COREPATH', APPPATH . '/core');

/*
 | ---------------------------------------------------
 |  Define Database Path
 | ---------------------------------------------------
 |
 | The Database directory that contains all the database queries and
 | database connection and engine.
 */

defined( 'DBPATH') OR define( 'DBPATH', APPPATH . '/database');

/*
 | ---------------------------------------------------
 |  Define Services Path
 | ---------------------------------------------------
 |
 | The directory that contains all the web application's service provider. The files inside this
 | helps extend the functionality of the web application
 |
 */

defined( 'SERVICESPATH') OR define( 'SERVICESPATH', APPPATH . '/services');

/*
 | ---------------------------------------------------
 |  Define Resource Path
 | ---------------------------------------------------
 |
 | The resources directory contains all the stylesheet and scripts that
 | the web application is using.
 |
 */
defined( 'RESOURCEPATH' ) OR define( 'RESOURCEPATH', BASEPATH . '/resources');

/*
 | ---------------------------------------------------
 |  Define View Path
 | ---------------------------------------------------
 |
 | the directory for all the views used by the web application
 */
defined('VIEWPATH' ) OR define( 'VIEWPATH', BASEPATH . '/public/views');



/*
 | ---------------------------------------------------
 |  Define Controller Path
 | ---------------------------------------------------
 |
 |
 |
 |
 */
defined( 'CONTROLLERPATH' ) OR define( 'CONTROLLERPATH', BASEPATH . '/controllers');


/*
 | ---------------------------------------------------
 |  Define Routes path
 | ---------------------------------------------------
 |
 |
 |
 |
 */

defined( 'ROUTESPATH') OR define( 'ROUTESPATH', BASEPATH . '/web');