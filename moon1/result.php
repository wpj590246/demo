
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>result</title>
<script type="text/javascript" src="/demo/jquery.js"></script>
<link rel="stylesheet" href="css/mooncake.css">
<!--[if IE 6]><style>.big,.small,.stone,.ship,.for_ie6{behavior:url("css/iepngfix.htc")}</style><![endif]-->
</head>
<body>

<div id ="screen">
	<div id="mooncake"></div>
	<div id="popup">
		<form action="#">
			<input id = "id" type="hidden" value="<?= $_GET['id'];  ?>" />
			<input id = "time" type="hidden" value="<?= $_GET['time'];  ?>" />
			<textarea><?php if ($_GET['id']==1):?>恭喜你在<?= $_GET['time'];  ?>秒内成功帮助宇航员王尼玛同志返回地球过中秋节！王尼玛的爱人曹尼妹向你表示衷心的感谢！月球上仍有滞留未归的同志， @XXX，@XXX，@XXX是否愿意伸出援手？
			<?php elseif ($_GET['id']==0):?>很遗憾，你未能帮助宇航员王尼玛同志返回地球过中秋节，他的爱妻曹尼妹同志表示谅解，并建议你的好友@XXX，@XXX，@XXX伸出援手，“一定要告诉他，你老婆喊你回家吃月饼！！！”
			<?php endif ;?>
			</textarea>
			<button onclick="this.blur();"></button>
		</form>
		
	</div>
<img id='win'  class="countdown" src="images/mooncake/win.png"/>
<img id='failed'  class="countdown"  src="images/mooncake/failed.png"/>
    <div id="ship">
    	<img id="ship-img-1" class="for_ie6" src="images/mooncake/ship-1.png" alt="">
    	
    </div>
</div>

<script src="js/get-mooncake.js"></script>
<script>
	$(document).ready(function(){
		var id =<?= $_GET['id'];  ?>;

		if (id == 1)
		{
		var use_time = <?= $_GET['time'];  ?>;
		$('#win').show();	
		// $('#popup textarea').val(use_time);
		setTimeout(popup,5000);
		mooncake.get('ship', 300);
		setTimeout(fly_ship,1400);
		} else if (id == 0)
		{
		$('#failed').show();	
		setTimeout(popup,3000);
		}
	
	;});

</script>
</body>
</html>