function $(s){
return document.getElementById(s);
}
var B=BigNews={
current:0,
next:0,
scrollInterval:0,
autoScroller:0
};
BigNews.turn=function(index){
clearInterval(BigNews.autoScroller);
BigNews.scroll(index);
}
BigNews.scroll=function(index){
var count=0;
var step=216;
var duration=16;
var b=BigNews;
b.next=index;
if(index!=b.current&&count>duration/8){
return;
}
clearInterval(b.scrollInterval);
var items=$('iiiyx_hd_item').getElementsByTagName('li');
for(var i=0;i<5;i++){
items[i].className='';
}
items[index].className='up';
var span=index-b.current;
var begin_value=$('iiiyx_hd_img').scrollTop;
var chang_in_value=span*step+(b.current*step-begin_value);
b.scrollInterval=setInterval(function(){doit(begin_value,chang_in_value)},10);
function doit(b,c){
$('iiiyx_hd_img').scrollTop=cpu(count,b,c,duration);
count++;
if(count==duration){
clearInterval(BigNews.scrollInterval);
scrollInterval=0;
count=0;
$('iiiyx_hd_img').scrollTop=b+c;
BigNews.current=index;
}
}
function cpu(t,b,c,d) {return c*((t=t/d-1)*t*t+1)+b;};
}
BigNews.auto=function(){
clearInterval(BigNews.scrollInterval);
BigNews.autoScroller=setInterval(function(){
BigNews.scroll(BigNews.current==4?0:BigNews.current+1);
},3000);
}
window.attachEvent('onload',BigNews.auto); 