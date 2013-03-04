var mooncake = {
	type : {
		big : 0,
		small : 0,
		stone : 0
	},
	move : {
		status : null,
		speed : 500,
		stop : function() {
			clearTimeout(this.status);
		},
		fall : function(type, which) {
			if (!(type == 'big' || type == 'small' || type == 'stone')) {
				alert('invalid type for fall');
				return false;
			}
			var self = this;
			which = (which == 1) ? 2 : 1;
			$('#' + type + ' img').hide();
			$('#' + type + '-' + which).show();
			self.status = setTimeout(function() {
				self.fall(type, which);
			}, self.speed);
		},
		step : 1,
		once : function(type, which) {
			if (!(type == 'chang-e' || type == 'hand' || type == 'foot')) {
				alert('invalid type for once');
				return false;
			}
			var self = this;
			which = (which == 1) ? 2 : 1;
			self.step = which;
			$('#' + type + ' img').hide();
			$('#' + type + '-' + which).show();
			if (self.step == 1) {
				self.stop();
			}
			else {
				self.status = setTimeout(function() {
					self.once(type, which);
				}, self.speed);
			}
		}
	}
};

// mooncake.move.start('big', 1);

// mooncake.move.start('small', 1);
// mooncake.move.start('stone', 1);
// mooncake.move.stop();

mooncake.move.once('chang-e', 1)