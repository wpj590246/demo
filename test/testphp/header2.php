<?php 

    $title='叫你们黑我';


?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>reverse@53's HomePage</title>
        <link href="http://cdnjs.bootcss.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="//cdnjs.bootcss.com/ajax/libs/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="#"><?php echo $title?></a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="#">首页</a></li>
                            <li><a href="#about">关于</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">小菜往事 <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-header">大事记</li>
                                    <li><a href="#">我的狗呢</a></li>
                                    <li><a href="#">啊～我的腰</a></li>
                                    <li><a href="#">蛋糕毁灭者</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">身体状况</li>
                                    <li><a href="#">撸多腰断了</a></li>
                                    <li><a href="#">吃多蛋白粉就住院了</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="navbar-form pull-right">
                            <input class="span2" type="text" placeholder="Email">
                            <input class="span2" type="password" placeholder="Password">
                            <button type="submit" class="btn">登 录</button>
                        </form>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container">
