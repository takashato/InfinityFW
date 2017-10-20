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
 * Handler Module Class
 *
 * This class is a base for handlers to work.
 * All handlers MUST EXTEND THIS CLASS.
 *
 * 6/10/2017
 *
 * @package     InfinityFW
 * @subpackage  system
 * @category    main
 * @author      Thanh Son Banh.
 * @link        N/A
 */

namespace Handler;
use \Config\Config;
use \Library\Smarty;

class Handler
{
    public $tpl;
    public $config;

    /**
     * Handler constructor.
     * @param array $autoload
     */
    public function __construct($autoload = ['config' => [], 'library' => []]){
        $this->initConfig();
        $this->initInterface();
    }

    protected function redirect(){

    }

    /**
     * This method will load processor and store it as a handler's property
     * @param string $processorName
     * @throws \Exception
     */
    protected function loadProcessor($processorName = ''){
        if(file_exists(APPPATH.'/processors/'.$processorName.'.php')){
            // Check processor existence
            require_once(APPPATH.'/processors/'.$processorName.'.php');
            $fullProcessorName = '\Processor\\'.$processorName;
            if(class_exists('\Processor\\'.$processorName)){
                // Load processor
                $this->{$processorName} = new $fullProcessorName();
            } else {
                throw new \Library\FWException('Can not load processor class '.$fullProcessorName.'.');
            }
        } else {
            throw new \Library\FWException('Can not load processor file '.$processorName.'.');
        }
    }

    /**
     * Init interface - template engine (Smarty)
     * @return void
     * @throws \Library\FWException
     */
    private function initInterface(){
        // Load Interface config
        $interface = []; // Trap for IDE
        $this->config->loadConfig('interface');
        // Load Smarty
        $this->tpl = new Smarty();
        // Set Smarty config
        $this->tpl->debugging = $this->config->interface['debug'];
        $this->tpl->caching = $this->config->interface['caching'];
        $this->tpl->cache_lifetime = $this->config->interface['cacheLifetime'];
        $this->tpl->setCompileDir(APPPATH.'/interfaces/_tmp/template_c/');
        $this->tpl->setConfigDir(APPPATH.'/interfaces/_tmp/configs/');
        $this->tpl->setCacheDir(APPPATH.'/interfaces/_tmp/cache/');
        if(!file_exists(APPPATH.'/interfaces/'.$this->config->interface['template']))
            throw new \Library\FWException("Can't find interface \"{$this->config->interface['template']}\" / template directory.");
        $this->tpl->setTemplateDir(APPPATH.'/interfaces/'.$this->config->interface['template']);
    }

    /**
     * Init config loader
     */
    private function initConfig(){
        $this->config = new Config();
    }

}