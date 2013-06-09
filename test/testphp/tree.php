<?php

mysql_connect();

//测试数据
$sql = <<< SQL
select * from (
  select '1' as id, '0' as pid, 'Food' as title
  union all select '2', '1', 'Fruit'
  union all select '3', '2', 'Red'
  union all select '4', '3', 'Cherry'
  union all select '5', '2', 'Yellow'
  union all select '6', '5', 'Banana'
  union all select '7', '1', 'Meat'
  union all select '8', '7', 'Beef'
  union all select '9', '7', 'Pork'
  ) t
  order by pid, id
SQL;

$rs = mysql_query($sql);

$res = array(); //结果数组
$ind = array(); //索引数组  

while ($row = mysql_fetch_assoc($rs)) {
//    myprint($row);
    list($id, $pid) = array_values($row);
 
    $ind[$id] =  $row;
    if (isset($ind[$pid]))
        $ind[$pid]['child'][$id] = & $ind[$id]; //构造索引
    if ($pid == 0)
        $res[$id] = & $ind[$id]; //转存根节点组
}

//echo '<xmp>' . print_r($res, 1).'</xmp>';
echo strrpos('$resultstr', 't');
$te=new OverLoadingTest();new ImageShortCut();
$te2 =  $te;  //在php5中 这两个指向同一个对象 在之前的表示复制，php5用clone；在PHP5中对象的赋值和传递都是通过传递进行的
$te->name = 'bbb';
echo $te->name;
//$te2 = new OverLoadingTest;

echo $te2->name;
$ref = new ReflectionClass($te);
echo get_class($ref);
//myprint(get_declared_classes());
//class A {
//    
//}
//class B extends A {}
//class C extends B {}
//if(new C instanceof A) echo 'yes'; //yes
//if(new C instanceof B) echo 'yes'; //yes
//if(is_subclass_of(new C, A)) echo 'yes'; //yes