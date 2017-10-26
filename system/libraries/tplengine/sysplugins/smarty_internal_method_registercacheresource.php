<?php

/**
 * tplengine Method RegisterCacheResource
 *
 * tplengine::registerCacheResource() method
 *
 * @package    tplengine
 * @subpackage PluginsInternal
 * @author     Uwe Tews
 */
class Smarty_Internal_Method_RegisterCacheResource
{
    /**
     * Valid for tplengine and template object
     *
     * @var int
     */
    public $objMap = 3;

    /**
     * Registers a resource to fetch a template
     *
     * @api  tplengine::registerCacheResource()
     * @link http://www.smarty.net/docs/en/api.register.cacheresource.tpl
     *
     * @param \Smarty_Internal_TemplateBase|\Smarty_Internal_Template|\Smarty $obj
     * @param  string                                                         $name name of resource type
     * @param \Smarty_CacheResource                                           $resource_handler
     *
     * @return \Smarty|\Smarty_Internal_Template
     */
    public function registerCacheResource(Smarty_Internal_TemplateBase $obj, $name,
                                          Smarty_CacheResource $resource_handler)
    {
        $smarty = $obj->_getSmartyObj();
        $smarty->registered_cache_resources[ $name ] = $resource_handler;
        return $obj;
    }
}