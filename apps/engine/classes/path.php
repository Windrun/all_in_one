<?php

namespace engine;

class path
{
    protected static $data = [];

    public static function get(string $key)
    {
        return self::$data[$key];
    }

    public static function set(string $key, $path)
    {
        self::$data[$key] = $path;
    }
}