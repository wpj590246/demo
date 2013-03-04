<?php
$banner = 'banner-2';
include 'tpl/layer-1.php';
?>
<div class="section clearfix">

    <div class="breadcrumbs">
        <a href="#"> 首页</a> > <span class="col-0">情报通学堂</span>
    </div>
    <div class="cus-content clearfix">
        <div class=" box-block ">
            <div class="logo">
                <img alt="" src="img/banner/case-1.jpg"/>
            </div>
            <h3 class="mb-15"><span class="col-0">麦包包</span>淘宝商城店铺</h3>
            <p class="logo-motto"> 情报通对于我们企业分析互联网市场有很大帮助，数据很全！很精准！</p>
            <p class="col-1 tr">—— 麦包包运营部总经理魏先生</p>
        </div>
        <div class=" box-block noborder-l">
            <div class="logo">
                <img alt="" src="img/banner/case-2.jpg"/>
            </div>
            <h3 class="mb-15"><span class="col-0">SEVNJOEN</span>淘宝商城店铺</h3>
            <p class="logo-motto"> 情报通是款非常不错的电子商务信息分析软件，对我们的企业很有帮助。 </p>
            <p class="col-1 tr">—— SEVNJOEN李总</p>
        </div>
        <div class=" box-block noborder-l">
            <div class="logo">
                <img alt="" src="img/banner/case-8.jpg"/>
            </div>
            <h3 class="mb-15"><span class="col-0">MBOX</span>淘宝商城店铺</h3>
            <p class="logo-motto">数据准确，报表全面，是企业领航的好帮手！ </p>
            <p class="col-1 tr ">—— MBOX淘宝商城负责人石先生</p>
        </div>
    </div>
    <div class="cus-content clearfix">
        <ul class="cus-box">
            <?php
            $logo_arr = array(
                array('name'=>'唐狮','type'=>'b','img'=>'1'),
                array('name'=>'欧莎','type'=>'b','img'=>'2'),
                array('name'=>'哈他淘宝官方旗舰店','type'=>'b','img'=>'3'),
                array('name'=>'李宁','type'=>'b','img'=>'4'),
                array('name'=>'美特斯邦威','type'=>'b','img'=>'5'),
                array('name'=>'柠檬绿茶','type'=>'c','img'=>'6'),
                array('name'=>'卡芙琳旗舰店','type'=>'b','img'=>'7'),
                array('name'=>'Y旗舰店','type'=>'b','img'=>'8'),
                array('name'=>'莲果化妆品专营店','type'=>'b','img'=>'8'),
                array('name'=>'jr华圣专卖店','type'=>'b','img'=>'8'),
                array('name'=>'韩国E日秀','type'=>'b','img'=>'8'),
                array('name'=>'晟凯服饰专营店','type'=>'b','img'=>'8'),
                array('name'=>'凡客诚品','type'=>'d','img'=>'9'),
                array('name'=>'马克华菲','type'=>'b','img'=>'10'),
                array('name'=>'天使名妆','type'=>'c','img'=>'11'),
                array('name'=>'双生儿香港平价店','type'=>'c','img'=>'11'),
                array('name'=>'迷奇官方旗舰店','type'=>'b','img'=>'12'),
                array('name'=>'大王官方旗舰店','type'=>'b','img'=>'13'),
                array('name'=>'韩都衣舍','type'=>'b','img'=>'14'),
                array('name'=>'瑞克斯','type'=>'e','img'=>'15'),
                
            );
            $shop_type=array('b'=>'淘宝商城店铺','c'=>'淘宝个人店铺','d'=>'凡客诚品','e'=>'淘拍档');
            foreach ($logo_arr as $k=> $v) :
            ?>
            <li <?php if(($k+1)%5 == 0) echo ' class="last"'?>>
                <div class="img-container">
                    <img  alt="" src="img/logo/logo-<?= $v['img'];?>.jpg"/>
                </div>
                <dl>
                    <dt><strong class="col-0"><?= $v['name'];?></strong></dt>
                    <dd><?=$shop_type[$v['type']];?></dd>
                </dl>
            </li>
            <?php endforeach; ?>
            
        </ul>
    </div>


</div>
