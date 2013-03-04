
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>moon</title>
<script type="text/javascript" src="/demo/jquery.js"></script>
<link rel="stylesheet" href="css/mooncake.css">
<!--[if IE 6]><style>.big,.small,.stone,.ship,#leg-1,#leg-2,#basket{behavior:url("css/iepngfix.htc")}</style><![endif]-->
<body>

<div id ="screen">
	<div id="mooncake"></div>
	<div>
		<img id='countdown3' class='countdown' src="images/mooncake/left-3.png"/>
		<img id='countdown2' class='countdown' src="images/mooncake/left-2.png"/>
		<img id='countdown1' class='countdown' src="images/mooncake/left-1.png"/>
		<img id='win' class='countdown' src="images/mooncake/win.png"/>
		<img id='failed' class='countdown' src="images/mooncake/failed.png"/>
	</div>
    <div id="chang-e">
    	<img id="chang-e-1" src="images/mooncake/chang-e-1.png" alt="">
    	<img id="chang-e-2" src="images/mooncake/chang-e-2.png" alt="">
    </div>
    <div id="ship">
    	<img id="ship-img-1" src="images/mooncake/ship-1.png" alt="">
    	
    </div>
	<div id="basket" >
		<div id ="leg">
			<img id="leg-1" src='images/mooncake/leg-b.png'/>
			<img id="leg-2" src='images/mooncake/leg-s.png'/>
		</div>
		<div id ="hand">
			<img id="hand-1"  src='images/mooncake/hand-no.png'/>
			<img id="hand-2"  src='images/mooncake/hand-ha.png'/>
			<img id="hand-3"  src='images/mooncake/hand-di.png'/>
		</div>
	</div>
	
	<div id ="energy_bar">
		<img  src='images/mooncake/energy-bar.png'/>
		<div id ="time_left">60</div>
		<div id='energy_div'>
		<img id="energy" src='images/mooncake/energy-full.png'/>
		</div>
	</div>
</div>
</body>

<script>
var MySet;
var num = 0;
var energy_div = $('#energy_div');
var basket = $('#basket');
var time_left = $('#time_left');
var key_flag = 0;
var key_control = function () {
$(document).keyup(function(event) {

	keycode = event.keyCode;
	if (keycode == 37 && key_flag==0) {
	mooncake.move.once('leg', 1,300);
	// key_flag =1;
	basket.css('left',function(index,value){
		if (parseInt(value)<=0) return;
			else
		return parseInt(value)-38;
	});
	// key_flag = 0;
	}
	if (keycode == 39 && key_flag==0) {
	mooncake.move.once('leg', 1,300);
	// key_flag=1;
	basket.css('left',function(index,value){
		if (parseInt(value)>=646) return;
			else
		return parseInt(value)+38;
	});
	// key_flag = 0;
	}
	

});
};
	



$(document).ready(function () {
	$('#countdown3').show();
	// win();
	setTimeout(countdown2,1000);
});
var countdown2 = function () {
	$('#countdown3').hide();
	$('#countdown2').show();
	setTimeout(countdown1,1000);
};
var countdown1 = function () {
	$('#countdown2').hide();
	$('#countdown1').show();
	setTimeout(game_start,1000);
};
var game_start = function () {

	$('#countdown1').hide();
	energy_div.css('width','0');
	time_left.text('60');
	key_control();
	time_func();
	new_fall();
	MySet = setInterval(new_fall,1000);


} ;

var win = function () {
	end();
	$('#win').show();	
	setTimeout('alert("win");',5000);
	mooncake.get('ship', 300);
	setTimeout(fly_ship,1400)
};
var fly_ship = function () {
	$(".ship").remove();
	
	$("#ship-img-1").show().animate({
		left: 527,
		top:  285,
		width: 130,
		height:  130
		}, 1500,'linear'
		)
		.animate({
		left: 342,
		top:  132,
		width: 100,
		height:  100
		}, 1000,'linear'
		)
		.animate({
		left: 102,
		top:  299,
		width: 64,
		height:  64
		}, 700,'linear'
		)
		.animate({
		left: 46,
		top:  381,
		width: 0,
		height:  0
		}, 300,'linear',function (){$(this).remove();}
		);

};
var failed = function () {
	end();
	$('#failed').show();	
	setTimeout('alert("failed");',3000);
};


var end = function (){
	
	clearInterval(MySet);
	clearTimeout(MyTime);
	$('.big,.small,.stone').remove();
};
var time_func = function () {
	time_left.text(time_left.text()-1);
	if (time_left.text() == 0 && num <100) {setTimeout(failed,300);return ;//失败时
	}
	MyTime = setTimeout(time_func,1000);
};

