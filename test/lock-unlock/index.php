<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7]> <html class="no-js ie ie6 lte9 lte8 lte7"><![endif]-->
<!--[if IE 7]>    <html class="no-js ie ie7 lte9 lte8 lte7"><![endif]-->
<!--[if IE 8]>    <html class="no-js ie ie8 lte9 lte8"><![endif]-->
<!--[if IE 9]>    <html class="no-js ie ie9 lte9"><![endif]-->
<!--[if gt IE 9]> <html class="no-js"><![endif]-->
<!--[if !IE]><!--><html class='fox'><!--<![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<head>
	<style>
	
		* {
			padding: 0;
			margin: 0;
			border: 0;

		}

		#bottom span {
			background-color: #7a7a7a;
			border-radius: 8px 8px 8px 8px;
			
			height: 16px;
			margin-left: 11px;
			margin-top: 12px;
			width: 16px;
			display: none;
		}
		ul  {
			height: 200px;
			
			width: 200px;
		}

		ul li {
			background-color: green;
			border-radius: 20px 20px 20px 20px;
			float: left;
			height: 40px;
			list-style: none outside none;
			margin: 5px;
			width: 40px;

		}
		
		#top {
			position:absolute;
			top : 19px;
		}
		#top li{
			background-color: transparent;
		}

		canvas {
		    position: absolute;
			top: 19px;
		}
		#container {
			margin: 150px auto;
			position: relative;
			width: 300px;
		}
	</style>

	<script src="/demo/js/jquery.js"></script>	

</head>
<body>
	<div id="container">
	<canvas id="myCanvas" width="200" height="200">你的浏览器还不支持哦</canvas>
	<button id="lock">lock</button> 
	<button id="unlock">unlock</button>
	<ul id="bottom">
		<?php for ($i=1;$i<=16;$i++) {echo "<li id='num_".$i."' ><span></span></li>";} ;?>

	
	</ul>
	<ul id="top">
		<?php for ($i=1;$i<=16;$i++) {echo "<li data-num='".$i."' ></li>";} ;?>

	
	</ul>
	</div>

<script>
	(function($) {
		$(document).bind('contextmenu',function () {return false;} );
	
		var flag = 0,lock_flag = 0;
		var arr_lock = [$('#num_1')[0],$('#num_2')[0]];
		var arr_unlock = [];
		var li_left = li_top = 25;
		$.show_block = function (e) {
			$(e).find("span").css('display','block');
			
		};
		$.push_arr = function (e) {
			if (lock_flag == 1)
				arr_lock.push(e);
			else if (lock_flag == 2)
				arr_unlock.push(e);
		}
		$.li_click = function (e) {
				var id = $(e).data('num');
				var ee = $("#num_"+id)[0];
				$.show_block (ee);
				$.push_arr (ee);
		}
		$.check_lock = function () {
		
			if (arr_unlock.length == arr_lock.length) 
			
			
				$.each(arr_unlock,function (k,v) {
				
					if (v != arr_lock[k]) {$.unlock_failed('2');return false;}
				
					if (k == arr_unlock.length -1) alert('success');
				
				});
				
			else 
				$.unlock_failed('1');
		}
		
		$.unlock_failed = function (f) {
			console.log(f);
		}
		
		$("#lock").click(function () {
			lock_flag = 1;
			arr_lock = [];
			
		});
		$("#unlock").click(function () {
			lock_flag = 2;
			arr_unlock = [];
			
		});
		
		$("#top li").mousedown(function (e) {
			flag = 1;
			$.li_click(e.target);
			var pos = $(this).position();
			$.draw_init(pos.left+li_left,pos.top+li_top);
	
		})
		.mouseup(function () {
			flag = 0;
			$("span").hide();
			if (lock_flag == 2) $.check_lock();
			lock_flag = 0;
			// console.log(arr_lock);console.log(arr_unlock);
			// $.clear_draw();
			
		})
		.mouseenter(function (e) {
			if(flag) {
				$.li_click(e.target);
				var pos = $(this).position();
				$.draw_line(pos.left+li_left,pos.top+li_top);
			}
		}).mouseleave(function (e) {
			// if(flag)
				// $(e.target).find("span").hide();
		})
		
		
		;	
		var canvas = document.getElementById('myCanvas');
		var context = canvas.getContext('2d');
		$.draw_init = function (x,y) {

			context.strokeStyle = '#7a7a7a';
			context.lineWidth   = 4;
			context.beginPath();
			context.moveTo(x, y); 
		}
		
		$.draw_line = function (x,y) {

			context.lineTo(x, y);
			context.stroke();
			// context.closePath();
		};
		$.clear_draw = function () {

			context.clearRect(0,0,200,200);
		}

	})(jQuery)

	
</script>

</body>
</html>