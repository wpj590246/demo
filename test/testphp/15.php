<?php
$title = '各种PHP函数实验';
pagetitle($title);
$a = '111';
$b = '222';$c=1;$d=2;
$e=array('c','d');
$params = compact('a','b',$e);
myprint($params);
$p_dir = getcwd().'/'.'..';
myprint(getcwd());
chdir($p_dir);
myprint(getcwd());
myprint(scandir('test'));
myprint(error_get_last());
myprint(headers_sent());
myprint(get_magic_quotes_gpc()) ;
echo $pre = base64_encode($_SERVER['HTTP_HOST']);
myprint();

echo base64_decode(urldecode('M0A0ZGM0NjhkMmVkMjg4ODlmOTFhZDdmYjVjODI4MDBkNg%3D%3D'));
myprint();
echo base64_decode('<>');
myprint();
$t =new DB('111','222');
$t->test();
$t->stest();
DB::stest();
//DB::test();  #错误 ：不能静态调用不是static 的函数
//echo DB::getParam();
$t->getParam();
$str = '卞涛';
$len = strlen($str);
for($i=0;$i<$len;$i++) {
    echo ($str[$i]);
}