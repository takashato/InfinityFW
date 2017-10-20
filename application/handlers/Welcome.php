<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Welcome Handler (Test)
 *
 * Tester
 *
 * 10/6/2017
 *
 * @package     InfinityFW
 * @subpackage  application
 * @category    handler
 * @author      Thanh Son Banh.
 * @link        N/A
 */

namespace Handler;
class Welcome extends Handler
{
    public function index($message = '', $name = ''){
        $this->loadProcessor('Welcome');
        echo $this->Welcome->returnEcho().'. Welcome, '.$message.', '.$name;
    }

    public function welcome($message = '', $name = ''){
        echo "Chào mừng bạn";
    }
}