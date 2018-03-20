<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 | -------------------------------------------------------------------
 |  DATABASE CONNECTION
 | -------------------------------------------------------------------
 |
 |
 |
 |
 */




$db = require CONFIG_PATH . '/database.php';



//Check Database Driver to identify the proper connection string to be used
switch( $db['default_driver'] ) {

    case 'mysql' :
        mysql( $db['connections']['mysql'] );
        break;

//    case 'sqlite' :
//        sqlite( $db['connections']['sqlite'] );
//        break;

//    case 'postgresql' :
//        postgresql( $db['connections']['postgresql'] ) ;
//        break;

//    case 'sqlserver' :
//        sqlserver( $db['connections']['sqlserver'] );
//        break;

    //Default database
    default :
        mysql( $db['connections']['mysql'] );
        break;
}


/**
 * Function to create a connection string for mysql databases
 *
 * @param $database
 * @return PDO
 */
function mysql( $database ){

    try{

        $conn = new PDO("mysql:host={$database['hostname']};dbname={$database['database']}", $database['username'], $database['password']);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conn;

    }
    catch( PDOException $e ){

        throw new PDOException($e->getMessage());

    }

}

/**
 * Function to create a connection string for sqlite databases
 *
 * @param $database
 * @return PDO
 */
function sqlite( $database ){

    try{

        $conn = new PDO( "sqlite:/{$database['database_path']};Version=3" );

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conn;

    }
    catch( PDOException $e ){

        throw new PDOException( $e->getMessage() );

    }

}


//function postgresql( $database ){
//
//}

//function sqlserver( $database ){
//
//    try{
//
//        $conn = new PDO( "sqlite:/{$database['database_path']};Version=3" );
//
//        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//        return $conn;
//
//    }
//    catch( PDOException $e ){
//
//        throw new PDOException( $e->getMessage() );
//
//    }
//
//}