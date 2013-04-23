<?php


define('DIR_ROOT', str_replace('\\', '/', dirname(__FILE__)));
define('DIR_PHP', DIR_ROOT . '/testphp');
define('DIR_CSS', DIR_ROOT . '/css');
define('DIR_JS', DIR_ROOT . '/js');
define('DIR_CLASSES', DIR_ROOT . '/classes');
define('DIR_FONTS', DIR_ROOT . '/fonts');
define('DIR_LOG', DIR_ROOT . '/log');
define('WEB_ROOT', 'http://localhost/demo/test');
define('WEB_CSS', WEB_ROOT . '/css');
define('WEB_IMG', WEB_ROOT . '/images');
define('WEB_JS', WEB_ROOT . '/js');
define('WEB_PHP', WEB_ROOT . '/testphp');
function __autoload($class_name) {
    $file_name = trim(str_replace('_', '/', $class_name), '/') . '.class.php';
    $file_path = DIR_CLASSES . '/' . $file_name;
    if (file_exists($file_path)) {
        return require_once( $file_path );
    }
    return false;
}
date_default_timezone_set('Etc/GMT-8'); 
session_start();
// function import($funcpre) {
// $file_path = DIR_FUNCTION . '/' . $funcpre . '.php';
// if (file_exists($file_path)) {
// require_once( $file_path );
// }
// }
$log = new LOG();
require_once DIR_PHP . '/utility.php';
?>
