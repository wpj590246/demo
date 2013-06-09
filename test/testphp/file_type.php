<?php


$filePath = "E:/done-back/theme/images/bnt_tb_01.jpg";
$x = FileTypeValidation::validation($filePath, 'jpg');
var_dump($x);
$_SESSION['test'] = 'asdasdasd';
$_SESSION['test111'] = 'asd11asdasd';
echo $_SESSION['test'] ;
?>
