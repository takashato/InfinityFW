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

$configVar = 'db';

/**
 * Below is the information of database connections.
 * Can use multiple database by adding element into $db array variable.
 *
 * ------------------------
 * EXPLANATION OF VARIABLES
 * ------------------------
 *  ['dsn']         The full DSN string describe a connection to the database.
 *  ['dbdriver']    The database driver.
 *                  Currently supported: mysqli.
 *  ['hostname']    The hostname or IP Address of Database Server.
 *  ['username']    The username used to connect to database.
 *  ['password']    The password used to connect to database.
 *  ['database']    The name of the database you want to connect to.
 *  ['dbprefix']    The prefix of database tables.
 *  ['char_set']    The charset used to communicate with database server.
 */

$db['default'] = array(
    'dsn'           => '',
    'dbDriver'      => 'mysqli',
    'hostname'      => 'localhost',
    'username'      => 'root',
    'password'      => '',
    'database'      => 'infinityfw',
    'dbPrefix'      => '',
    'char_set'      => 'utf8',
);