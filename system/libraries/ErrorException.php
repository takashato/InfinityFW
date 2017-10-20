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
 * Error and Exception class
 *
 * 10/7/2017
 *
 * @package     InfinityFW
 * @subpackage  system
 * @category    libraies
 * @author      Thanh Son Banh.
 * @link        N/A
 */

namespace Library;

use Config\Config;
use Throwable;

class FWException extends \Exception
{
    /**
     * FWException constructor.
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->writeLog($message);
    }

    private function writeLog($message){
        error_log('('.date('Y-m-d H:i:s').') '.$this->getFile().' ('.$this->getLine().'): '.$message."\n", 3, APPPATH.'/log/exception.log');
    }
}

