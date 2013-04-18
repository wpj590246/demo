<?php

function myprint($e=null) {
    if (is_array($e))
        print_r($e);
    else
        echo $e;
    echo '<br/>';
}

function render($view) {
    require_once $view . '.php';
}
function pagetitle ($title) {
    echo <<<EOT
    <div class='toptitle'>$title</div> 
    
EOT;
}
function registcss($css = 'main') {
    $filename = DIR_CSS . '/' . $css . '.css';
    if (file_exists($filename))
        echo
        '<link href="' . WEB_CSS . '/' . $css . '.css" type="text/css" rel="stylesheet"/>';
}

function registjq($js) {
    echo '<script type="text/javascript" src="' . WEB_ROOT . '/../js/' . $js . '.js"></script>';
}

function registjs($js) {
    $filename =  WEB_JS . '/' . $js . '.js';
    if (file_exists($filename))
        echo '<script type="text/javascript" src="' . WEB_JS . '/' . $js . '.js"></script>';
}