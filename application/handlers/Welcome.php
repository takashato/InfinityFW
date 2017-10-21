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
    public function index(){
        $this->tpl->display("WELCOME.html");
    }
}