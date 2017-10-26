<?php

/**
 * tplengine Method AddDefaultModifiers
 *
 * tplengine::addDefaultModifiers() method
 *
 * @package    tplengine
 * @subpackage PluginsInternal
 * @author     Uwe Tews
 */
class Smarty_Internal_Method_AddDefaultModifiers
{
    /**
     * Valid for tplengine and template object
     *
     * @var int
     */
    public $objMap = 3;

    /**
     * Add default modifiers
     *
     * @api tplengine::addDefaultModifiers()
     *
     * @param \Smarty_Internal_TemplateBase|\Smarty_Internal_Template|\Smarty $obj
     * @param  array|string                                                   $modifiers modifier or list of modifiers
     *                                                                                   to add
     *
     * @return \Smarty|\Smarty_Internal_Template
     */
    public function addDefaultModifiers(Smarty_Internal_TemplateBase $obj, $modifiers)
    {
        $smarty = $obj->_getSmartyObj();
        if (is_array($modifiers)) {
            $smarty->default_modifiers = array_merge($smarty->default_modifiers, $modifiers);
        } else {
            $smarty->default_modifiers[] = $modifiers;
        }
        return $obj;
    }
}