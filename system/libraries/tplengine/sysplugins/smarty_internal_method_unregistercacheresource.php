<?php

/**
 * tplengine Method UnregisterCacheResource
 *
 * tplengine::unregisterCacheResource() method
 *
 * @package    tplengine
 * @subpackage PluginsInternal
 * @author     Uwe Tews
 */
class Smarty_Internal_Method_UnregisterCacheResource
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
     * @api      tplengine::unregisterCacheResource()
     * @link     http://www.smarty.net/docs/en/api.unregister.cacheresource.tpl
     *
     * @param \Smarty_Internal_TemplateBase|\Smarty_Internal_Template|\Smarty $obj
     * @param                                                                 $name
     *
     * @return \Smarty|\Smarty_Internal_Template
     */
    public function unregisterCacheResource(Smarty_Internal_TemplateBase $obj, $name)
    {
        $smarty = $obj->_getSmartyObj();
        if (isset($smarty->registered_cache_resources[ $name ])) {
            unset($smarty->registered_cache_resources[ $name ]);
        }
        return $obj;
    }
}