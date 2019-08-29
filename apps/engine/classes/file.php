<?php

namespace engine;

class file
{
    /**
     * @param $filename
     * @param $data
     *
     * @return bool
     */
    public static function write($filename, $data)
    {
        return file_put_contents($filename, $data) > 0;
    }

    /**
     * @param $filename
     *
     * @return false|string
     */
    public static function read($filename)
    {
        return file_get_contents($filename);
    }
}
