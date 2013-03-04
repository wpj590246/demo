
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>moon</title>
<body width="1600px" height="800px">
<script type="text/javascript" src="/demo/jquery.js"></script>
<style type="text/css">

#screen {
    border: 1px solid;
    height: 500px;
    margin: 71px;
	overflow:hidden;
    position: relative;
    width: 88%;
	background: url("") no-repeat scroll 0 0 transparent;
}
.mooncake {
	position:absolute;
	top:-100px;
	width:80px;
	width:84px;
	height:81px;
	background-color:yellow;

}

#basket {
    background-color: black;
    height: 20px;
    position: absolute;
    top: 461px;
    width: 80px;
	left:0%;
}
#score {
	display:inline;
    height: 20px;
	padding-left: 10px;
}
#time_left {

    height: 20px;
    position: absolute;
    top: 60px;
    left: 330px;
	z-index:11;
}
#score_div {
    height: 20px;
    position: absolute;
    top: 59px;
    left: 376px;
	z-index:11;
}
#mooncake{
	width:84px;
	height:81px;
	background-color:yellow;
}

}
</style>
<div id="run">run</div><div id="stop">stop</div>
<div id="mooncake" ></div>
<div id ="screen">

<div id="basket" ></div>
<div id ="time_left">60</div>
<div id='score_div'>score<div id ="score">0</div> %</div>
</div>


<script>
var MySet;
var num = 0;
var score = $('#score');
var basket = $('#basket');
var time_left = $('#time_left');
var key_flag = 0;
var key_control = function () {
$(document).keydown(function(event) {
	keycode = event.keyCode;
	// if (keycode == 37) {basket.css('left','-=10px');if (basket.css('left').match(/[-\d]*/) < 0) basket.css('left','0px')}
	// if (keycode == 39) {basket.css('left','+=10px');if (basket.css('left').match(/[-\d]*/) > 420) basket.css('left','420px')}
	if (keycode == 37 && key_flag==0) {key_flag =1;basket.css('left',function(index,value){
		if (parseInt(value)<=0) return;
			else
		return parseInt(value)-15;
	});
	key_flag = 0;
	}
	if (keycode == 39 && key_flag==0) {key_flag=1;basket.css('left',function(index,value){
		if (parseInt(value)>=420) return;
			else
		return parseInt(value)+15;
	});
	key_flag = 0;
	}
	
	
	
	
	// if (keycode == 37)  {
	
		// basket.animate({'left':'0px'},
		// { duration:1000,
		  // easing:'linear',
		  // step:function(now,fx){
			
		  
		  
		  
		  // }
		
		
		// }
		// );}
	// if (keycode == 39)  basket.animate({'left':'420px'},1000,'linear');
});
}
	var speed_array = [1,1.5,2];
	var energy_array = [2,2,2,2,2,7,7,7,-7,-7];
	var fall_down = function () {
		var new_left = Math.random()*10*48+10;//月饼的左偏移
		
		var speed = speed_array[Math.floor(Math.random()*3)];
		// var speed = 1;
		var energy = energy_array[Math.floor(Math.random()*10)];
		var flag = 0;
		var new_fall = $('#mooncake').clone().removeAttr('id').addClass('mooncake').css('left',new_left+'px');
		new_fall.appendTo('#screen');
		if (energy == 2) {
			new_fall.text('我是小月饼');
		
		} else if (energy == 7) {
			new_fall.text('我是大月饼');
		
		} else {new_fall.text('我是大陨石');}
		
		
		
		
		
		
		
		
		new_fall.animate({

		top:  380
		}, 2000/speed,'linear',
		// function( now, fx ){
      // alert(now);alert(fx);
    // }

		function() {
		// $(this).remove();
		// position_left = $('#basket').position().left;
		// if (new_left>position_left-40 && new_left<position_left+40) {num++;score.text(num);$(this).remove();}
		
		}
		)
		.animate({

		top:  450
		}, {
		    duration: 350/speed,
			easing: 'linear',
		step: function( now, fx ){
			// var temp = 0;
			position_left = $('#basket').position().left;
			// return;
			if (new_left>position_left-60 && new_left<position_left+60 && flag == 0) {
			num+=energy;
			if (num<0) num=0;
			if (num >=100) { num=100;end(); alert('you success');//成功时
			}
			$(this).remove();
			score.text(num);
			flag=1;
			
			
			}
			
		},
		complete: function() {
			// alert(temp);
		}		
		}

		)
		.animate({

		top:  500
		},200/speed,'linear', function() {
		// var temp = parseInt($('#temp').val());
		// num = num + temp;
		// $('#temp').val('0');
		// score.text(num);
		$(this).remove();
		})
		;
		
	}

$('#run').click(function() {
	countdown();
	$(this).hide();
});
// $(document).ready(fall_down);
var countdown = function () {
	//换图片倒计时
	
	setTimeout(game_start,3000);
}
var game_start = function () {

	
	score.text('0');
	time_left.text('60');
	key_control();
	time_func();
	fall_down();
	MySet = setInterval(fall_down,1000);
	changer_move();
    setTimeout(end,60000);

} 

$('#stop').click(function(){
	
	end();

});


var end = function (){
	$('#run').show();
	clearInterval(MySet);
	$('.mooncake').remove();
	clearTimeout(MyTime);
}
var time_func = function () {
	time_left.text(time_left.text()-1);
	if (time_left.text() == 0 && num <100) {alert('You Falled');//失败时
	}
	MyTime = setTimeout(time_func,1000);
}

var changer_move = function () {
	$().animate({},5000);

}



</script>