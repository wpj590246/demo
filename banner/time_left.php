<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=GB2312" />
<meta http-equiv="Content-Language" content="zh-cn" />

<title>ʣ��ʱ��</title>
<body>
<script type="text/javascript" src="/demo/jquery.js"></script>
<style type="text/css">
 .time_left {
  display:table;
  
  margin-top:8px ;
 } 

.time_left span {
  display :block;
  float:left;
  line-height:25px;
}  
  
.time_left i {
  color: #694D58;
  display:block;
  float:left;
  font-size:21px;  
  font-style:normal;
  font-weight:bold;
}  
  
.time_left i.ms {
  background:url("/demo/banner/micro_second.gif") no-repeat;
  margin:-3px 0 0 3px;
  height:25px;
  width:18px;
}
</style>
<script type="text/javascript">
  var date_array = ['2012-07-18','2012-07-28','2012-08-09'];


  onload  = MyInterval ;
  function MyInterval(){
    //$.each(date_array,function(i,n){})  ; //nΪdate_array[i]
  for(var i=0,j=date_array.length;i<j;i++)  {
    var endDate =date_array[i] ;
    var end= endDate.replace(/-/g,"/");
    var endsec = new Date(end);
    var cursec = new Date();
    var seconds = endsec.getTime()-cursec.getTime();
    var day = parseInt(seconds/(1000*60*60*24));var del_day_sec = parseInt(seconds%(1000*60*60*24));
    var hour = parseInt(del_day_sec/(1000*60*60));var del_hour_sec = parseInt(del_day_sec%(1000*60*60));
    var minut = parseInt(del_hour_sec/(1000*60));var del_minut_sec = parseInt(del_hour_sec%(1000*60));
    var second = parseInt(del_minut_sec/(1000));

    $("#"+i+" .d").html(day);
    $("#"+i+" .h").html(hour);
    $("#"+i+" .m").html(minut);
    $("#"+i+" .s").html(second);
    $("#"+i+" .default_time").html(parseInt(seconds/1000));
    if($("#"+i).html()=='�ѹ���') continue;
    if(parseInt(seconds/1000)<=0) {$("#"+i).html('�ѹ���');};
  }
  } 
  
  setInterval(MyInterval,'100');
</script>
<div class="time_left " id = "0">
<span style="color:#999;">����ʣ��ʱ�䣺</span>
<i class="d"></i>
<span>��</span>
<i class="h"></i>
<span>Сʱ</span>
<i class="m"></i>
<span>��</span>
<i class="s"></i>
<i class="ms"></i>
<span>��</span>
<input class="default_time" type="hidden" value="">
</div>
  
<div class="time_left " id = "1">
<span style="color:#999;">����ʣ��ʱ�䣺</span>
<i class="d"></i>
<span>��</span>
<i class="h"></i>
<span>Сʱ</span>
<i class="m"></i>
<span>��</span>
<i class="s"></i>
<i class="ms"></i>
<span>��</span>
<input class="default_time" type="hidden" value="">
</div>
  
 <div class="time_left " id = "2">
<span style="color:#999;">����ʣ��ʱ�䣺</span>
<i class="d"></i>
<span>��</span>
<i class="h"></i>
<span>Сʱ</span>
<i class="m"></i>
<span>��</span>
<i class="s"></i>
<i class="ms"></i>
<span>��</span>
<input class="default_time" type="hidden" value="">
</div>
</body>
</html>  
  
