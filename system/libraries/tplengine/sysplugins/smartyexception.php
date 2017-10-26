<?php

/**
 * tplengine exception class
 *
 * @package tplengine
 */
class SmartyException extends Exception
{
    public static $escape = false;

    public function __toString()
    {
        return ' --> tplengine: ' . (self::$escape ? htmlentities($this->message) : $this->message) . ' <-- ';
    }
}
