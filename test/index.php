<?php
$q = isset($_GET['q']) ? $_GET['q'] : 'coffee';
require 'app.php';
$nav_deny = array('callback', 'imagecreate', 'nav', 'utility');
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>demo--test</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <?php
			registcss();
			registcss($q);
			registjq('jquery');
			registjs();
        ?>

    </head>
    <body>
        <div class="container">
            <?php
				$idd = opendir(dirname(__FILE__));

				myprint(readdir($idd));
				render('nav', array('q' => $q, 'nav_deny' => $nav_deny));
				render($q);
            ?>
        </div>
        <?php registjs($q); ?>
		<script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>



