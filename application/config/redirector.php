<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Redirector Configuration
 *
 * Config redirector relative setting.
 *
 * 10/6/2017
 *
 * @package     InfinityFW
 * @subpackage  application
 * @category    config
 * @author      Thanh Son Banh.
 * @link        N/A
 */

$configVar = 'redirector';

/**
 * Default Handler
 *
 * Set this variable value to the handler you want to be default handler.
 * Default handler will be called if no handler is indicated.
 */
$redirector['defaultHandler'] = 'welcome';

/**
 * "Not Found" Handler
 *
 * Set this variable value to the handler you want to be the "not found" handler.
 * This handler will be called if accessing an unavailable handler.
 */
$redirector['notFoundHandler'] = 'welcome';