<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=GB2312" />
<meta http-equiv="Content-Language" content="zh-cn" />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>图片滚动效果</title>
<body>
<script type="text/javascript" src="/demo/jquery.js"></script>
  
  <select id ="q">
    <option value="1">1</option>
        <option value="2">2</option>
</select>
    
    <script>
      
      $("#q").mouseenter(function (){alert("Q");});
      
      $("#q").change(function(){
    var id  =$(this).val();alert(id);
    
    });
      
      </script>