<?php

namespace engine;

class checker
{
    public static function isUrl(string $url)
    {
        return filter_var($url, FILTER_VALIDATE_URL) !== false;
    }
}