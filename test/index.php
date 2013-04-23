<?php
$q = isset($_GET['q']) ? $_GET['q'] : '15';
require_once 'app.php';

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
        
        <?php 
            require_once DIR_PHP . '/' . $q . '.php';

        ?>
        <?php registjs($q); ?>
    </body>
</html>



