<?php

error_reporting(E_ALL);
$q = isset($_GET['q']) ? $_GET['q'] : 'coffee';

$INI['index'] = $q;
require 'app.php';




render($q);
?>



