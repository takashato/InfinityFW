<?php

/**
 * tplengine Method SetDebugTemplate
 *
 * tplengine::setDebugTemplate() method
 *
 * @package    tplengine
 * @subpackage PluginsInternal
 * @author     Uwe Tews
 */
class Smarty_Internal_Method_SetDebugTemplate
{
    /**
     * Valid for tplengine and template object
     *
     * @var int
     */
    public $objMap = 3;

    /**
     * set the debug template
     *
     * @api tplengine::setDebugTemplate()
     *
     * @param \Smarty_Internal_TemplateBase|\Smarty_Internal_Template|\Smarty $obj
     * @param  string                                                         $tpl_name
     *
     * @return \Smarty|\Smarty_Internal_Template
     * @throws SmartyException if file is not readable
     */
    public function setDebugTemplate(Smarty_Internal_TemplateBase $obj, $tpl_name)
    {
        $smarty = $obj->_getSmartyObj();
        if (!is_readable($tpl_name)) {
            throw new SmartyException("Unknown file '{$tpl_name}'");
        }
        $smarty->debug_tpl = $tpl_name;
        return $obj;
    }
}