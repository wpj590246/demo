<html>
    <head>
        <style>
            div { margin:3px; width:50px; position:absolute;
                  height:50px; left:10px; top:30px; 
                  background-color:yellow; }
            div.red { background-color:red; }  
        </style>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
    </head>
    <body><div data-num="1">
            <button>Start</button>  
        </div>
        <script>
            $.extend({
                alertWhileClick : function(){
                    $("button").click(function(){
                        alert($("button").val());
                    });            
                }        
            }); 
            // $.alertWhileClick();
            //感觉像是 $.extend($,{...}); 的简写  省略的第一个感觉是前面匹配的选择器
            $.fn.extend({
                alertWhileClick : function(){
                    $(this).click(function(){
                        alert($(this).data('num'));
                    });            
                }        
            }); //也可以直接写  $.fn.alertWhileClick = function () {} ;
            $("button").alertWhileClick();
            // $("button").click(function () {
	
            // $("div").animate({left:'+=200px'}, 2000);
            // $("div").animate({top:'0px'}, 600);
            // $("div").queue(function () {
            // $(this).toggleClass("red");
            // $(this).dequeue();
            // });
            // $("div").animate({left:'10px', top:'30px'}, 700);
            // });
        </script>

    </body>
</html>