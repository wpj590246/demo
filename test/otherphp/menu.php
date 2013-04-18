<?php
 $temp_arr;
 $res;
$first  = array('1653','859');
$a = $_POST['a'];
$b = $_POST['b'];
foreach($first as $keyf){
	foreach ($a[$keyf]['g'] as $keya => $valuea) {
		$t1 = explode('^', $valuea);
                $temp_arr[$keyf][] = $t1;
                
                foreach($b[$t1[0]] as $keyb => $valueb){
                    $t2 = explode('^', $valueb);
                    $res[]=$t2['0'];
                }
	}
}
print_r($res);
?>