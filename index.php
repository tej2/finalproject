<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

define('DATABASE', 'tej2');
define('USERNAME', 'tej2');
define('PASSWORD', 'sCUGMmHv');
define('CONNECTION', 'sql2.njit.edu');

class Manage
{
    public static function core($class)
    {
    $path = 'core/' . str_replace('\\', '/', $class) . '.php';
  if (is_file($path)) {
            include $path;
            return;
        }
    }
    public static function controllers($class)
    {
    $path = 'controllers/' . str_replace('\\', '/', $class) . '.php';
 if (is_file($path)) {
            include $path;
            return;
        }
    }
    public static function models($class)
    {
    $path = 'models/' . str_replace('\\', '/', $class) . '.php';
        if (is_file($path)) {
            include $path;
            return;
        }
    }
    public static function collections($class)
    {
    $path = 'collections/' . str_replace('\\', '/', $class) . '.php';
            if (is_file($path)) {
            include $path;
            return;
        }
    }
    public static function routes($class)
    {
        $path = 'routes/' . str_replace('\\', '/', $class) . '.php';
        if (is_file($path)) {
            include $path;
            return;
        }
    }
}
spl_autoload_register(array('Manage', 'routes'));
spl_autoload_register(array('Manage', 'controllers'));
spl_autoload_register(array('Manage', 'collections'));
spl_autoload_register(array('Manage', 'models'));
spl_autoload_register(array('Manage', 'core'));

$response = http\processRequest::createResponse();

?>
