<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 | -------------------------------------------------------------------
 |  Routing Table
 | -------------------------------------------------------------------
 |
 | This is where you register the routes of your web application. The
 | Routes are loaded by the RoutesServices to start the web application.
 |
 | Routing keys.
 |
 | [view]       - returns a view from the view folder.
 | [controller] - fetch the controller that is responsible for the route
 | [action]     - define what action does the controller will do when a
 |                route started. if no action has been defined the
 |                controller automatically use the <index()> function.
 |                The <resource> key automatically registers the resource
 |                routes.
 | [middleware] - An intermediary security that serves as a guard between
 |                a route and a controller.
 | [echo]       - returns a string response for the user
 |
 | Now start creating your application!
 |
 */


$route['/'] = [ 'view' => 'welcome' ];

/*
 | -------------------------------------------------------------------
 |  Return the Route instance
 | -------------------------------------------------------------------
 |
 | Note: Do not delete this line. This sends the information of the
 | route to the framework.
 |
 */

return $route;