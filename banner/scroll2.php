
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>图片滚动</title>
<body width="1600px" height="800px">
<script type="text/javascript" src="/demo/jquery.js"></script>
<style type="text/css">
	* {
		margin : 0;
		padding : 0;
		border : 0;
	}
    ul,ol {
     list-style:none outside none;

    }
    .demo {
     
     padding:0;
     margin:0;
     width=1600px;
        height=800px;
    }
    
    .demo1 {
     background: #FFF;
     overflow:hidden;
   
     height:166px;
     text-align: center;
     width:156px;
     float:right;
     padding:0;
     margin:0;
    }
    .demo1  img {
     border: 3px solid #F2F2F2;
    
     
    }
        .demo2 {
     background: #FFF;
     overflow:hidden;
     padding:0;
     margin:0;
     height:800px
     text-align: center;
     float:left;
     width:160px;
     position:absolute;
     z-index:1;
    }
    .demo2 img {
     height:160px;
     width:150px;
     border: 0;
     display:block;
    }
    .demo .demo2 li {border-bottom:1px solid #EEEEEE;margin:10px 0;}
    .demo2 .light {
     border-right:11px solid #ffe4e9;
    /*position:absolute;
     z-index:111;
     left:0;top:0;*/
    }
	.demo3 {
	background: #FFF;
	overflow:hidden;
	padding:0;
	margin:0;
	height:160px;
	text-align: center;
     left : 200px;
     width:150px;
     position:absolute;
     z-index:1;

	  border: 1px solid;
	}
	.demo3 p {
		display : block ;
		float : left;
	}
	.inner {
		width : 800px;
		position : absolute;
		height : 160px;
		left : 0;
	}
    </style>
   <div class="demo">
    <ul class="demo2">
     
     <li class="light" data-id="0" height="162"><a href="#" target="_blank"><img src="/demo/banner/1.png" width="150" height="160" /></a></li>
     <li><a href="#" target="_blank"><img src="/demo/banner/2.png" width="150" height="160" /></a></li>
     <li><a href="#" target="_blank"><img src="/demo/banner/3.png" width="150" height="160" /></a></li>
     <li><a href="#" target="_blank"><img src="/demo/banner/4.png" width="150" height="160" /></a></li>
  
    </ul>
    
    <ul class="demo1">
     
     <li style="display:none"><a href="#" target="_blank"><img src="/demo/banner/1.png" width="150" height="160" /></a></li>
     <li style="display:none"><a href="#" target="_blank"><img src="/demo/banner/2.png" width="150" height="160" /></a></li>
     <li style="display:none"><a href="#" target="_blank"><img src="/demo/banner/3.png" width="150" height="160" /></a></li>
     <li style="display:none"><a href="#" target="_blank"><img src="/demo/banner/4.png" width="150" height="160" /></a></li>
  
    </ul>
	
	<div class="demo3">
		<div class="inner">
		<p><a href="#" target="_blank"><img src="/demo/banner/1.png" width="150" height="160" /></a></p>
		<p><a href="#" target="_blank"><img src="/demo/banner/2.png" width="150" height="160" /></a></p>
		<p><a href="#" target="_blank"><img src="/demo/banner/3.png" width="150" height="160" /></a></p>
		<p><a href="#" target="_blank"><img src="/demo/banner/4.png" width="150" height="160" /></a></p>
		</div>
	</div>
   </div>
    
<script>
    $('.demo1 li:first').show();
    var i=0; 
    var total= $(".demo1 li").length;
    var speed=5000; 
    
    Marquee = function (){
     
      
      i++;
	  if (i==4) $(".inner p:first").css({'position':'relative','left':'600px'});
	  $(".inner").animate({'left': -150*i},1000);
	  if (i==4) $(".inner").queue(function () {
		
		$(this).css('left','0').find('p:first').css({'position':'','left':''});
		$(this).dequeue();
	  });
	  
	  i=i%total;
      $(".demo1 li").hide(); 
      $(".demo1 li:eq("+i+")").show();
      $(".demo2 li").removeClass("light");
      $(".demo2 li:eq("+i+")").addClass("light");
	 
	 
    }
    
    var MyMar=setInterval(Marquee,speed);
    $(".demo2 li").mouseenter(function(){
      i=$(this).index();
      j=$(this).attr("data-id");$(".inner").stop().animate({'left': -150*i},500);
      $(".demo1 li").hide(); 
      $(".demo1 li:eq("+i+")").show();
      $(".demo2 li").removeClass("light");
      $(".demo2 li:eq("+i+")").addClass("light");
	   
    }) ;
    //$(".demo").mouseenter(function() {clearInterval(MyMar);});
   // $(".demo").mouseleave(function() {MyMar=setInterval(Marquee,speed)});
    $(".demo").hover(function() {clearInterval(MyMar);},function() {MyMar=setInterval(Marquee,speed)});
</script>


</body>
</html>  
  