var mooncake = {
	type : {
		big : 0,
		small : 0,
		stone : 0
	},
	move : {
		// action for falling
		count : {
			big : 0,
			small : 0,
			stone : 0
		},
		status : null,
		ship_speed : null,
		falling : function(type, id, which, speed) {
			var self = this, obj = $('#' + type + '-' + id);
			which = (which == 1) ? 2 : 1;
			if (which == 1) {
				obj.addClass(type + '-falling');
			} else {
				obj.removeClass(type + '-falling');
			}
			setTimeout(function() {
				self.falling(type, id, which, speed);
			}, speed);
		},
		fall : function(type, speed) {
			var self = this, id;
			switch (type) {
			case 'big':
				id = self.count.big;
				break;
			case 'small':
				id = self.count.small;
				break;
			case 'stone':
				id = self.count.stone;
				break;
			case 'ship':
				id = 1;
				break;	
			default:
				alert('invalid type for fall');
				return false;
				break;
			}
			self.falling(type, id, 1, speed);
		},
		// action for once
		
		chang_e : null,
		hand : null,
		leg : null,
		stop : function() {
		   
			clearTimeout(this.status);
		},
		speed : 500,
		chang_e_step : 1,
		hand_step : 1,
		leg_step : 1,
		once : function(type, which,speed) {
			var self = this;			
			
			$('#' + type + ' img').hide();
			$('#' + type + '-' + which).show();
			switch (type) {
				case 'chang-e':
					which = (which == 1) ? 2 : 1;
					self.chang_e_step = which;
					if (self.chang_e_step == 1) {
						clearTimeout(this.chang_e);
					} else {

						self.chang_e = setTimeout(function() {
							self.once(type, which);
						}, self.speed);
					}
					break;
				case 'hand':
					self.hand_step = which;
					which = 1;
					
					if (self.hand_step == 1) {
						clearTimeout(this.hand);
					} else {
					
						self.hand = setTimeout(function() {
							self.once(type, which);
						}, speed);
					}
					break;
				case 'leg':
					which = (which == 1) ? 2 : 1;
					self.leg_step = which;
					if (self.leg_step == 1) {
						clearTimeout(this.leg);
					} else {

						self.leg = setTimeout(function() {
							self.once(type, which);
						}, speed);
					}
					break;
				default:
					alert('invalid type for once');
					return false;
					break;
			}	
		
			
		}
	},
	// new falling object
	get : function(type, speed) {
		var self = this.move, output = '';
		switch (type) {
		case 'big':
			self.count.big++;
			output = '<div class="big" id="big-' + self.count.big + '"></div>';
			break;
		case 'small':
			self.count.small++;
			output = '<div class="small" id="small-' + self.count.small + '"></div>';
			break;
		case 'stone':
			self.count.stone++;
			output = '<div class="stone" id="stone-' + self.count.stone + '"></div>';
			break;
		case 'ship':
			output = '<div class="ship" id="ship-1"></div>';
			break;
		default:
			break;
		}
		$('#mooncake').append(output);
		self.fall(type, speed);
	}
};
var speed_array = [1,1.5,2];
var arr = ['stone','stone','small','small','small','small','big','big','big','small'];
var new_fall = function() {
	var new_left = Math.random()*638+2;
	
	var speed = speed_array[Math.round(Math.random()*2)];
	var r = Math.round(Math.random()*9);
	var type = arr[r];
	var a_speed = 400; // 动画切换时间
	var m_spped = 2000; // 坠落时间
	mooncake.get(type, a_speed);
	// u need modify
	var img_width, img_height,energy,which_one,flag=0;
	switch (type) {
			case 'big':
				img_width = 114;
				img_height = 101;
				energy = 7;
				which_one = 2;
				break;
			case 'small':
				img_width = 66;
				img_height = 61;
				energy = 2;
				which_one = 2;
				break;
			case 'stone':
				img_width = 126;
				img_height = 96;
				energy = -7;
				which_one = 3;
				break;
			default:
				alert('invalid type for property');
				return false;
				break;
			}
			
	mooncake.move.once('chang-e', 1,500);
	
	$('.' + type + ':last').css('left',new_left+'px').animate({

		top:  400-img_height
		}, 2000/speed,'linear'
		)
		.animate({

		top:  425-img_height
		}, {
		    duration: 157/speed,
			easing: 'linear',
		step: function( now, fx ){
			position_left = $('#basket').position().left+6;
			if (new_left>position_left-img_width/2 && new_left<position_left+100-img_width/2 && flag == 0) {
			num+=energy;
			mooncake.move.once('hand', which_one,400);
			if (num<0) num=0;
			if (num >=100) { num=100;setTimeout(win,300); ;//成功时
			}
			$(this).remove();
			energy_div.css('width',125*num/100);
			flag=1;
			
			
			}
			
		},
		complete: function() {
			// alert('q');
		}		
		}

		)
		.animate({

		top:  600
		},1594/speed,'linear', function() {
		// var temp = parseInt($('#temp').val());
		// num = num + temp;
		// $('#temp').val('0');
		// score.text(num);
		$(this).remove();
		})
		;
		 
};

</script>