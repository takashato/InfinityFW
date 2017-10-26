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
 * Processor Module Class
 *
 * This class is a base for processor to work.
 * All processors MUST EXTEND THIS CLASS.
 *
 * 7/10/2017
 *
 * @package     InfinityFW
 * @subpackage  system
 * @category    main
 * @author      Thanh Son Banh.
 * @link        N/A
 */

namespace Processor;

use Config\Config;
use Medoo\Medoo;

class Processor
{
    public $config, $db;

    /**
     * Processor constructor.
     */
    public function __construct(){
        $this->initConfig();
    }

    /**
     * Load library
     * @param string $libraryName
     * @throws \Library\FWException
     */
    protected function loadLibrary($libraryName = ''){
        if(file_exists(BASEPATH.'/libraries/'.$libraryName.'.php')){
            // Require library
            require_once(BASEPATH.'/libraries/'.$libraryName.'.php');
        } else {
            throw new \Library\FWException('Can not load library '.$libraryName);
        }
    }

    /**
     * Initialize Database
     * @throws \Library\FWException
     */
    protected function initDatabase(){
        if(empty($this->db)) {
            // Load config
            $this->config->loadConfig('database');
            // Init database
            $this->db = new Medoo($this->config->dbconfig);
        } else {
            throw new \Library\FWException('Database has been initialized already.');
        }
    }

    /**
     * Init config loader
     */
    private function initConfig(){
        $this->config = new Config();
        // Load important configs
        $this->config->loadConfig("application");
    }
}