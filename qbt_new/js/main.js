$(function() {
	$('#qbt-slider').coinslider({
		width : 740,
		height : 360,
		delay : 5000
	});
	var tabs = {
		tabsTitle : '.tabs-title',
		bodyClass : '.tabs-body',
		attrAndActiveClass : [ 'active', 'data-tile' ],
		listenEven : function() {
			var self = this, attr = self.attrAndActiveClass[1], activeClass = self.attrAndActiveClass[0];
			$(self.tabsTitle).click(function() {
				var tempName = $(this).attr(attr);
				$(self.tabsTitle).removeClass(activeClass);
				$(this).addClass(activeClass);
				$(self.bodyClass).removeClass(activeClass);
				$('.' + tempName).addClass(activeClass);
			});
		}
	};
	tabs.listenEven();
});