<?php
$q = isset($_GET['q']) ? $_GET['q'] : 'coffee';
require_once 'app.php';
$nav_deny = array('callback', 'imagecreate', 'nav', 'utility');
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

    </body>
</html>



