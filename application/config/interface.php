<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Config Interface
 *
 * Auto pre-load application library.
 *
 * 10/6/2017
 *
 * @package     InfinityFW
 * @subpackage  application
 * @category    config
 * @author      Thanh Son Banh.
 * @link        N/A
 */

$configVar = 'interface';

/**
 * -------------------------------------
 * SMARTY TEMPLATE ENGINE CONFIGURATIONS
 * -------------------------------------
 * Below is the array containing configuration filename. These will be loaded automatically.
 * Add a filename as an array element (DO NOT ADD FILE EXTENSION)
 *
 * EXPLANATION OF VARIABLES
 *  ['debug']           Enable debug mode of Smarty
 *  ['caching']         Caching render
 *  ['cacheLifetime']   The lifetime of caches
 *  ['template']        The name of sub-category in interfaces. Change this whenever you want
 *                      to change the interfaces.
 *
 *
 */

$interface = array(
    'debug' => true,
    'caching' => false,
    'cacheLifetime' => 120,
    'template' => 'common'
);

