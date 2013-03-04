
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>moon</title>
<script type="text/javascript" src="/demo/jquery.js"></script>
<link rel="stylesheet" href="css/mooncake.css">
<!--[if IE 6]><style>img{behavior:url("css/iepngfix.htc")}</style><![endif]-->
</head>
<body>
<div id ="screen">
	<div >
		<img id='start_back1' width="760" height="600" class='flag_flow'src="images/mooncake/start_back1.png"/>
		<img id='start_back2' width="760" height="600" class='flag_flow' src="images/mooncake/start_back2.png"/>
		<img id='start_back3' width="760" height="600" class='flag_flow' src="images/mooncake/start_back3.png"/>
		<img id='start_back4' width="760" height="600" class='flag_flow' src="images/mooncake/start_back2.png"/>
	</div>

<a  id="start" onclick= "this.blur()" href='start.php'><img  src="images/mooncake/start.png"></a>
</div>
<script>
	var flag_num = 0;

  $(document).ready(function(){
	$('#start').hover(
		function() {$(this).addClass('start');},
		function() {$(this).removeClass('start');}
		
		
	);
	setInterval(flag_flow,200);
  
  
  });
  
  var flag_flow = function () {
  
	flag_num = flag_num%4+1;

	$('.flag_flow').hide();
	$('#start_back'+flag_num).show();
  
  
  }
</script>
</body>
</html>