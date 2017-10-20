<?php

defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * Welcome Processor
 *
 * Test
 *
 * 10/7/2017
 *
 * @package     InfinityFW
 * @subpackage  application
 * @category    processors
 * @author      Thanh Son Banh.
 * @link        N/A
 */

namespace Processor;

class Welcome extends Processor
{
    public function returnEcho(){
        $this->loadLibrary('GetPost');
        $getPost = new \Library\GetPost();
        return $getPost->getGetValue('name');
    }
}