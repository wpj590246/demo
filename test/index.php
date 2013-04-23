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
            require_once DIR_PHP . '/nav.php';
            require_once DIR_PHP . '/' . $q . '.php';
            ?>
        </div>
        <?php registjs($q); ?>

    </body>
</html>



