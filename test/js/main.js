($(function(){
    $.fn.coffee = function (obj) {
        for(var eType in obj) {
            for (var selector in obj[eType]) {
                $(this).on(eType,selector,obj[eType][selector]);
            }
        }
        
    }
    
    var $nav = $('#nav'),
    $under_line = $('li.under_line',$nav),
    $active = $('li.active',$nav),
    o_left = $active.position().left,
    o_width = $active.width();
    
    $under_line.css({
        'width':o_width,
        'left':o_left
    });
    $nav.on('mouseenter','li',function () {
        $under_line.stop();
        var width = $(this).width();
        var  left = $(this).position().left;
        $under_line.animate({
            left : left,
            width : width
        },500);
		
    }).mouseleave(function () {
        $under_line.stop();
        $under_line.animate({
            left : o_left,
            width : o_width
        },500);
		
    })
}))