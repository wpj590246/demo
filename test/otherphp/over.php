<?php

$f = file_get_contents('test.json');
$e = json_decode($f, true);
$num = 0;

$bind = '';

//print_r($e);
function Loop($array, $parent_id, $debug=false) {
    global $bind;

    foreach ($array as $key => $value) {
        if ($debug && $key > 1)
            return;

        // global $num;
        // $num++;
		 preg_match('/\/c(\d*?)-/',$value['url'],$tt);
		//echo $tt[1];echo '<br>';
        $bind .= "({$tt[1]},$parent_id,'{$value['title']}','{$value['url']}',{$value['level']}),";

        if ($value['children'])
            Loop($value['children'], $tt[1]);
    }
}
// Loop($e,0,true);
$connection = mysql_connect("localhost", "root", "") or die("连接服务器失败");

mysql_select_db("test", $connection) or die("选择数据库失败");
mysql_query("set names'UTF8'");
foreach ($e as $k => $v) {
    $bind = '';

    $temp = array($v);
    Loop($temp, 0);
    $bind = preg_replace('/(.*?),$/', '$1', $bind);
    $query1 = "insert into yihaodian_category(id,parent_id,name,url,level) values {$bind}";
    $result=mysql_query($query1) or die (print "失败1");
}

mysql_close($connection);
//echo $bind;
//$bind = preg_replace('/%/', '\%', $bind);
//echo $query1;
//$result=mysql_query($query1) or die (print "失败1");
?>