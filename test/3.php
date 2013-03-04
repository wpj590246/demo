<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<body id="">  
<div id ="stop">stop</div>
<div class="shadow"></div><div class="shadow"></div>
<div id='shake1' class='shake'></div><div id='shake2' class='shake'></div>
<div class="trigger">Trigger</div>
<div class="result"></div>
<div class="log"></div>
<div class="keydown">keydown</div>



<script type="text/javascript" src="/demo/js/jquery.js"></script>
<style>
body .light {background-color : #CDE6FE;}

.shadow {
	width : 50px;
	height : 50px;
	padding :3px;
	background-color: #EFEFEF;
 border-radius: 12px;
} 

.shake {
    background: url("1.jpeg") no-repeat scroll 0 0 #CDE6FE;
   border-radius: 10px;
    height: 50px;
  
   	top: 30px;
	left: 50px;
	position: relative;

    width: 50px;
	/* transition: all 0.5s ease 0.01s; */
}
</style>

<script language="javascript">

var key_control = function() {
	$(document).keydown(function(event) {
		keycode = event.keyCode;
		console.log(keycode);
	});
};
var disable_key_control = function() {
	$(document).unbind();
};
var callbacks = $.Callbacks();
$(".keydown").toggle(function () {
key_control();},function () {

disable_key_control();});

/*  //关于ajax的方法

$('.log').ajaxSend(function() {
  $(this).text('Triggered ajaxSend handler.');
});
$('.log').ajaxComplete(function() {
  $(this).after('Triggered ajaxSend handler.');
});



$('.trigger').click(function() {
  $('.result').load('6.php');
  $.ajax({
	success : function () {alert('success');},
	send : function () {alert('send');}, //这个不行  用beforeSend
	complete : function () {alert('complete');}
});
});
 */
 
/*  //震动效果
var left,top1,pi=Math.PI;
var shake_obj =  $(".shake");
var shadow = $(".shadow");
shake_obj.one("click",function() {Shake2.shake_del($(this).attr('id'));});
shadow.hover(function () {$(this).toggleClass("light");});
var Shake2 = {
	org_raduis : 3,
	step : [],
	timer : [],
	radius : [],
	shake : function (obj) {
						var self = this;
						// alert(typeof(self.radius[0]));alert(typeof(self.radius[1]));
						// console.debug(timer[obj]) ;
						
                        if (self.step[obj] == 2*pi) {
							// alert('1') ;
                            self.step[obj] = 0 ;
							// console.debug(obj+"----"+radius[obj]) ;
							self.radius[obj]-=1 ;
							
							if (self.radius[obj]<2) {
								clearInterval(self.timer[obj]) ;
								$("#"+obj).one("click",function() {
									self.shake_del(obj);
									
									});
							}
                        }
						left = 50 + self.radius[obj] * Math.sin(self.step[obj]) ;
						top1 = 30 + self.radius[obj] * Math.cos(self.step[obj]) ;
                        $("#"+obj).css({'left': left ,'top' : top1 }) ;
                        
                        self.step[obj] += 0.05*pi ;
			},
	shake_del : function (obj) {
	
					var self = this;
					// var test = new Array();
					// shake2 = new Shake2;
					// alert($(e).attr("class"));
					// Shake2.shake(obj);
					// alert(obj);
					self.radius[obj] = self.org_raduis;
					self.step[obj] = 0;
					self.timer[obj] = setInterval(function () {Shake2.shake(obj)},6); 
					// setTimeout(function () {clearInterval(this.timer[obj])},2000);
		
				}
};	

 */
 
 /* 关于 js封装
 function Person(name,age) {
   this.name = name;
   this.age = age;
   this.getName = function() {
      return this.name;
   }
}
p1=new Person('dsd',1); 
*/
function Person(name)
    {
        this.name = name;
    };
    
    Person.prototype.company = "Microsoft"; //原型的属性
    
    Person.prototype.SayHello = function()  //原型的方法
    {
        console.log("Hello, I'm " + this.name + " of " + this.company);
    };
    
    var BillGates = new Person("Bill Gates");
    BillGates.SayHello();
	 var SteveJobs = new Person("Steve Jobs");
	   SteveJobs.company = "Apple"; 
	   // Person.prototype.company = "Apple";  这个会改变
	    SteveJobs.SayHello = function() 
		  {
        alert("Hi, " + this.name + " like " + this.company + ", ha ha ha ");
    };

	 SteveJobs.SayHello();
BillGates.SayHello(); 

/* 
function Person(firstName, lastName, age)
    {
        //私有变量：
        // var _firstName = firstName;
        // var _lastName = lastName;

        //公共变量:
        this.age = age;

        //方法：
        this.getName = function()
        {
            return(firstName + " " + lastName);
        };
        this.SayHello = function()
        {
            alert("Hello, I'm " + firstName + " " + lastName);
        };
    };
    
    var BillGates = new Person("Bill", "Gates", 53);
    var SteveJobs = new Person("Steve", "Jobs", 53);
    
    BillGates.SayHello();
    SteveJobs.SayHello();
    alert(BillGates.getName() + " " + BillGates.age);
    alert(BillGates.firstName);  
 */
 /* 
  function Person(name)
    {
        this.name = name;   //在构造函数中定义成员
    };
    
    //方法定义到构造函数的prototype上
    Person.prototype.SayHello = function()
    {
        alert("Hello, I'm " + this.name);
    };    
    
    //子类构造函数
    function Employee(name, salary)
    {
        Person.call(this, name);    //调用上层构造函数
        this.salary = salary;       //扩展的成员
    };
    
    //子类构造函数首先需要用上层构造函数来建立prototype对象，实现继承的概念
    Employee.prototype = new Person()   //只需要其prototype的方法，此对象的成员没有任何意义！
    
    //子类方法也定义到构造函数之上
    Employee.prototype.ShowMeTheMoney = function()
    {
        alert(this.name + " $" + this.salary);
    };
    
    var BillGates = new Person("Bill Gates");
    BillGates.SayHello();    
    
    var SteveJobs = new Employee("Steve Jobs", 1234);
    SteveJobs.SayHello();
    SteveJobs.ShowMeTheMoney(); 
 */
</script>

</body>
</html>