<!DOCTYPE HTML>
<html lang=zh-cn>
    <head>
        <meta charset=utf-8>
        <title>css3下拉菜单导航</title>
        <style>
            *{margin:0px;padding:0px;}
            body{background:#b1b1b1;margin:0px;padding:0px;font-size:14px;color:#000;}
            .tips{width:702px;margin:0 auto;line-height:24px;padding-top:10px;}
            .bredcolor{color:#fff;}
            #menu {width:700px;text-align:center;height:38px;background:#069;margin:50px auto 300px auto;padding:3px 6px;border-radius:6px;box-shadow:0 15px 10px -15px rgba(0,0,0,0.5);}
            #menu ul {margin:0;padding:0;list-style:none;white-space:nowrap;text-align:left;background:#069;}
            #menu ul {display:inline-block;} 
            #menu li {margin:0;padding:0;list-style:none;}
            #menu li {display:inline-block;display:inline;}
            #menu ul ul {position:absolute;left:-9999px;opacity:0;padding:3px 6px;border-radius:6px;box-shadow:0 15px 10px -15px rgba(0,0,0,0.5);
                         -webkit-transition: opacity 1s;
                         -moz-transition: opacity 1s;
                         -ms-transition: opacity 1s;
                         -o-transition: opacity 1s;
                         transition: opacity 1s;
            }
            #menu ul.level1 {margin:0 auto;}
            #menu ul.level1 li.level1-li {float:left;display:block;position:relative;}
            #menu a {display:block;font:normal 12px tahoma, arial, 宋体b8b\4f53, sans-serif;color:#fff;line-height:30px;text-decoration:none;padding:0 20px 0 10px;margin:3px;background:#069;border:1px solid #09c;border-radius:3px;
                     background-image:-webkit-gradient(linear, 0 0, 0 100%, color-stop(0, rgba(255, 255, 255, 0.7)), color-stop(0.5, rgba(255, 255, 255, 0.2)), color-stop(0.5, transparent), to(rgba(255, 255, 255, 0.3)));
                     background-image:-moz-linear-gradient(top, rgba(255, 255, 255, 0.7) 0, rgba(255, 255, 255, 0.2) 50%, transparent 50%, rgba(255, 255, 255, 0.3) 100%);
                     background-image:-ms-linear-gradient(top, rgba(255, 255, 255, 0.7) 0, rgba(255, 255, 255, 0.2) 50%, transparent 50%, rgba(255, 255, 255, 0.3) 100%);
                     background-image:-o-linear-gradient(top, rgba(255, 255, 255, 0.7) 0, rgba(255, 255, 255, 0.2) 50%, transparent 50%, rgba(255, 255, 255, 0.3) 100%);
                     background-image:linear-gradient(top, rgba(255, 255, 255, 0.7) 0, rgba(255, 255, 255, 0.2) 50%, transparent 50%, rgba(255, 255, 255, 0.3) 100%);
                     -webkit-transition: 0.25s;
                     -moz-transition: 0.25s;
                     -ms-transition: 0.25s;
                     -o-transition: 0.25s;
                     transition: 0.25s;
            }
            #menu input {display:none;}
            #menu label {display:block;font:normal 12px tahoma, arial, 宋体b8b\4f53, sans-serif;color:#fff;line-height:30px;padding:0 20px 0 10px;margin:3px;position:relative;background:#069;border:1px solid #09c;border-radius:3px;
                         background-image:-webkit-gradient(linear, 0 0, 0 100%, color-stop(0, rgba(255, 255, 255, 0.7)), color-stop(0.5, rgba(255, 255, 255, 0.2)), color-stop(0.5, transparent), to(rgba(255, 255, 255, 0.3)));
                         background-image:-moz-linear-gradient(top, rgba(255, 255, 255, 0.7) 0, rgba(255, 255, 255, 0.2) 50%, transparent 50%, rgba(255, 255, 255, 0.3) 100%);
                         background-image:-ms-linear-gradient(top, rgba(255, 255, 255, 0.7) 0, rgba(255, 255, 255, 0.2) 50%, transparent 50%, rgba(255, 255, 255, 0.3) 100%);
                         background-image:-o-linear-gradient(top, rgba(255, 255, 255, 0.7) 0, rgba(255, 255, 255, 0.2) 50%, transparent 50%, rgba(255, 255, 255, 0.3) 100%);
                         background-image:linear-gradient(top, rgba(255, 255, 255, 0.7) 0, rgba(255, 255, 255, 0.2) 50%, transparent 50%, rgba(255, 255, 255, 0.3) 100%);
                         -webkit-transition: 0.25s;
                         -moz-transition: 0.25s;
                         -ms-transition: 0.25s;
                         -o-transition: 0.25s;
                         transition: 0.25s;
            } 
            #menu label img {position:absolute;left:0;top:0;width:100%;height:100%;}
            #menu label b {color:#ff0;}
            #menu ul.level1 li.level1-li a.level1-a {float:left;}
            #menu input#tab1:checked ~ ul.level1 ul.ul1,
            #menu input#tab2:checked ~ ul.level1 ul.ul2,
            #menu input#tab3:checked ~ ul.level1 ul.ul3 {opacity:1;left:-6px;top:50px;}
            #menu input#tab4:checked ~ ul.level1 ul.ul4 {opacity:1;left:auto;right:0;top:50px;}
            #menu input#tab2a:checked ~ ul.level1 ul.ul2,
            #menu input#tab2b:checked ~ ul.level1 ul.ul2,
            #menu input#tab2c:checked ~ ul.level1 ul.ul2,
            #menu input#tab2aa:checked ~ ul.level1 ul.ul2 {opacity:1;left:-6px;top:50px;}
            #menu input#tab2a:checked ~ ul.level1 ul.ul2 ul.ul2a,
            #menu input#tab2b:checked ~ ul.level1 ul.ul2 ul.ul2b,
            #menu input#tab2c:checked ~ ul.level1 ul.ul2 ul.ul2c,
            #menu input#tab2aa:checked ~ ul.level1 ul.ul2 ul.ul2a,
            #menu input#tab2aa:checked ~ ul.level1 ul.ul2 ul.ul2a ul.ul2aa {opacity:1;left:100%;top:auto;margin-top:-40px;margin-left: 5px;}
            #menu input#tab4a:checked ~ ul.level1 ul.ul4,
            #menu input#tab4b:checked ~ ul.level1 ul.ul4,
            #menu input#tab4aa:checked ~ ul.level1 ul.ul4 {opacity:1;left:auto;right:0;top:50px;}
            #menu input#tab4a:checked ~ ul.level1 ul.ul4 ul.ul4a,
            #menu input#tab4b:checked ~ ul.level1 ul.ul4 ul.ul4b,
            #menu input#tab4aa:checked ~ ul.level1 ul.ul4 ul.ul4a,
            #menu input#tab4aa:checked ~ ul.level1 ul.ul4 ul.ul4a ul.ul4aa {opacity:1;left:auto;right:100%;top:auto;margin-top:-40px;margin-right:5px;}
            #menu li a:hover {border-color:#fff;} 
            #menu label.close {position:absolute;width:100%;height:30px;display:none;padding:0;left:0;top:0;border:0;background:transparent;}
            #menu input#tab1:checked ~ ul.level1 label.lab1,
            #menu input#tab2:checked ~ ul.level1 label.lab2,
            #menu input#tab2a:checked ~ ul.level1 label.lab2,
            #menu input#tab2b:checked ~ ul.level1 label.lab2,
            #menu input#tab2c:checked ~ ul.level1 label.lab2,
            #menu input#tab2aa:checked ~ ul.level1 label.lab2,
            #menu input#tab3:checked ~ ul.level1 label.lab3,
            #menu input#tab4:checked ~ ul.level1 label.lab4,
            #menu input#tab4a:checked ~ ul.level1 label.lab4,
            #menu input#tab4b:checked ~ ul.level1 label.lab4,
            #menu input#tab4aa:checked ~ ul.level1 label.lab4 {display:block;}
        </style>
    </head>
    <body>
        <div id="menu">
            <input type="radio" name="tab" id="tab1" class="tabs">
            <input type="radio" name="tab" id="tab2" class="tabs">
            <input type="radio" name="tab" id="tab2a" class="tabs">
            <input type="radio" name="tab" id="tab2aa" class="tabs">
            <input type="radio" name="tab" id="tab2ab" class="tabs">
            <input type="radio" name="tab" id="tab2b" class="tabs">
            <input type="radio" name="tab" id="tab2c" class="tabs">
            <input type="radio" name="tab" id="tab3" class="tabs">
            <input type="radio" name="tab" id="tab4" class="tabs">
            <input type="radio" name="tab" id="tab4a" class="tabs">
            <input type="radio" name="tab" id="tab4aa" class="tabs">
            <input type="radio" name="tab" id="tab4b" class="tabs">
            <input type="radio" name="tab" id="tabclose" class="tabs">

            <ul class="level1">
                <li class="level1-li"><a class="level1-a" href="#">首 页</a></li>
                <li class="level1-li"><label for="tab1" class="open"><img src="http://www.xker.com/xkerfiles/allimg/1208/1_120830155044_1.gif" alt="">关于我 <b>↓</b></label><label for="tabclose" class="close lab1"><img src="http://www.xker.com/xkerfiles/allimg/1208/1_120830155044_1.gif" alt=""></label>
                    <ul class="ul1">
                        <li><a href="#">邮 箱</a></li>
                        <li><a href="#">电 话</a></li>
                        <li><a href="#">地 址</a></li>
                    </ul>
                </li>
                <li class="level1-li"><label for="tab2"><img src="http://www.xker.com/xkerfiles/allimg/1208/1_120830155044_1.gif" alt="">度 假 <b>↓</b></label><label for="tabclose" class="close lab2"><img src="http://www.xker.com/xkerfiles/allimg/1208/1_120830155044_1.gif" alt=""></label>
                    <ul class="ul2">
                        <li><a href="#">度假图片</a></li>
                        <li><label for="tab2a"><img src="http://www.xker.com/xkerfiles/allimg/1208/1_120830155044_1.gif" alt="">度假商店 <b>→</b></label>
                            <ul class="ul2a">
                                <li><a href="#">买东西</a></li>
                                <li><a href="#">互联网销售</a></li>
                                <li><label for="tab2aa"><img src="http://www.xker.com/xkerfiles/allimg/1208/1_120830155044_1.gif" alt="">买东西圣地 <b>→</b></label>
                                    <ul class="ul2aa">
                                        <li><a href="#">考 验</a></li>
                                        <li><a href="#">附近的</a></li>
                                        <li><a href="#">指导书</a></li>
                                        <li><a href="#">滑 板</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">专家介绍</a></li>
                            </ul>
                        </li>
                        <li><a href="#">有趣生活</a></li>
                        <li><label for="tab2b"><img src="http://www.xker.com/xkerfiles/allimg/1208/1_120830155044_1.gif" alt="">餐 厅 <b>→</b></label>
                            <ul class="ul2b">
                                <li><a href="#">冬季旅馆</a></li>
                                <li><a href="#">夏季旅馆</a></li>
                                <li><a href="#">秋季旅馆</a></li>
                                <li><a href="#">冬季旅馆</a></li>
                            </ul>
                        </li>
                        <li><label for="tab2c"><img src="http://www.xker.com/xkerfiles/allimg/1208/1_120830155044_1.gif" alt="">篝火晚会 <b>→</b></label>
                            <ul class="ul2c">
                                <li><a href="#">主题晚会</a></li>
                                <li><a href="#">报导晚会</a></li>
                                <li><a href="#">野外晚会</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="level1-li"><label for="tab3"><img src="http://www.xker.com/xkerfiles/allimg/1208/1_120830155044_1.gif" alt="">景区周围环境 <b>↓</b></label><label for="tabclose" class="close lab3"><img src="http://www.xker.com/xkerfiles/allimg/1208/1_120830155044_1.gif" alt=""></label>
                    <ul class="ul3">
                        <li><a href="#">为什么去那</a></li>
                        <li><a href="#">我们做什么</a></li>
                        <li><a href="#">风 景</a></li>
                        <li><a href="#">生活卡品</a></li>
                    </ul>
                </li>
                <li class="level1-li"><label for="tab4"><img src="http://www.xker.com/xkerfiles/allimg/1208/1_120830155044_1.gif" alt="">动态信息 <b>↓</b></label><label for="tabclose" class="close lab4"><img src="http://www.xker.com/xkerfiles/allimg/1208/1_120830155044_1.gif" alt=""></label>
                    <ul class="ul4">
                        <li><a href="#">支付方法</a></li>
                        <li><label for="tab4a"><img src="http://www.xker.com/xkerfiles/allimg/1208/1_120830155044_1.gif" alt=""><b>←</b> 了解度假村</label>
                            <ul class="ul4a">
                                <li><a href="#">本质生活</a></li>
                                <li><a href="#">保 险</a></li>
                                <li><label for="tab4aa"><img src="http://www.xker.com/xkerfiles/allimg/1208/1_120830155044_1.gif" alt=""><b>←</b> 廉价房租</label>
                                    <ul class="ul4aa">
                                        <li><a href="#">客 厅</a></li>
                                        <li><a href="#">卧 室</a></li>
                                        <li><a href="#">阳 台</a></li>
                                    </ul>
                                </li><li><a href="#">附近学校</a></li>
                                <li><a href="#">学世界</a></li>
                                <li><a href="#">附近学校</a></li>
                            </ul>
                        </li>
                        <li><label for="tab4b"><img src="http://www.xker.com/xkerfiles/allimg/1208/1_120830155044_1.gif" alt=""><b>←</b> 语 言</label>
                            <ul class="ul4b">
                                <li><a href="#">英 语</a></li>
                                <li><a href="#">中 文</a></li>
                                <li><a href="#">法 语</a></li>
                            </ul>
                        </li>
                        <li><a href="#">厉害啊</a></li>
                    </ul>
                </li>
                <li class="level1-li"><a class="level1-a" href="#">世界观</a></li>
            </ul>
        </div>

    </body>
</html>
