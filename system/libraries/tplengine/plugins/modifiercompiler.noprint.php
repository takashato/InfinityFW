<?php
/**
 * tplengine plugin
 *
 * @package    tplengine
 * @subpackage PluginsModifierCompiler
 */

/**
 * tplengine noprint modifier plugin
 * Type:     modifier<br>
 * Name:     noprint<br>
 * Purpose:  return an empty string
 *
 * @author   Uwe Tews
 * @return string with compiled code
 */
function smarty_modifiercompiler_noprint()
{
    return "''";
}
