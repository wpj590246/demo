$
(
 	function()
	{
		$("img").hide();
		alert("����˵����\n\t����̵�ɫ�顣\n\t\t\tAuthor��KwooShung");
		$("#div1").click
		(
		 	function()
			{
				$("img").hide();
				alert("������д���ID���Ե�input��ǩ����:\n\n\t$(\"input[id]\")");
				$("input[id] + img").fadeIn(500);
			}
		)
		$("#div2").click
		(
		 	function()
			{
				$("img").hide();
				alert("�������value=KwooShung��input��ǩ����:\n\n\t$(\"input[value='KwooShung']\")");
				$("input[value='KwooShung'] + img").fadeIn(500);
			}
		)
		$("#div3").click
		(
		 	function()
			{
				$("img").hide();
				alert("�������value!=KwooShung��������type=radio/checkbox��input��ǩ����:\n\n\t$(\"input[value!='KwooShung'][type!='radio'][type!='checkbox']\")");
				$("input[value!='KwooShung'][type!='radio'][type!='checkbox'] + img").fadeIn(500);
			}
		)
		$("#div4").click
		(
		 	function()
			{
				$("img").hide();
				alert("�������value��Kwoo��ʼ��input��ǩ����:\n\n\t$(\"input[value^='Kwoo']\")");
				$("input[value^='Kwoo'] + img").fadeIn(500);
			}
		)
		$("#div5").click
		(
		 	function()
			{
				$("img").hide();
				alert("�������value��Kwoo��β��input��ǩ����:\n\n\t$(\"input[value$='Kwoo']\")");
				$("input[value$='Kwoo'] + img").fadeIn(500);
			}
		)
		$("#div6").click
		(
		 	function()
			{
				$("img").hide();
				alert("�������value����Kwoo��input��ǩ����:\n\n\t$(\"input[value*='Kwoo']\")");
				$("input[value*='Kwoo'] + img").fadeIn(500);
			}
		)
	}
)