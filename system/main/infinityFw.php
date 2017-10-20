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
 * InfinityFW Bootstrap
 *
 * This bootstrap will initialize the InfinityFW Framework
 *
 * 10/6/2017
 *
 * @package     InfinityFW
 * @subpackage  system
 * @category    main
 * @author      Thanh Son Banh.
 * @link        N/A
 */

/**
 * --------------------------------------------------
 * Require MAIN module, configurations and libraries
 * --------------------------------------------------
 *
 * WARNING: Do not add any custom one here, this is for system using only.
 * If you want to pre-load something automatically,
 * please use autoload.php in APPPATH/config/autoload.php
 */
// Configurations
require_once(APPPATH.'/config/redirector.php');

// Module
require_once(BASEPATH.'/main/config.php');
require_once(BASEPATH.'/main/handler.php');
require_once(BASEPATH.'/main/processor.php');

// Libraries
require_once(BASEPATH.'/libraries/ErrorException.php');
require_once(BASEPATH.'/libraries/Smarty/Smarty.class.php');


/**
 * -----------------------------------------
 * Call application configuration's Autoload
 * -----------------------------------------
 */
if(file_exists(APPPATH.'/config/autoload.php')){
    require_once(APPPATH.'/config/autoload.php');
    if(!isset($autoload['config'], $autoload['library']) || (!is_array($autoload['config']) || !is_array($autoload['library']))){
        die('Missing autoload configuration.');
    }
    // Load config
} else {
    die('Can not load autoload configuration. Please make sure that autoload.php is available.');
}

/**
 * Standardized GET URL
 */
/* Friendly URL */
$requestString = $_GET['request'];
$requestAttr = explode('/', $requestString);
$handlerName = isset($requestAttr[0]) ? addslashes($requestAttr[0]) : $redirector['defaultHandler'];
$methodName = $requestAttr[1]; // Temporary

/**
 * -------------
 * CALL HANDLER
 * -------------
 */
if(!file_exists(APPPATH.'/handlers/'.$handlerName.'.php')){
    // TODO
    die('Handler file "'.$handlerName.'" not found.');
} else {
    // Require handler file
    require_once(APPPATH . '/handlers/' . $handlerName . '.php');
    
    // Check handler class
    if(!class_exists('Handler\\'.$handlerName)){
        die('Handler "'.$handlerName.'" does not contain a class.');
    }
    $fullHandlerName = '\Handler\\'.$handlerName;
    $handler = new $fullHandlerName($autoload);


    // Prepare attributes
    $attributes = $requestAttr;
    // Remove handlerName it's not $attributes
    unset($attributes[0]);

    // Check invoked method existence
    // First check. If $methodName doesn't exists, it's not method, it's attribute
    if(!method_exists($handler, $methodName)){
        // $methodName is not a method, use index method.
        $methodName = 'index';
        if(!method_exists($handler, $methodName)){
            die('Can not find index() method.');
        }
    } else {
        unset($attributes[1]);
    }




    var_dump($attributes);

    /**
     * Invoke method
     */
    call_user_func_array([$handler, $methodName], $attributes);

}

