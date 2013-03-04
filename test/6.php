<html>
<head>
<title>Onload image fades without Flash | clagnut/sandbox</title>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<script type="text/javascript" src="/demo/jquery.js"></script> 
<link rel="stylesheet" href="css/test.css">

<style type="text/css">
body {
	height : 3000px;
	margin : 0;
}
.layout {
	
	width : 100%;
	height :30px;
	background-color : #CDE6FE ;

}
.top-fix {
	position : fixed ;
	top : 0;
	
}
.blank {
	height : 100px ;
	width 100px;
	background-color : grey;
}
</style>
</head><body>
<div id="content">
	<div class="blank"></div>
	<div id="1" class="layout">1</div>
	<div class="blank"></div>
	<div id="2" class="layout">2</div>
	<div class="blank"></div>
	<div id="3" class="layout">3</div>


</div> 
<script>
var top1 = $(".layout:eq(0)").offset().top;
var top2 = $(".layout:eq(1)").offset().top;
var top3 = $(".layout:eq(2)").offset().top;
	$(window).scroll(function () {
		var w_top = $(window).scrollTop();
		if (w_top>top1 && w_top<= top2){ 
			$(".layout").removeClass('top-fix');
			$("#1").addClass('top-fix');  
		} else if (w_top>top2 && w_top <= top3)  {
			$(".layout").removeClass('top-fix');
			$("#2").addClass('top-fix');  
		} else if (w_top>top3)  {
			$(".layout").removeClass('top-fix');
			$("#3").addClass('top-fix');  
		} else {
			$(".layout").removeClass('top-fix');
		}
	});

</script>
</body>
</html>