            $(function(){
                var under_line = $('#nav li.nav-hook');
                var li_active = $('#nav li.active');
				var origin_width = li_active.find('a').width();
                var origin_left = li_active.position().left;
                under_line.css({'left':origin_left,'width':origin_width});
                $('#nav li a').mouseenter(function() {
                    under_line.stop().show();
                    li_active.removeClass('active');
                    var width = $(this).width();
                    var  left = $(this).position().left;
                    under_line.animate({
                        left : left,
                        width : width
                    },500);
                });
				$('#nav ul').mouseleave(function() {
                    under_line.animate({
                        left : origin_left,
                        width : origin_width
                    },500);
                });
            });