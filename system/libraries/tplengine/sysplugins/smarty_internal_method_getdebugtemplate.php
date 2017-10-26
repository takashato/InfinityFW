<?php

/**
 * tplengine Method GetDebugTemplate
 *
 * tplengine::getDebugTemplate() method
 *
 * @package    tplengine
 * @subpackage PluginsInternal
 * @author     Uwe Tews
 */
class Smarty_Internal_Method_GetDebugTemplate
{
    /**
     * Valid for tplengine and template object
     *
     * @var int
     */
    public $objMap = 3;

    /**
     * return name of debugging template
     *
     * @api tplengine::getDebugTemplate()
     *
     * @param \Smarty_Internal_TemplateBase|\Smarty_Internal_Template|\Smarty $obj
     *
     * @return string
     */
    public function getDebugTemplate(Smarty_Internal_TemplateBase $obj)
    {
        $smarty = $obj->_getSmartyObj();
        return $smarty->debug_tpl;
    }
}