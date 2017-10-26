<?php
/**
 * tplengine Internal Plugin Templateparser Parsetrees
 * These are classes to build parsetrees in the template parser
 *
 * @package    tplengine
 * @subpackage Compiler
 * @author     Thue Kristensen
 * @author     Uwe Tews
 */

/**
 * @package    tplengine
 * @subpackage Compiler
 * @ignore
 */
abstract class Smarty_Internal_ParseTree
{

    /**
     * Buffer content
     *
     * @var mixed
     */
    public $data;

    /**
     * Subtree array
     *
     * @var array
     */
    public $subtrees = array();

    /**
     * Return buffer
     *
     * @param \Smarty_Internal_Templateparser $parser
     *
     * @return string buffer content
     */
    abstract public function to_smarty_php(Smarty_Internal_Templateparser $parser);

    /**
     * Template data object destructor
     */
    public function __destruct()
    {
        $this->data = null;
        $this->subtrees = null;
    }

}


