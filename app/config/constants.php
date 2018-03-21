<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 | -------------------------------------------------------------------
 |  APPLICATION PATH
 | -------------------------------------------------------------------
 |
 | The application path constants that are used by the application for
 | accessing specific files for the specific folder.
 |
 */

defined( 'CONFIG_PATH' )     OR define( 'CONFIG_PATH', APPPATH . '/config' );
defined( 'DB_PATH' )         OR define( 'DB_PATH', APPPATH . '/database');
defined( 'SYS_PATH' )       OR define( 'SYS_PATH', APPPATH . '/system');
defined( 'SERVICES_PATH' )   OR define( 'SERVICES_PATH', APPPATH . '/services');
defined( 'RESOURCE_PATH' )   OR define( 'RESOURCE_PATH', BASEPATH . '/resources');
defined( 'VIEW_PATH' )       OR define( 'VIEW_PATH', BASEPATH . '/public/views');
defined( 'CONTROLLER_PATH' ) OR define( 'CONTROLLER_PATH', BASEPATH . '/controllers');
defined( 'ROUTES_PATH')      OR define( 'ROUTES_PATH', BASEPATH . '/route');

/*
 | --------------------------------------------------------------------------
 |  FILE DIRECTORY MODES
 | --------------------------------------------------------------------------
 |
 |
 |
 */
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

