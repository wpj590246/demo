<?php
    $nav_deny = array('callback', 'imagecreate', 'nav', 'utility');
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>demo--test</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
                <?php
                    global $INI;
                    registcss();
                    registcss($INI['index']);
                    registjq('jquery');
                    registjs();
                ?>

    </head>
    <body>
        <div class="container">
            <?php
                            global $INI;
				render('nav', array('q' => $INI['index'], 'nav_deny' => $nav_deny));
            
            ?>