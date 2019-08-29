<?php

spl_autoload_register(['autoload', 'loader']);

class autoload
{
    protected static $aliases     = [];
    protected static $files_count = 0;

    public function __construct()
    {
    }

    public static function init()
    {
        $path = realpath(__DIR__ . DIR_SEP . '..' . DIR_SEP . '..' . DIR_SEP) . DIR_SEP;

        self::$aliases['board']  = $path . 'board' . DIR_SEP . 'classes' . DIR_SEP;
        self::$aliases['engine'] = $path . 'engine' . DIR_SEP . 'classes' . DIR_SEP;
    }

    /**
     * Searching and loading file by class
     *
     * @param string $class
     *
     * @return bool
     */
    public static function loader($class) : bool
    {
        if (count(self::$aliases) === 0) {
            self::init();
        }

        $class = explode('\\', $class);
        $alias = array_shift($class);
        if (isset(self::$aliases[$alias])) {
            $path  = self::$aliases[$alias];
            $class = implode(DIRECTORY_SEPARATOR, $class);
            $file  = $path . strtolower($class) . '.php';
            if (file_exists($file)) {
                class_loader_require_once($file);
                self::$files_count++;

                return true;
            }
        }

        return false;
    }
}

/**
 * closing "self" from using it in file
 *
 * @param $file
 */
function class_loader_require_once($file)
{
    require_once $file;
}
