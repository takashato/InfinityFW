<?php
/**
 * tplengine plugin
 *
 * @package    tplengine
 * @subpackage PluginsFilter
 */

/**
 * tplengine htmlspecialchars variablefilter plugin
 *
 * @param string $source input string
 *
 * @return string filtered output
 */
function smarty_variablefilter_htmlspecialchars($source)
{
    return htmlspecialchars($source, ENT_QUOTES, Smarty::$_CHARSET);
}
