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
echo '<br/>';

echo htmlspecialchars('<div>');echo html_entity_decode("&lt;div&gt;");
echo '<br/>';

echo '<br/>';echo base64_decode(urldecode('M0A0ZGM0NjhkMmVkMjg4ODlmOTFhZDdmYjVjODI4MDBkNg%3D%3D'));echo base64_decode('<>');