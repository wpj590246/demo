<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>theme</title>
<style>
	* {
		border: 0 none;
		margin: 0;
		padding: 0;
		
	}

	img {
		display : block ;
	
	}
	#containers {
	width: 950px;
	
	
	}
	
	#log {
		    position: absolute;
    right: 160px;
    top: 73px;
    width: 100px;
	}
</style>
</head>
<body>
<div id="containers">

	<img src="images/help360-1.jpg" usemap="#theme_04" alt="">
<img src="images/help360-2.jpg" usemap="#theme_04" alt=""><img src="images/help360-3.jpg" usemap="#theme_04" alt=""><img src="images/help360-4.jpg" usemap="#theme_04" alt="">

	
	
	

</div>
<div id ="log"></div>
<script type="text/javascript" src="/demo/js/jquery.js"></script>

<script>
var num=0;
var num1 =0;
$("#containers").click(function(event) {
  var msg = "";
  num1=num1%2;
  
  // $(this).click(function(){ 
  msg += event.pageX + ", " + event.pageY;
  if (num1==0) $("#log").append("</br>");
  $("#log").append("<div>" + msg + "</div>");
  
  num1++;
  // });
});

$(document).dblclick(function() {
	$("#containers img").hide();
	var this_img = $("#containers img").eq(num);
	var na = this_img.show().attr("usemap");
	var h = this_img.height();
	var w = this_img.width();
	num++;
	$("#log").text(na+",height="+h);
	num1=0;



});
</script>
</body>
</html>