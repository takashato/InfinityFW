<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Config Application
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

$configVar = 'application';

$application = array();

/**
 * Below is the URLs of application.
 * ------------------------
 * EXPLANATION OF VARIABLES
 * ------------------------
 *  'base'      The URL of base directory. Example: http://localhost/infinityfw
 *  'resource'  The URL of resource directory. Example: http://localhost/resources
 * NOTICE: End WITHOUT slash '/'
 */

$application['url'] = array(
    'base'      => 'http://localhost/infinityfw',
    'resource'  => 'http://localhost/resources'
);