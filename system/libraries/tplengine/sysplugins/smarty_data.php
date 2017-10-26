<?php
/**
 * tplengine Plugin Data
 * This file contains the data object
 *
 * @package    tplengine
 * @subpackage Template
 * @author     Uwe Tews
 */

/**
 * class for the tplengine data object
 * The tplengine data object will hold tplengine variables in the current scope
 *
 * @package    tplengine
 * @subpackage Template
 */
class Smarty_Data extends Smarty_Internal_Data
{
    /**
     * Counter
     *
     * @var int
     */
    static $count = 0;

    /**
     * Data block name
     *
     * @var string
     */
    public $dataObjectName = '';

    /**
     * tplengine object
     *
     * @var Smarty
     */
    public $smarty = null;

    /**
     * create tplengine data object
     *
     * @param Smarty|array                    $_parent parent template
     * @param Smarty|Smarty_Internal_Template $smarty  global smarty instance
     * @param string                          $name    optional data block name
     *
     * @throws SmartyException
     */
    public function __construct($_parent = null, $smarty = null, $name = null)
    {
        parent::__construct();
        self::$count ++;
        $this->dataObjectName = 'Data_object ' . (isset($name) ? "'{$name}'" : self::$count);
        $this->smarty = $smarty;
        if (is_object($_parent)) {
            // when object set up back pointer
            $this->parent = $_parent;
        } elseif (is_array($_parent)) {
            // set up variable values
            foreach ($_parent as $_key => $_val) {
                $this->tpl_vars[ $_key ] = new Smarty_Variable($_val);
            }
        } elseif ($_parent != null) {
            throw new SmartyException("Wrong type for template variables");
        }
    }
}
