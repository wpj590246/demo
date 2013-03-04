<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="imagetoolbar" content="no" />
	<title>FancyBox 1.3.4 | Demonstration</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script>
		!window.jQuery && document.write('<script src="js/jquery-1.4.3.min.js"><\/script>');
	</script>
	<script type="text/javascript" src="js/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css" media="screen" />
 	<link rel="stylesheet" href="css/style.css" />
	<script type="text/javascript">
	$(document).ready(function() {

		$("a#test").fancybox({
		
		
		});
		$("#test2").fancybox();
	});
	</script>
</head>
<body>
	<a href="images/1.jpeg" id="test"><img src="images/1.jpeg" alt="头像"/></a>
	<div id="test2" href="#div">gg</div>
	<div style="display:none">
		<div id="div"  style="width:400px;height:100px;overflow:auto;">
		fdghdfgdf
		</div>
	</div>
</body>
</html>