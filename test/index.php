<?php
$q = isset($_GET['q']) ? $_GET['q'] : '15';

define('DIR_ROOT', str_replace('\\', '/', dirname(__FILE__)));
define('DIR_PHP', DIR_ROOT . '/testphp');
define('DIR_CSS', DIR_ROOT . '/css');
define('DIR_JS', DIR_ROOT . '/js');
define('WEB_ROOT', 'http://localhost/demo/test');
define('WEB_CSS', WEB_ROOT . '/css');
define('WEB_IMG', WEB_ROOT . '/images');
define('WEB_JS', WEB_ROOT . '/js');

// function __autoload($class_name) {
// $file_name = trim(str_replace('_', '/', $class_name), '/') . '.class.php';
// $file_path = DIR_LIBARAY . '/' . $file_name;
// if (file_exists($file_path)) {
// return require_once( $file_path );
// }
// $file_path = DIR_CLASSES . '/' . $file_name;
// if (file_exists($file_path)) {
// return require_once( $file_path );
// }
// return false;
// }
// function import($funcpre) {
// $file_path = DIR_FUNCTION . '/' . $funcpre . '.php';
// if (file_exists($file_path)) {
// require_once( $file_path );
// }
// }

require_once DIR_PHP . '/utility.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>demo--test</title>
        <?php 
        registcss();
        registcss($q);
        registjq('jquery');
        
        ?>

    </head>
    <body>
        <?php require_once DIR_PHP . '/' . $q . '.php'; ?>
        <?php registjs($q); ?>
    </body>
</html>



