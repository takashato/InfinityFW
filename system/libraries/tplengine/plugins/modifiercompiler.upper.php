<?php
/**
 * tplengine plugin
 *
 * @package    tplengine
 * @subpackage PluginsModifierCompiler
 */

/**
 * tplengine upper modifier plugin
 * Type:     modifier<br>
 * Name:     lower<br>
 * Purpose:  convert string to uppercase
 *
 * @link   http://smarty.php.net/manual/en/language.modifier.upper.php lower (tplengine online manual)
 * @author Uwe Tews
 *
 * @param array $params parameters
 *
 * @return string with compiled code
 */
function smarty_modifiercompiler_upper($params)
{
    if (Smarty::$_MBSTRING) {
        return 'mb_strtoupper(' . $params[ 0 ] . ', \'' . addslashes(Smarty::$_CHARSET) . '\')';
    }
    // no MBString fallback
    return 'strtoupper(' . $params[ 0 ] . ')';
}
