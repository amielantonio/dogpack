<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/*
 | ---------------------------------------------------
 |  DATABASE CONFIGURATION FILE
 | ---------------------------------------------------
 |
 | This file contains the settings to access the application database
 |
 | To get started simply add the required information below currently
 | the application only supports MySQL database
 */


return [

    /*
     | ---------------------------------------------------
     |  Default Database Connection
     | ---------------------------------------------------
     |
     |
     |
     |
     |
     */
    'default_driver' => 'mysql',


    /*
     | ---------------------------------------------------
     |  Database Connections
     | ---------------------------------------------------
     |
     |
     |
     |
     |
     */
    'connections' => [

        'mysql' => [

            'hostname'      => 'localhost',
            'database'      => '',
            'username'      => 'root',
            'password'      => '',
            'prefix'        => '',
            'db_debug'      => '',
            'db_driver'     => 'mysql',
            'charset'       => 'utf8mb4',
            'collation'     => 'utf8mb4_unicode_ci',
            'strict'        => true,
            'engine'        => null,

        ],

        'sqlite' => [
            'db_driver'     => 'sqlite',
            'database_path' => '',
            'prefix'        => ''
        ],

        'postgresql' => [

        ],

        'sqlserver' => [

        ]
    ],

    /*
     | ---------------------------------------------------
     |  Migration Table name
     | ---------------------------------------------------
     |
     |
     |
     |
     |
     */
    'migrations_table' => 'migrations'

];




