<?php

class console
{
    public static function log(...$args)
    {
        foreach ($args as $arg) {
            print"<pre>";var_export($arg);print"</pre>";
        }
    }
}