var MySet;
var num = 0;
var energy_div = $('#energy_div');
var basket = $('#basket');
var time_left = $('#time_left');

var key_control = function () {
$(document).keyup(function(event) {

	keycode = event.keyCode;
	if (keycode == 37 ) {
	mooncake.move.once('leg', 1,300);

	basket.css('left',function(index,value){
		if (parseInt(value)<=0) return;
			else
		return parseInt(value)-38;
	});

	}
	if (keycode == 39 ) {
	mooncake.move.once('leg', 1,300);

	basket.css('left',function(index,value){
		if (parseInt(value)>=646) return;
			else
		return parseInt(value)+38;
	});

	}
	

});
};
	



var starttime =function () {
	$('#countdown3').show();
	// win();
	setTimeout(countdown2,1000);
}
var countdown2 = function () {
	$('#countdown3').hide();
	$('#countdown2').show();
	setTimeout(countdown1,1000);
}
var countdown1 = function () {
	$('#countdown2').hide();
	$('#countdown1').show();
	setTimeout(game_start,1000);
	
}
var game_start = function () {

	$('#countdown1').hide();
	energy_div.css('width','0');
	time_left.text('60');
	key_control();
	MyTime = setInterval(time_func,1000);
	new_fall();
	MySet = setInterval(new_fall,1000);


} 

var win = function () {
	end();
	var use_time = 60-time_left.text(); 
	window.location.href="result.php?id=1&time="+use_time; 
	// $('#win').show();	
	// setTimeout(popup,5000);
	// mooncake.get('ship', 300);
	// setTimeout(fly_ship,1400);
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
	window.location.href="result.php?id=0&time=60"; 
	// $('#failed').show();	
	// setTimeout(popup,3000);
};
var popup = function () {
	$('#popup').fadeIn();
	// $('#popup button').click(function() {this.blur();alert('q');});

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
						$("#something-black").show().animate({
							top : -40,
							left : 477,
							width : 40,
							height : 33
						}, 300,'linear',function () { $(this).css({		
							top : 73,
							left : 528,
							width : 17,
							height : 14}).hide();
							}
	
						);
						self.chang_e = setTimeout(function() {
							self.once(type, which);
						}, self.speed);
					}
					break;
				case 'hand':
					$('#face img').hide();
					$('#face-' + which).show();
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
var speed_array = [1,1.3,1.6];
var arr = [ 'small', 'big',  'small', 'big',  'big', 'big', 'big' ,'stone','stone', 'stone'];
var big_energy = 2.5,small_energy = 6,stone_energy = -8;
var new_fall = function() {
	var new_left = Math.random()*638+2;
	
	var speed = speed_array[Math.round(Math.random()*2)];
	var r = Math.floor(Math.random()*10);
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
				energy = big_energy;
				which_one = 2;
				break;
			case 'small':
				img_width = 66;
				img_height = 61;
				energy = small_energy;
				which_one = 2;
				break;
			case 'stone':
				img_width = 126;
				img_height = 96;
				energy = stone_energy;
				which_one = 3;
				break;
			default:
				alert('invalid type for property');
				return false;
				break;
			}
			
	mooncake.move.once('chang-e', 1,500);
	
setTimeout( function () {
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
			energy_div.css('width',84*num/100);
			flag=1;
			
			
			}
			
		}		
		}

		)
		.animate({

		top:  600
		},1594/speed,'linear', function() {

		$(this).remove();
		})
		;
},300);		 
};