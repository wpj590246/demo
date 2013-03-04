
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>moon</title>
<script type="text/javascript" src="/demo/jquery.js"></script>
<link rel="stylesheet" href="css/mooncake.css">
<!--[if IE 6]><style>.big,.small,.stone,.ship,.for_ie6,.face{behavior:url("css/iepngfix.htc")}</style><![endif]-->
</head>
<body>

<div id ="screen">
	<div id="mooncake"></div>
	<img id="something-black" class="for_ie6" src="images/mooncake/something-black.png" alt="">
	<div id="face">
		<img id='face-1' class=' face' src="images/mooncake/face-no.png"/>
		<img id='face-2' class=' face' src="images/mooncake/face-ha.png"/>
		<img id='face-3' class=' face' src="images/mooncake/face-di.png"/>

	</div>
	<div >
		<img id='countdown3' class='countdown' src="images/mooncake/left-3.png"/>
		<img id='countdown2' class='countdown' src="images/mooncake/left-2.png"/>
		<img id='countdown1' class='countdown' src="images/mooncake/left-1.png"/>

	</div>
    <div id="chang-e">
    	<img id="chang-e-1" class="for_ie6" src="images/mooncake/chang-e-1.png" alt="">
    	<img id="chang-e-2" class="for_ie6" src="images/mooncake/chang-e-2.png" alt="">
    </div>

	<div id="basket" >
		<div id ="leg">
			<img id="leg-1"  class="for_ie6" src='images/mooncake/leg-b.png'/>
			<img id="leg-2"  class="for_ie6" src='images/mooncake/leg-s.png'/>
		</div>
		<div id ="hand">
			<img id="hand-1" class="for_ie6" src='images/mooncake/hand-no.png'/>
			<img id="hand-2" class="for_ie6" src='images/mooncake/hand-ha.png'/>
			<img id="hand-3" class="for_ie6" src='images/mooncake/hand-di.png'/>
		</div>
	</div>
	
	<div id ="energy_bar">
		<img class="for_ie6" src='images/mooncake/energy-bar.png'/>
		<div id ="time_left">60</div>
		<div id='energy_div'>
		<img id="energy" class="for_ie6" src='images/mooncake/energy-full.png'/>
		</div>
	</div>
</div>

<script src="js/get-mooncake.js"></script>
<script>
  $(document).ready(function(){starttime();});
</script>
</body>
</html>