$
(
 	function()
	{
		$("img").hide();
		alert("例题说明：\n\t点击绿的色块。\n\t\t\tAuthor：KwooShung");
		$("#div1").click
		(
		 	function()
			{
				$("img").hide();
				alert("获得所有带有ID属性的input标签方法:\n\n\t$(\"input[id]\")");
				$("input[id] + img").fadeIn(500);
			}
		)
		$("#div2").click
		(
		 	function()
			{
				$("img").hide();
				alert("获得属性value=KwooShung的input标签方法:\n\n\t$(\"input[value='KwooShung']\")");
				$("input[value='KwooShung'] + img").fadeIn(500);
			}
		)
		$("#div3").click
		(
		 	function()
			{
				$("img").hide();
				alert("获得属性value!=KwooShung并且属性type=radio/checkbox的input标签方法:\n\n\t$(\"input[value!='KwooShung'][type!='radio'][type!='checkbox']\")");
				$("input[value!='KwooShung'][type!='radio'][type!='checkbox'] + img").fadeIn(500);
			}
		)
		$("#div4").click
		(
		 	function()
			{
				$("img").hide();
				alert("获得属性value以Kwoo开始的input标签方法:\n\n\t$(\"input[value^='Kwoo']\")");
				$("input[value^='Kwoo'] + img").fadeIn(500);
			}
		)
		$("#div5").click
		(
		 	function()
			{
				$("img").hide();
				alert("获得属性value以Kwoo结尾的input标签方法:\n\n\t$(\"input[value$='Kwoo']\")");
				$("input[value$='Kwoo'] + img").fadeIn(500);
			}
		)
		$("#div6").click
		(
		 	function()
			{
				$("img").hide();
				alert("获得属性value包含Kwoo的input标签方法:\n\n\t$(\"input[value*='Kwoo']\")");
				$("input[value*='Kwoo'] + img").fadeIn(500);
			}
		)
	}
)