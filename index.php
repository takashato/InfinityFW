<?php
/**
 * InfinityFW
 *
 * A micro open-source application development framework for PHP.
 *
 * Copyright (c) 2017, Thanh Son Banh. All rights reserved.
 *
 * This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public license as published by
 *  the Free Software Foundation, either version 3 of the License,
 *  or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty
 * of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * This framework is developed for studying and developing project.
 *
 * @package InfinityFW
 * @author Thanh Son Banh (Takashato)
 * @copyright Copyright (c) 2017, Banh Thanh Son, InfinitySeeker Dev Team
 * @link n/a
 * @version 1.0.0
 * @filesource
 */

/**
 * InfinityFW Redirector
 *
 * This file used to redirect request to system.
 *
 * 10/6/2017
 *
 * @package     InfinityFW
 * @subpackage  root
 * @category    root
 * @author      Thanh Son Banh.
 * @link        N/A
 */

/**
 * ------------
 * SYSTEM PATH
 * ------------
 *
 * This variable must contain the path of "system".
 * You can move / rename system directory to another place and change
 * the value of the variable below to its path.
 * Ex: 'custom/library'
 */
    $system_path = 'system';

/**
 * ----------------
 * APPLICATION PATH
 * ----------------
 *
 * This variable contain the path of "application".
 * You can move / rename application directory to another place and change
 * the value of the variable below to its path.
 * Ex: 'custom/application'
 */
    $application_path = 'application';

// --------------------------------------------------------------------
// END OF USER CONFIGURABLE SETTINGS.  DO NOT EDIT BELOW THIS LINE
// --------------------------------------------------------------------

/**
 * Check base system path
 */
// Get realpath for system directory
if(($temp = realpath($system_path)) != false){
    $system_path = $temp;
}

// Check system dir exists
if(!is_dir($system_path)){
    die('System directory path is set incorrectly. Correct this: '.pathinfo(__FILE__, PATHINFO_BASENAME));
    exit(3); // EXIT_CONFIG
}

/**
 * Set main path constants
 */
// The name of this index file
define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));

// Path to the system directory
define('BASEPATH', $system_path);

// Path to the redirector (this file) directory
define('REDIPATH', dirname(__FILE__).DIRECTORY_SEPARATOR);

// Name of the "system" directory
define('SYSDIR', basename(BASEPATH));

// Get realpath for application directory
if(($temp = realpath($application_path)) != false){
    $application_path = $temp;
}

// Check system dir exists
if(!is_dir($application_path)){
    die('Application directory path is set incorrectly. Correct this: '.pathinfo(__FILE__, PATHINFO_BASENAME));
    exit(3); // EXIT_CONFIG
}

define('APPPATH', $application_path);

/**
 * LOAD InfinityFW Bootstrap
 */
require_once(BASEPATH.'/main/infinityFW.php');