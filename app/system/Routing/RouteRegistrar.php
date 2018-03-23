<?php

defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * Returns the collection of route list including its necessary
 * information such as the resource URI, controller path, function call,
 * and HTTP request
 *
 * @return array
 */
function _route_collection(){

    $collection = [];


    return $collection;

}

/**
 * Return the registered routes in the route/routes.php file
 *
 * @return array
 */
function _get_registered_route(){

    $registered_routes = require ROUTES_PATH . '/routes.php';


    return $registered_routes;

}

/**
 * Create a routing table
 *
 * @return array
 */
function _create_routing_table(){

    //Pull-in the registered routes in the routes file.
    $routes = _get_registered_route();

    //Process the routing table by passing in the registered routes
    $routing_table = _process_routing_table( $routes );

    return $routing_table;
}


function _process_routing_table( $routes ){

    $resources = [
        'index', 'store', 'create', 'destroy', 'show', 'update', 'edit'
    ];
    $new_routes = [];


    //Loops all the $routes to add new keys and values
    foreach( $routes as $key => $value ){


        //Adds the parameters to a base URI path.
        if( _read_then_add_params( $key ) <> null || _read_then_add_params( $key ) <> false ){

            $new_routes[$key]['params'] = _read_then_add_params( $key );

        }


        //Add resource routes to the URI if applicable
        if( array_key_exists('action', $value) ){

            if( $value['action'] == 'resource' ){

                foreach( $resources as $resource ){

                    switch( $value[ 'action' ] ){

                        case 'index'  :

                            $new_routes[ $key ][ 'action' ] = 'index';
                            break;

                        case 'create' :

                            $new_routes[ $key .'/create' ] = [

                                'action' => $resource,
                                'request' => $value['resource']

                            ];
                            break;

                        case 'store' :

                            $new_routes[ $key .'/store' ] = [

                                'action' => $resource,
                                'request' => $value['resource']

                            ];
                            break;

                        case 'destroy' :

                            $new_routes[ $key .'/{resource}/destroy' ] = [

                                'action' => $resource,
                                'params' => _read_then_add_params( $key.'/{resource}' ),
                                'request' => $value['resource']

                            ];
                            break;

                        case 'show' :

                            $new_routes[ $key .'/{resource}' ] = [

                                'action' => $resource,
                                'request' => $value['resource']

                            ];
                            break;

                        case 'update' :

                            $new_routes[ $key .'/{resource}/update' ] = [

                                'action' => $resource,
                                'request' => $value['resource']

                            ];
                            break;

                        case 'edit' :

                            $new_routes[ $key .'/{resource}/edit' ] = [

                                'action' => $resource,
                                'request' => $value['resource']

                            ];
                            break;


                    }//End Switch

                }//End foreach

            }else{



            }

        }



    }

    return $new_routes;

}

/**
 * Read the URI if it there is a parameter
 *
 * @param $uri
 * @return array|bool
 */
function _read_then_add_params( $uri ){


    if( ! preg_match_all( '/\{.*?\}/', $uri ) ){
        return false;
    }

    $params = [];

    preg_match_all( '/\{.*?\}/', $uri, $matches );

    foreach( $matches as $key => $match){
        foreach($match as $value){

            $params[] =  str_replace( ['{','}'], '', $value );

        }
    }

    return $params;

}