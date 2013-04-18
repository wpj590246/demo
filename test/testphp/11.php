<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="keywords" content="#" />
        <meta name="description" content="#" />
        <title>title</title>
        <style>
            @font-face {
                font-family: 'SingleMaltaRegular';
                src: url('fonts/singlemalta-webfont.eot');
                src: url('fonts/singlemalta-webfont.eot?#iefix') format('embedded-opentype'),
                    url('fonts/singlemalta-webfont.woff') format('woff'),
                    url('fonts/singlemalta-webfont.ttf') format('truetype'),
                    url('fonts/singlemalta-webfont.svg#SingleMaltaRegular') format('svg');
                font-weight: normal;
                font-style: normal;
            }
            * {
                margin:0;
                padding:0;
                border:0;
                font-family: "SingleMaltaRegular", sans-serif ;
            }
            html {
                background-color: #F2F2F2;
            }
            div { color:red; }
            h1 {  

                font-size: 100px;  
                line-height: 100px;  
                text-shadow: -3px 0 4px #006;  
            }  
            h1 a:link,  
            h1 a:visited,  
            h1 a:hover,  
            h1 a:active {  
                font-family: "DeibiRegular", sans-serif ;
                color: #d12;  
                text-decoration: none;  
                -moz-mask-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0,0,0,1)), to(rgba(0,0,0,0))); 
            }  


            #ul {
                height: 100px;
                position: absolute;
                right: 100px;
                top: 25px;

            }

            #ul li {
			margin-right: 1.5em;
                font-size: 2.5em;
                color: #606060;
                display: block;
                float: left;
                height: 20px;
                
                cursor: pointer;
				       text-shadow:
       0 1px 1px #ddd,
       0 2px 1px #cdd,
       0 3px 1px #ccc,
       0 4px 1px #cbb,
       0 5px 1px #abb,
       0 6px 1px #aaa,
       0 7px 1px #111,
       0 8px 3px rgba(100,100,100,0.5),
       0 9px 5px rgba(100,100,100,0.3),
       0 10px 7px rgba(100,100,100,0.25),
       0 11px 9px rgba(100,100,100,0.21),
       0 12px 11px rgba(100,100,100,0.18),
       0 13px 13px rgba(100,100,100,0.1),
       0 14px 15px rgba(100,100,100,0.16),
       0 15px 17px rgba(100,100,100,0.2);
            }
            #ul li:hover {
                color: #EA6C6B;
            }
            #ul .under_line {
                border-bottom: 2px solid #EA6C6B;
                height: 1.1em;
                overflow: hidden;
                position: absolute;
                width: 62px;
                z-index: -1;
                left : 0;
                top: 4px;
				
            }
        </style>
        <link type="text/css" rel="Stylesheet" href="css/Main.css" /> 
        <script src="/demo/js/jquery.js"></script>
        <script src="/demo/js/jquery-ui.min.js"></script>

    </head>
    <body>
        <div id="ul">
            <ul>
                <li class="under_line"></li>
                <li>home</li>
                <li>game</li>
                <li>join us</li>
                <li>contact</li>
                <li>about</li>
            </ul>
        </div>
        <canvas id="myCanvas" width="600" height="400">你的浏览器还不支持哦</canvas>
        <div>First</div>
        <div>Second</div>  
        <div>Third</div>
        <h1><a href="#" mce_href="#">Jiangyujie</a></h1>  
        <div>Fourth</div>
        <font color="#CC3300"size="-1">*</font>
        <a id="1" href="#" class="forward">dd</a>
        <a class="popup" href="10.php" >jjj</a>
        <div id="2">ss<span >ss</span></div>
        <span >ss</span>
        <div>
            <input type="checkbox" id="all"/><input type="checkbox"/><input type="checkbox"/><input type="checkbox"/>
        </div>

        <div id="calendar" class=""></div>
        <img id="myimageid" alt="" src=>
        <script>
            var under_line = $('.under_line');
            $("#ul li:not(first)").mouseenter(function () {
                under_line.stop();
                var width = $(this).width();
                var  left = $(this).position().left;
                under_line.animate({
                    left : left,
                    width : width
                },500);
		
            });

            var myImage = new Image();
            var _pi = Math.PI;
            // myImage.src = "http://wkee.net/qee/wordpress/wp-content/uploads/2011/11/image.png";
            myImage.src = "/demo/test/images/1.jpeg";
            var canvas = document.getElementById('myCanvas');
            myImage.onload = function() {
                var context= ctx = canvas.getContext('2d');
                context.strokeStyle="#00f"; 
                // ctx.drawImage(myImage, 50, 50);
                // ctx.drawImage(myImage, 125, 125);
                // ctx.drawImage(myImage, 210, 210);
                // ctx.drawImage(myImage, 50, 50, 100, 100);
                // ctx.drawImage(myImage, 125, 125, 200, 50);
                // ctx.drawImage(myImage, 210, 210, 500, 500);
                // ctx.drawImage(myImage, 0, 0, 50, 50, 25, 25, 100, 100);
                // ctx.drawImage(myImage, 125, 125, 100, 100, 125, 125, 150, 150);
                // ctx.drawImage(myImage, 80, 80, 100, 100, 250, 250, 220, 220);
                // context.fillRect(0, 0, 150, 100);
                // context.strokeRect(150,100,10,10);
                context.fillStyle   = '#fff';
                // context.strokeStyle = '#f00';
                // context.lineWidth   = 4;
                ctx.fillStyle="#fff";    
                ctx.beginPath();     
                ctx.arc(200, 200, 150, 1.5*Math.PI, Math.PI/2, false);    
                ctx.closePath();    
                ctx.fill();    
                ctx.fillStyle="#000";    
                ctx.beginPath();     
                ctx.arc(200, 200, 150, Math.PI/2, 1.5*Math.PI, false);    
                ctx.closePath();    
                ctx.fill();    
                // draw sub circle    
                // start point(x, y), radius, start angle, end angle, boolean antiClockWise    
                ctx.fillStyle="#000";    
                ctx.beginPath();     
                ctx.arc(200, 275, 75, 0, Math.PI*2, false);     
                ctx.closePath();    
                ctx.fill();    
                ctx.fillStyle="#fff";    
                ctx.beginPath();     
                ctx.arc(200, 125, 75, 0, Math.PI*2, false);    
                ctx.closePath();    
                ctx.fill();    
                // fill black and white point    
                ctx.fillStyle="#fff";    
                ctx.beginPath();     
                ctx.arc(200, 275, 10, 0, Math.PI*2, false);     
                ctx.closePath();    
                ctx.fill();    
                ctx.fillStyle="#000";    
                ctx.beginPath();     
                ctx.arc(200, 125, 10, 0, Math.PI*2, false);    
                ctx.closePath();    
                ctx.fill();    
                // set transparency value      
                ctx.globalAlpha = 0.2;       
                // Draw semi transparent text    
                ctx.fillStyle = "#f00";    
                ctx.font = "32pt Arial";    
                ctx.fillText("Hello", 220, 200);    
                ctx.fillText("Canvas", 100, 250);    
                ctx.globalAlpha = 1.0;     
                ctx.shadowOffsetX = 2;      
                ctx.shadowOffsetY = 2;      
                ctx.shadowBlur = 2;      
                ctx.shadowColor = "rgba(0, 0, 0, 0.5)";      
                ctx.fillStyle = "#000";    
                ctx.font = "20px Times New Roman";    
                ctx.fillText("-created by 53", 130, 30);   
            }


            $("#calendar").datepicker({
                inline: true,
                // firstDay: 1,
                showOtherMonth: true,
                dayNamesMin:['星期天','星期一','星期二','星期三','星期四','星期五','星期六']
		
            });


            var tog = true;
            $("#all").click(function () {
                $(this).siblings().attr("checked",tog);
                tog = !tog;
            });


            jQuery('a.popup').live('click', function(event){  
                // event.preventDefault();
                newwindow=window.open($(this).attr('href'),'','height=200,width=150');  
                if (window.focus) {  
                    newwindow.focus();  
			
                }  
                return false;  
            }); 
            $q = $("#2");
            $("span",$q).draggable();
            var elems = document.getElementsByTagName("div"); // returns a nodeList
            elems = $("div");
            var arr = $.makeArray(elems);
            arr.reverse(); // use an Array method on list of dom elements
            $(arr).appendTo(document.body);
	
            $.arr_join = function (j,arr) {
                return arr.join(j);
	
            };
            jQuery.fn.log = function (msg) {  
                // console.log("%s: %o", msg, this);  
                return this;  }
            ;  
            $($.arr_join(",#num_",[1,2,3])).log("ee");

            $("#2").click(function () {
                $("#1").click();
            });
	
        </script>

    </body>
</html>