<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Database Configuration
 *
 * Config database's relative information.
 *
 * 10/6/2017
 *
 * @package     InfinityFW
 * @subpackage  application
 * @category    config
 * @author      Thanh Son Banh.
 * @link        N/A
 */

$configVar = 'dbconfig';

/**
 * Below is the information of database connections.
 * Can use multiple database by adding element into $db array variable.
 *
 * ------------------------
 * EXPLANATION OF VARIABLES
 * ------------------------
 * InfinityFW is using Medoo Framework for Database connection.
 * Follow this link for documents: https://medoo.in/api/new
 */

$dbconfig['default'] = array(
    [
        // required
        'database_type' => 'mysql',
        'database_name' => 'infinityfw',
        'server' => 'localhost',
        'username' => 'root',
        'password' => '',

        // [optional]
        'charset' => 'utf8',
        'port' => 3306,

        // [optional] Table prefix
        'prefix' => '',
    ]
);