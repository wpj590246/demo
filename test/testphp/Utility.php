<?php

function myprint($e=null) {
    if (is_array($e))
        print_r($e);
    elseif ($e != null)
        echo $e;
    echo '--<br/>';
}

function render($view) {
    require_once $view . '.php';
}

function pagetitle($title) {
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

function registjs($js = 'main') {
    $filename = DIR_JS . '/' . $js . '.js';
    if (file_exists($filename))
        echo '<script type="text/javascript" src="' . WEB_JS . '/' . $js . '.js"></script>';
}

function CaptchaCreate($size) {
    $v = new Captcha(null, 150, 50);
    $v->UseColour(true);
    $v->SetNumChars(4);
    $v->Create();
}