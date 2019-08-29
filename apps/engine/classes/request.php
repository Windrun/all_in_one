<?php


namespace engine;


class request
{
    /**
     * @param      $key
     * @param null $default
     *
     * @return mixed|null
     */
    public static function request($key, $default = null)
    {
        return $_REQUEST[$key] ?? $default;
    }

    /**
     * @param      $key
     * @param null $default
     *
     * @return mixed|null
     */
    public static function get($key, $default = null)
    {
        return $_GET[$key] ?? $default;
    }

    /**
     * @param      $key
     * @param null $default
     *
     * @return mixed|null
     */
    public static function post($key, $default = null)
    {
        return $_POST[$key] ?? $default;
    }
}