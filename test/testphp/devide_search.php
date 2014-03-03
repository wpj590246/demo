<?php

$arr = array('哈哈', '十', 'coma', 'Coma', 'del', '2312', 'del1');
sort($arr);

function dev_search(array $arr, $key) {
    $min = 0;
    $max = count($arr) - 1;
    $isAscSort = strcmp($arr[$min],$arr[$max]) <= 0 ;
    while (true) {
        echo 1;
        $sum = $max + $min;
        $mid = (int) ($sum % 2 == 1 ? ceil($sum / 2) : $sum / 2);
        if ($max < $min)
            return -1;
        else if (strcmp($key , $arr[$mid]) == 0)
            return $arr[$mid];
        else if (strcmp($key , $arr[$mid]) > 0)
            $isAscSort ? $min = $mid + 1 : $max = $mid - 1;
        else if (strcmp($key , $arr[$mid]) < 0)
            $isAscSort ? $max = $mid - 1 : $min = $mid + 1;
        else 
            return 'error';
    }
}

$key = 2312;
//echo dev_search($arr, $key);
//echo strcmp('11111',11111);// 0
$c = file_get_contents('http://dict.qq.com/dict?q=%E8%AF%8D%E8%AF%AD');
var_dump(json_decode($c,1));
?>
