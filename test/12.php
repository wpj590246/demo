<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="keywords" content="#" />
        <meta name="description" content="#" />
        <title>title</title>
        <style>
            #container {


            }
            .pager a,#any_page {
                border: 1px solid #AAAAAA;
                color: #0A0A0A;
                display: inline-block;
                *display:inline;
                *zoom : 1;
                font-size: 12px;
                margin: 0 3px;

                font-weight: bold;
                vertical-align: middle;

            }
            .pager a {

                background-color: #E4F3F8;

                line-height: 21px;
                height: 21px;

                width: 30px;

                text-decoration: none;

            }
			.pager .pre,.pager .next {
				width : 60px;
			}
            .pager a:hover {

                text-decoration: underline;
            }
            .pager .current {
                background-color: pink;
            }
            #pager,#any_page {
                text-align: center;
            }

            #any_page {
                background-color: #F4F3F8;
                border-radius: 16px 16px 16px 16px;
                height: 19px;
                width: 33px;
                line-height: 19px;
            }
        </style>
        <script src="/demo/js/jquery.js"></script>
    </head>
    <body>
        <?php
        $expire = time() + 10; // 设置24小时的有效期
        setcookie("var_name", "var_value", -1);
        ?>
        <div id="container">
            <div>line 1</div>
            <div>line 2</div>
            <div>line 3</div>
            <div>line 4</div>
            <div id="list">
                <?php include('post-12.php') ?>
            </div>
            <div id="pager">
                <?php include('post-12-p.php') ?>
            </div>
        </div>

        <script>
	
            (function ($) {
                var $pager = $("#pager"),$list = $("#list"),$any_page = $("#any_page");
		
                $pager.on('click','a',function (event) {
                    var $this = $(this);
                    event.preventDefault();
                    if(!$this.hasClass('current')) {
                        var num = $this.attr('href');
                        ajax_post(num)
                        // console.log(num);

                    }
					
                });
                $any_page.live('focusout',function () {
                    var num = $(this).val();
                    // alert('1');
                    num = num.replace(/\D/g,'');
                    ajax_post(num);
					return false;
                });
                var ajax_post = function (num) {
		
                    $.ajax({
                        type : 'POST',
                        url : 'post-12.php',
                        data : {
                            page : num
                        },
                        success : function (msg) {
                            $list.html(msg);
                        }
                    });
                    $.ajax({
                        type : 'POST',
                        url : 'post-12-p.php',
                        data : {
                            page : num
                        },
                        success : function (msg) {
                            $pager.html(msg);
                        }
			
                    });
                }
            })(jQuery);
	
            /* 
                (function ($) {
                        var Jtest = function () {
			
                        };
                        Jtest.fn = Jtest.prototype = {

                        test_in : function () {alert('2');}
			
                        };
			
                        window.Jtest = Jtest;//这样就可以在闭包外面调用
			
                })(jQuery);
                var temp = new Jtest();
                temp.test_in();  //这样调用会产生很多对象，浪费内存  改为工厂模式 如下 
		
                Jtest.fn.aaa = function () {alert('aaa');};
                temp.aa = function () {alert('aa');}; //temp.fn.aa 不行 已经实例化?
                var temp2 = new Jtest();
                // temp2.aa();
                temp.aa();
                temp2.aaa();
                temp.aaa();
             */
		
            /* 
                (function () {
                        var Jtest2 = function () {
                                return Jtest2.fn.init();
                                // return this; 返回window
                        };
                        Jtest2.fn = Jtest2.prototype = {
						
						Jtest2:'2',
						
                        init : function () {return this;},
			
                        test_in : function () {alert('2');}
			
                        };
			
                        window.Jtest2 = Jtest2;//这样就可以在闭包外面调用
			
                })();
				var aa=Jtest2(),bb=Jtest2();
				
                Jtest2().test_in(); //可行
                Jtest2.fn.aa = function () {alert('aa');};
                Jtest2().aa(); //可行
				 console.log(aa.Jtest2);aa.Jtest2='nooo'; console.log(aa.Jtest2); console.log(bb.Jtest2);
		  */
		  /* 
            (function () {
                var Jtest3 = function () {
                    // return Jtest3.fn.init(); //改为 (1)
                    return new Jtest3.fn.init();
				
                    // return this; 返回window
                };
                Jtest3.fn = Jtest3.prototype = {
                    Jtest3 : '3',
                    init : function () {
                        this.Jtestb = 'b';
                        return this;
			
                    },
			
                    test_in : function () {alert('2');}
			
                };
				Jtest3.fn.init.prototype = Jtest3.fn;
                window.Jtest3 = Jtest3;//这样就可以在闭包外面调用
			
            })();
			var a = Jtest3();a.Jtest3='aaa';a.Jtestb='111';var b = Jtest3();b.Jtest3='bbb';b.Jtestb='222';
            // console.log(a.Jtest3);console.log(b.init().init().init().init().Jtest3);
			console.log(a.Jtestb);console.log(b.Jtestb);console.log(b.init().init().Jtestb); // 111  222 b
			//(1)通过实例化init()初妾化类型，限定了init()方法里的this，只在init()函数内活动，不让它超出范围
		 */
		
		
		
        </script>
    </body> 
</html>

























