<script type="text/javascript" src="/demo/jquery.js"></script>
<style>
.shop-info, .tags-info {
    background-color: #F9F9F9;
    border: 1px solid #E7E7E7;
    border-radius: 0 0 3px 0;
    box-shadow: 2px 2px 2px #999999;
    left: 0;
    padding: 5px 10px 0;
    position: absolute;
    top: 49px;
    visibility: hidden;
    width: 200px;
    z-index: 999;
}
.shop-info .shop-rate {
    border-bottom: 1px dashed #D2D2D2;
    padding: 6px 0;
}
.shop-info .shop-rate a {
    color: #545454;
    text-decoration: none;
}
.shop-info .shop-rate h4 {
    font-size: 12px;
}
.shop-info .shop-rate .compare {
    color: #808080;
    font-weight: normal;
    margin-left: 15px;
}
.shop-info .shop-rate li {
    line-height: 15px;
    margin: 5px 0 0;
}
.shop-info .shop-rate em {
    color: #B31102;
    font-size: 12px;
    font-style: normal;
    font-weight: 700;
}
.shop-info .shop-rate em.count {
    color: #3366DE;
    display: inline-block;
    width: 30px;
}
.shop-info .shop-rate em.lower {
    color: #217311;
}
.shop-info .shop-rate .rateinfo {
    color: #B31102;
    cursor: pointer;
}
.shop-info .shop-rate span {
    display: inline-block;
}
.shop-info .shop-rate b {
    background: none repeat scroll 0 0 #B31102;
    border-radius: 2px 2px 2px 2px;
    color: #FFFFFF;
    display: inline-block;
    font-weight: normal;
    height: 15px;
    margin: 0 5px 0 13px;
    padding: 1px 2px 1px 3px;
    vertical-align: bottom;
}
.shop-info .shop-rate b.lower {
    background: none repeat scroll 0 0 #217311;
    border-color: #217311;
}
.shop-info .shop-rate .rateinfo.down b {
    background-color: #246718;
}
.shop-info .shop-rate .rateinfo.down em {
    color: #246718;
}
td.shop-grade {
    width: 80px;
}
td.shop-grade span {
    display: inline-block;
}
td.shop-grade em {
    color: #FF5500;
    font-weight: bold;
}
td.shop-grade em.total {
    float: left;
    margin-left: 5px;
}
.stars {
    background: url("T1I6ecXcNjXXXXXXXX-174-450.png") no-repeat scroll 0 -360px transparent;
    display: inline-block;
    float: left;
    height: 16px;
    width: 89px;
}
.stars span {
    background: url("T1I6ecXcNjXXXXXXXX-174-450.png") no-repeat scroll 0 -151px transparent;
    display: block;
    height: 16px;
    width: 0;
}
#dynamic-rate {
    border: 1px solid #ccc;
    margin: 10px 0;
    padding: 10px;
    width: 696px;
}
#dynamic-rate.con {
    float: right;
    width: 400px;
}
#dynamic-rate h4 {
    background: url("T1ivNYXXdzXXXXXXXX-676-860.png") no-repeat scroll -295px 3px transparent;
    color: #000000;
    font-weight: 700;
    height: 18px;
    line-height: 18px;
    margin-bottom: 5px;
    overflow: hidden;
    padding-left: 2em;
}
#dynamic-rate .h {
    color: #FF5500;
}
.seller-rate-info {
    background-color: #FFFFFF;
    border-top: 1px solid #D7D7D7;
    overflow: hidden;
    padding: 10px 15px 10px 25px;
}
.seller-rate-info ul {
    height: 115px;
    overflow: hidden;
    position: relative;
    z-index: 0;
}
.seller-rate-info li.J_RateInfoTrigger {
    cursor: pointer;
    height: 30px;
    line-height: 30px;
    margin-bottom: 12px;
    padding-left: 10px;
    vertical-align: middle;
    width: 382px;
}
.seller-rate-info li a {
    text-decoration: none;
}
.seller-rate-info li.selected {
    background: url("T1ivNYXXdzXXXXXXXX-676-860.png") no-repeat scroll 0 -384px #E5E5E5;
}
.item-scrib {
    color: #808080;
    font-weight: normal;
    height: 30px;
    line-height: 30px;
    overflow: hidden;
}
.item-scrib .title {
    color: #404040;
    font-weight: 700;
    line-height: 22px;
    margin-top: 4px;
}
.item-scrib .count {
    color: #FF6600;
    font-size: 14px;
    font-style: normal;
    font-weight: 700;
}
.item-scrib .percent {
    color: #FFFFFF;
    display: block;
    font-style: normal;
    font-weight: normal;
    height: 28px;
    line-height: 26px;
    margin-left: 145px;
    margin-top: -28px;
    padding-left: 154px;
    width: 50px;
}
.item-scrib .over, .item-scrib .normal, .item-scrib .lower, .rate-info-box .rc-tp, .rate-info-box .rc-bt {
    background: url("T1ivNYXXdzXXXXXXXX-676-860.png") no-repeat scroll 0 0 transparent;
}
.item-scrib .over {
    background-position: 10px -283px;
}
.item-scrib .lower {
    background-position: 10px -309px;
}

