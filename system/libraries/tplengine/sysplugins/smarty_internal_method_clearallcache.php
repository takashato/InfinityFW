<?php

/**
 * tplengine Method ClearAllCache
 *
 * tplengine::clearAllCache() method
 *
 * @package    tplengine
 * @subpackage PluginsInternal
 * @author     Uwe Tews
 */
class Smarty_Internal_Method_ClearAllCache
{
    /**
     * Valid for tplengine object
     *
     * @var int
     */
    public $objMap = 1;

    /**
     * Empty cache folder
     *
     * @api  tplengine::clearAllCache()
     * @link http://www.smarty.net/docs/en/api.clear.all.cache.tpl
     *
     * @param \Smarty  $smarty
     * @param  integer $exp_time expiration time
     * @param  string  $type     resource type
     *
     * @return integer number of cache files deleted
     */
    public function clearAllCache(Smarty $smarty, $exp_time = null, $type = null)
    {
        $smarty->_clearTemplateCache();
        // load cache resource and call clearAll
        $_cache_resource = Smarty_CacheResource::load($smarty, $type);
        return $_cache_resource->clearAll($smarty, $exp_time);
    }
}