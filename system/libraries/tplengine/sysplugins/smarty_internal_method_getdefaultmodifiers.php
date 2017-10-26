<?php

/**
 * tplengine Method GetDefaultModifiers
 *
 * tplengine::getDefaultModifiers() method
 *
 * @package    tplengine
 * @subpackage PluginsInternal
 * @author     Uwe Tews
 */
class Smarty_Internal_Method_GetDefaultModifiers
{
    /**
     * Valid for tplengine and template object
     *
     * @var int
     */
    public $objMap = 3;

    /**
     * Get default modifiers
     *
     * @api tplengine::getDefaultModifiers()
     *
     * @param \Smarty_Internal_TemplateBase|\Smarty_Internal_Template|\Smarty $obj
     *
     * @return array list of default modifiers
     */
    public function getDefaultModifiers(Smarty_Internal_TemplateBase $obj)
    {
        $smarty = $obj->_getSmartyObj();
        return $smarty->default_modifiers;
    }
}