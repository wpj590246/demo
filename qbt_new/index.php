<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>情报通-中国最专业的电子商务数据服务商-数据魔方</title>
        <meta name="description" content="情报通是中国领先的电子商务数据统计分析软件,可提供数据分析、销售数据分析、店铺数据分析、广告淘宝数据统计等功能，比数据魔方更微观。">
        <meta name="keywords" content="情报通,数据分析,数据魔方,数据统计">
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="css/main-site.css">
        <link rel="stylesheet" href="css/sub-site.css">
        <script src="js/jquery-1.8.0.min.js"></script>
    </head>
    <body>
        <?php
        $get_q = $_GET['q'] ? $_GET['q'] : 'index';
        ?>
        <div id="container">
            <div id="header">
                <div class="container-inner clearfix">
                    <div class="header-nav fl">
                        <h1 class="fl"><a href="http://qbtchina.com/"><img src="img/logo.png" alt="情报通"></a></h1>
                        <div id="nav" class="fl">
                            <ul class="clearfix">
                                <li <?php if ($get_q == 'index')
            echo ' class="active"'; ?> ><a href="index.php">首页</a></li>
                                <li <?php if (substr($get_q, 0, 11) == 'site_school')
                                        echo ' class="active"'; ?>><a href="index.php?q=site_school">情报通学堂</a></li>
                                <li <?php if ($get_q == 'site_customer')
                                        echo ' class="active"'; ?>><a href="index.php?q=site_customer">知名客户</a></li>
                                <li <?php if ($get_q == 'site_case')
                                        echo ' class="active"'; ?>><a href="index.php?q=site_case">成功案例</a></li>
                                <li <?php if ($get_q == 'site_about')
                                        echo ' class="active"'; ?>><a href="index.php?q=site_about">关于我们</a></li>
                                <li class="nav-hook"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-login fr tr">
                        <a href="index.php?q=site_login" class="login-btn">登录</a>
                    </div>
                </div>
            </div>
            <?php
            if ($get_q == 'index')
                $article_class = 'container-inner';
            else
                $article_class = 'container-inner-s';
            ;
            ?>
            <div class="<?= $article_class ?>" id="article">
                <?php
                include 'tpl/' . $get_q . '.php';
                ?>
            </div>
            <div class="tc" id="footer">
                <p style="margin-bottom: 8px;">Copyright &copy; 2010-2013 情报通 - All Rights Reserved <a href="http://www.miibeian.gov.cn/">京ICP备10210840号</a></p>
                <p><a href="http://www.qbtchina.com">电子商务数据分析</a>,<a href="http://www.qbtchina.com">电子商务数据挖掘</a>,<a href="http://www.qbtchina.com">电子商务市场分析</a>,<a href="http://www.qbtchina.com">电子商务数据统计</a>,<a href="http://www.qbtchina.com">淘宝数据统计</a>,<a href="http://www.qbtchina.com">淘宝数据分析</a>,<a href="http://www.qbtchina.com">淘宝数据</a>,<a href="http://www.qbtchina.com">易趣数据</a>,<a href="http://www.qbtchina.com">拍拍数据</a>,<a href="http://www.qbtchina.com">淘宝店铺统计软件</a>,<a href="http://www.qbtchina.com">淘宝广告分析</a>,<a href="http://www.qbtchina.com">数据魔方</a>
                </p>
            </div>
        </div>
        <script src="js/coin-slider.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/sub.js"></script>
    </body>
</html>