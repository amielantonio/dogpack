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
     | This line tells what database driver will be the
     | the default driver that the framework will use.
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

            'db_driver' => 'pgsql',
            'username' => '',
            'password' => '',
            'prefix' => '',
            'host' => '127.0.0.1',
            'port' => '5432',
            'database' => '',
            'charset' => 'utf8',
            'schema' => 'public',
            'sslmode' => 'prefer',

        ],

        'sqlserver' => [
            'db_driver' => 'sqlserver',
            'database' => '',
            'username' => '',
            'password' => '',
            'prefix' => '',
            'host' => 'localhost',
            'port' => '1433',
            'charset' => 'utf8',

        ]
    ],

    /*
     | ---------------------------------------------------
     |  Migration Table name
     | ---------------------------------------------------
     |
     |
     | Sets the default name of the migrations table. This
     | tells the framework
     |
     */
    'migrations_table' => 'migrations'

];




