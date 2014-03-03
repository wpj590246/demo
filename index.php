<html>
<head>
<script type="text/javascript">
function disableOption(value)
{
    if(value=='banana')
  document.getElementById("b").disabled = false;
else 
	document.getElementById("b").disabled = true;
 }
 function check(){
	if(document.reg.username.value==""){
	alert("请输入您的登录用户名");
	document.reg.username.focus();
	return false;
	}
	if(document.reg.username.value.length<2){
	alert("请输入长度至少为两位的用户名");
	document.reg.username.focus();
	return false;
	}
return true;
}
// var a=10,b=20,c=10;
// alert(a=b);alert(a==b);alert(a==c);
</script>
</head>
<body onload="text.value='123'">
<form name="reg" >
<table>
<tr>
<td>
<!-- A选项 -->
<select id="a" onchange="disableOption(this.value)">
  <option id="apple" value="apple">Apple</option>
  <option id="pear" value="pear">Pear</option>
  <option id="banana" value="banana">Banana</option>
  <option id="orange" value="orange">Orange</option>
</select>
<!-- B选项默认禁用,当A选项选择为banana时,解除禁用 -->
<select id="b" disabled>
  <option id="apple" value="apple">Apple</option>
  <option id="pear" value="pear">Pear</option>
  <option id="banana" value="banana">Banana</option>
  <option id="orange" value="orange">Orange</option>
</select>
</td>
</tr>
</table>
<input id="text" type="text" name="username">

<input type="button"  onclick="username.value='321'" name="send" value="确认修改"   class="submit"/>
</form>
 <script language="javascript">

var img=new Array(3);
function changeimg()
{
for(i=0; i<img.length; i++)
if(img[i]==3)
{
pic.src="http://img.baidu.com/img/iknow/avarta/66/r6s1g1.gif";
}else if(2){
pic.src="http://img.baidu.com/img/iknow/avarta/66/r6s1g1.gif";
}else{
pic.src="http://img.baidu.com/img/iknow/avarta/66/r6s1g1.gif";
}
}
setInterval("changeimg()",3000)
document.write("Hello World!");

</script>

<img name="pic" src="http://img.baidu.com/img/iknow/avarta/66/r6s1g3.gif">
<input type="button" value="改变图片" onclick="changeimg()">
<button name="dasda">111</button>
<div id="content">
<?php
$tt= 10;
function teacup() {
$tt = $tt*10;
}
teacup();
echo $tt;
function myfunction($v) 
{
if ($v==="Dog")
	{
	return "Fido";
	}
return $v;
}
$a=array("Horse","Dog","Cat");
$a = array_map("myfunction",$a);
print_r($a);
?>

<div id="front-warning-Cookie">
<h4>麦荞网依赖于 JavaScript</h4>
<p>如果您无法在浏览器的偏好设置中启用 JavaScript,请您在我们的<a class="web2.0_a" href="web2.0/index.php">站点简易版</a>上获得更佳体验。</p>
</div>
</div>
<script language="javascript">
    if(navigator.cookieEnabled)
    {
    var parent=document.getElementById("content");
    var child=document.getElementById("front-warning-Cookie");
    parent.removeChild(child);
    }
</script>
<script type="text/javascript">
document.write("<h1>"+location.href+"</h1>Hello World!");

</script>
</body>
</html>