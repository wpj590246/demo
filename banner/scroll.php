<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=GB2312" />
<meta http-equiv="Content-Language" content="zh-cn" />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ͼƬЧ</title>
<body>
<script type="text/javascript" src="/demo/jquery.js"></script>
<style type="text/css">
    
    #demo {
     background: #FFF;
     overflow:hidden;
     border: 1px dashed #CCC;
     height: 166px;
     text-align: center;
     float: left;
    }
    #demo img {
     border: 3px solid #F2F2F2;
     display: block;
    }
    
    </style>
    Ϲ
    <div id="demo">
    <div id="demo1">
     <a href="#" target="_blank"><img src="/demo/banner/1.png" width="150" height="160" /></a></li>
     <a href="#" target="_blank"><img src="/demo/banner/2.png" width="150" height="160" /></a></li>
     <a href="#" target="_blank"><img src="/demo/banner/3.png" width="150" height="160" /></a></li>
     <a href="#" target="_blank"><img src="/demo/banner/4.png" width="150" height="160" /></a></li>
    </div>
    <div id="demo2"></div>
    </div>
    <script>
    
    var speed=3000; //ԽٶԽ
    var tab=document.getElementById("demo");
    var tab1=document.getElementById("demo1");
    var tab2=document.getElementById("demo2");
    tab2.innerHTML=tab1.innerHTML; //¡demo1Ϊdemo2
    function Marquee(){
    if(tab2.offsetTop-tab.scrollTop<=0)//demo1demo2ʱ
    tab.scrollTop-=tab1.offsetHeight //demo
    else{
    tab.scrollTop+=166
    }
    }
    var MyMar=setInterval(Marquee,speed);
    tab.onmouseover=function() {clearInterval(MyMar)};//ʱʱﵽֹͣĿ
    tab.onmouseout=function() {MyMar=setInterval(Marquee,speed)};//ƿʱ趨ʱ
   
    </script>


</body>
</html>  
  
