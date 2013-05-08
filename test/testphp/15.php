<?php
$title = '各种PHP函数实验';
pagetitle($title);
$a = '111';
$b = '222';
$c = 1;
$d = 2;
$e = array('c', 'd');
$params = compact('a', 'b', $e);
myprint($params);
$p_dir = getcwd() . '/' . '..';
myprint(getcwd());
chdir($p_dir);
myprint(getcwd());
myprint(scandir('test'));
myprint(error_get_last());
myprint(headers_sent());
myprint(get_magic_quotes_gpc());
echo $pre = base64_encode($_SERVER['HTTP_HOST']);
myprint();

echo base64_decode(urldecode('M0A0ZGM0NjhkMmVkMjg4ODlmOTFhZDdmYjVjODI4MDBkNg%3D%3D'));
myprint();
echo base64_decode('<>');
myprint();
//$t = new DB('111', '222');
//$t->test();
//$t->stest();
DB::stest();
//DB::test();  #错误 ：不能静态调用不是static 的函数
//echo DB::getParam();
//$t->getParam();
$str = '卞涛';
$len = strlen($str);
for ($i = 0; $i < $len; $i++) {
    echo ($str[$i]);
}

?>
<a class="comment-mod" target="_blank" href="www.baidu.com">评论</a>

如果用户直接查看文章列表，那么所有的评论以及评论框都是不显示的，但是如果用户通过别的页面比如首页的个人动态直接定位到这篇日志，那么评论就应该全部显示。而列表页和查看单个条目的页面是同一个页面，这就要求我判断一下用户是否定位到该篇日志，如果是，就通过JS来触发 A 标签的点击事件。

一开始我尝试了一些方法，想当然地以为 A 标签和按钮一样是有 onclick() 事件的，结果发现没有，后来从网上搜了一些资料之后，成功解决了这个问题^_^ 。解决办法是针对 IE 和 FF编写不同的逻辑，部分代码如下：
<script>
    var comment = $('a.comment-mod')[0];
 
    if (document.all) {
        // For IE

        comment.click();

    } else if (document.createEvent) {
        //FOR DOM2
        var ev = document.createEvent('MouseEvents');
        ev.initEvent('click', false, true);
 
    }
</script> 
<table border="1">
    <thead>
        <tr>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