.rate-info-box {
    display: none;   
    font-size: 11px;
    font-weight: normal;
    height: 115px;
    line-height: 15px;
    margin-bottom: 0;
    position: absolute;
    right: 15px;
    top: 0;
    width: 250px;
    z-index: 50;
}
.rate-info-box em {
    font-style: normal;
}
.rate-info-box .rc-tp, .rate-info-box .rc-bt {
    display: block;
    height: 4px;
    position: relative;
}
.rate-info-box .rc-tp {
    background-position: 0 -359px;
    margin: 0;
}
.rate-info-box .rc-bt {
    background-position: 1px -373px;
    margin: 0;
}
.rate-info-box .bd {
    background-color: #E5E5E5;
    border: 0 none;
    height: 100px;
    overflow: hidden;
    padding: 2px 0 4px 8px;
    width: auto;
}
.rate-info-box .bd .total {
    height: 24px;
}
.rate-info-box .count {
    height: 15px;
    overflow: hidden;
    white-space: nowrap;
}
.small-star-no1, .small-star-no2, .small-star-no3, .small-star-no4, .small-star-no5 {
    background: url("T1I6ecXcNjXXXXXXXX-174-450.png") no-repeat scroll -96px -261px transparent;
    display: inline-block;
    height: 11px;
    line-height: 11px;
    width: 78px;
}
.small-star-no4 {
    background-position: -96px -277px;
}
.small-star-no3 {
    background-position: -96px -293px;
}
.small-star-no2 {
    background-position: -96px -309px;
}
.small-star-no1 {
    background-position: -96px -325px;
}
.rate-info-box .rate-stat {
    background-color: #FF944C;
    display: inline-block;
    font-size: 0;
    height: 10px;
    line-height: 1px;
    margin-bottom: 3px;
    margin-right: 4px;
    vertical-align: middle;
}
</style>
<!-- rate -->
<?php $shop->description_rate=430;
$shop->description_score=4.3*100000;
$lastInfo['description_score']=66000;
?>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<div id="dynamic-rate">
	<h4 class="rate-icon rate-icon-shop">店铺半年内动态评分</h4>
	<div class="seller-rate-info" id="sixmonth">
		<ul>
			<li class="J_RateInfoTrigger selected">
				<div class="item-scrib">
					<span class="title">宝贝与描述相符：</span> <em title="<?=$shop->description_score/100000?>分"
						class="count">4.9</em>分 <em
						title="计算规则:(店铺得分-同行业平均分)/(同行业店铺最高得分-同行业平均分)"><strong
						<?=$shop->description_rate>0?'class="percent over"':'class="percent lower"'?>><?=round($shop->description_rate/100,2)?>%</strong> </em>
				</div>
				<div class="box rate-info-box" style="display: block;">
					<span class="rc-tp"><span></span> </span>
					<div class="bd">
						<div class="total">
							<div class="stars">
								<span style="width: <?=(int)($lastInfo['description_score']/5000)?>%;"></span>
							</div>
							<em title="<?=$shop->description_score/100000?>分" class="h">4.9</em>分 共<span>100</span>人
						</div>
						<div class="count count5">
							<span class="small-star-no5"></span> <span
								style="width: 67.66px;" class="rate-stat"></span> <em class="h">67.66%</em>

						</div>
						<div class="count count4">
							<span class="small-star-no4"></span> <span style="width: 13.33px;"
								class="rate-stat"></span> <em class="h">13.33%</em>
						</div>
						<div class="count count3">
							<span class="small-star-no3"></span> <span style="width: 10.00px;"
								class="rate-stat"></span> <em class="h">10.00%</em>
						</div>
						<div class="count count2">
							<span class="small-star-no2"></span> <span style="width: 7.77px;"
								class="rate-stat"></span> <em class="h">7.77%</em>
						</div>

						<div class="count count1">
							<span class="small-star-no1"></span> <span style="width: 2.23px;"
								class="rate-stat"></span> <em class="h">2.23%</em>
						</div>
					</div>
					<span class="rc-bt"><span></span> </span>
				</div>
			</li>
			<li class="J_RateInfoTrigger">
				<?php $shop->service_rate=430;
				$shop->service_score=4.3*100000;
				$lastInfo['service_score']=300000;
					?>
				<div class="item-scrib">
					<span class="title">卖家的服务态度：</span> <em title="<?=$shop->service_score/100000?>分"
						class="count">4.9</em>分 <em
						title="计算规则:(店铺得分-同行业平均分)/(同行业店铺最高得分-同行业平均分)"><strong
						<?=$shop->service_rate>0?'class="percent over"':'class="percent lower"'?>><?=round($shop->service_rate/100,2)?>%</strong> </em>
				</div>
				<div class="box rate-info-box">

					<span class="rc-tp"><span></span> </span>
					<div class="bd">
						<div class="total">
							<div class="stars">
								<span style="width: <?=(int)($lastInfo['service_score']/5000)?>%;"></span>
							</div>
							<em title="<?=$shop->service_score/100000?>分" class="h">4.9</em>分 共<span>100</span>人
						</div>
						<div class="count count5">
							<span class="small-star-no5"></span> <span
								style="width: 33.33px;" class="rate-stat"></span> <em class="h">33.33%</em>
						</div>
						<div class="count count4">
							<span class="small-star-no4"></span> <span style="width: 11.11px;"
								class="rate-stat"></span> <em class="h">11.11%</em>
						</div>

						<div class="count count3">
							<span class="small-star-no3"></span> <span style="width: 11.11px;"
								class="rate-stat"></span> <em class="h"><?=round($lastInfo['service_three']/100,2)?>%</em>
						</div>
						<div class="count count2">
							<span class="small-star-no2"></span> <span style="width: 33.33px;"
								class="rate-stat"></span> <em class="h">33.33%</em>
						</div>
						<div class="count count1">
							<span class="small-star-no1"></span> <span style="width: 11.11px;"
								class="rate-stat"></span> <em class="h">11.11%</em>
						</div>
					</div>

					<span class="rc-bt"><span></span> </span>
				</div>
			</li>
			<li class="J_RateInfoTrigger">
				<?php $shop->speed_rate=430;
				$shop->speed_score=4.3*100000;
				$lastInfo['speed_score']=300000;
					?>
				<div class="item-scrib">
					<span class="title">卖家发货的速度：</span> <em title="<?=$shop->speed_score/100000?>分"
						class="count"><?=round($shop->speed_score/100000,2)?></em>分 <em
						title="计算规则:(店铺得分-同行业平均分)/(同行业店铺最高得分-同行业平均分)"><strong
						<?=$shop->speed_rate>0?'class="percent over"':'class="percent lower"'?>><?=round($shop->speed_rate/100,2)?>%</strong> </em>
				</div>
				<div class="box rate-info-box">
					<span class="rc-tp"><span></span> </span>
					<div class="bd">
						<div class="total">
							<div class="stars">
								<span style="width: <?=(int)($lastInfo['speed_score']/5000)?>%;"></span>
							</div>
							<em title="<?=$shop->speed_score/100000?>分" class="h"><?=round($shop->speed_score/100000,2)?></em>分 共<span><?=$lastInfo['speed_num']?></span>人
						</div>

						<div class="count count5">
							<span class="small-star-no5"></span> <span
								style="width: 33px;" class="rate-stat"></span> <em class="h">33%</em>
						</div>
						<div class="count count4">
							<span class="small-star-no4"></span> <span style="width: 22px;"
								class="rate-stat"></span> <em class="h">22%</em>
						</div>
						<div class="count count3">
							<span class="small-star-no3"></span> <span style="width:22px;"
								class="rate-stat"></span> <em class="h">22%</em>
						</div>
						<div class="count count2">

							<span class="small-star-no2"></span> <span style="width: 22px;"
								class="rate-stat"></span> <em class="h">22%</em>
						</div>
						<div class="count count1">
							<span class="small-star-no1"></span> <span style="width: 22px;"
								class="rate-stat"></span> <em class="h">22%</em>

						</div>
					</div>
					<span class="rc-bt"><span></span> </span>
				</div>
			</li>
		</ul>
	</div>
</div>

<script type="text/javascript">

$(function(){
	$('#dynamic-rate .J_RateInfoTrigger').mouseover(function(){
		$('#dynamic-rate .J_RateInfoTrigger').removeClass('selected');
		$('#dynamic-rate .rate-info-box').hide();
		$(this).addClass('selected').find('.rate-info-box').show();
	});
});
</script>

