(function($){
$.fn.myPlugin = function(settings){
var config = {
'foo': 'bar'
};
if (settings){$.extend(config, settings);}
return this.each(function(){
// �ض���Ԫ�صĴ���������
});
};
})(jQuery);
����ģ��
(function($){
$.myPlugin = function(settings){
var config = {
'foo': 'bar'
};
if (settings){$.extend(config, settings);}
// ����������
return this;
};
})(jQuery);