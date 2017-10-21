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
 * 21/10/2017
 *
 * @package     infinityfw
 * @subpackage  {SUBPACK}
 * @category    {CATEGORY}
 * @author      Thanh Son Banh.
 * @link        N/A
 */

namespace Handler;


class Libraries extends Handler
{
    public function index($libraryName = ''){
        if($libraryName == '') {
            $this->tpl->display("LIBRARIES.html");
        } else {
            try {
                $this->tpl->display("LIBRARY-{$libraryName}.html");
            } catch(\Exception $ex){
                die($ex->getMessage());
            }
        }
    }
}