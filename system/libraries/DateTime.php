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
 * {File name}
 *
 * {Description}
 *
 * 10/7/2017
 *
 * @package     InfinityFW
 * @subpackage  {SUBPACK}
 * @category    {CATEGORY}
 * @author      Thanh Son Banh.
 * @link        N/A
 */

namespace Library;


use Config\Config;

class DateTime
{
    protected $timestamp;

    /**
     * DateTime constructor.
     * @param int $time
     */
    public function __construct($time = 0){
        Config::loadConfig('datetime.php');
        $this->timestamp = $time == 0 ? time() : $time;
    }


}