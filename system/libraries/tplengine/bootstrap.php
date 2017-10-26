<?php
/*
 * This file is part of the tplengine package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/*
 * Load and register tplengine Autoloader
 */
if (!class_exists('Smarty_Autoloader')) {
    require dirname(__FILE__) . '/Autoloader.php';
}
Smarty_Autoloader::register();
