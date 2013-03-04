
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>moon</title>
<body width="1600px" height="800px">
<script type="text/javascript" src="/demo/jquery.js"></script>
<style type="text/css">

img {
	
	position:absolute;
	
}
.making {
	

}
#img_wrap{position:relative;border:1px solid;width:600px;height:600px;}
#yellow_flow_bac_1{left:250px;top:258px;}
#yellow_flow_bac_2{left:248px;top:261px;}
#yellow_flow_bac_3{left:250px;top:255px;}

#yellow_light_1{left:206px;top:-1px;}
#yellow_light_2{left:206px;top:-1px;}
#yellow_light_3{left:206px;top:-1px;}
#yellow_light_4{left:172px;top:-2px;}
#yellow_light_5{left:163px;top:-3px;}

#yellow_flow_1{left:266px;top:281px;}
#yellow_flow_2{left:266px;top:288px;}
#yellow_flow_3{left:267px;top:280px;}

#black_flow_bac_1{left:250px;top:258px;}
#black_flow_bac_2{left:248px;top:261px;}
#black_flow_bac_3{left:250px;top:255px;}

#black_light_1{left:206px;top:-1px;}
#black_light_2{left:206px;top:-1px;}
#black_light_3{left:206px;top:-1px;}
#black_light_4{left:172px;top:-2px;}
#black_light_5{left:163px;top:-3px;}

#black_flow_1{left:266px;top:281px;}
#black_flow_2{left:266px;top:288px;}
#black_flow_3{left:267px;top:280px;}


#start {
	height: 20px;
	position: absolute;
	top: 390px;
	width: 100px;
	left:0;

}


</style>
<div id ='end'>end</div>

<div id='img_wrap'><img id ="img" src="gotop.jpg"/>

<div id ='start' onclick="	test.output();">start</div>
</div>

<script>
// var test = {
	// type :{
		// big : 0,
		// small :0,
		// stone :0,
	
	// },
	
	// output : function (type) {
		// var self = this;
		// alert(self.type.big);
		// self.type.big++;
	
	// }





// }
// test.type.big++;

var arr = [ 'small', 'big', 'stone', 'small', 'big', 'stone', 'big', 'big', 'big', 'stone' ];
setInterval(function(){
	var r = Math.floor(Math.random() * 10);
	console.debug(r);
	
}, 1000);
</script>