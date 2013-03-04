(function($){
$.fn.myPlugin = function(settings){
var config = {
'foo': 'bar'
};
if (settings){$.extend(config, settings);}
return this.each(function(){
// 特定于元素的代码在这里
});
};
})(jQuery);
方法模板
(function($){
$.myPlugin = function(settings){
var config = {
'foo': 'bar'
};
if (settings){$.extend(config, settings);}
// 代码在这里
return this;
};
})(jQuery);