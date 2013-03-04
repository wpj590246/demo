$
(
 	function()
	{
		var obj = "abc";
		var str = "           CSS学习网：分享才能更快乐 ！             ";
		alert("$.noop只是一个用户传空参的空函数");
		alert($.noop);
		
		alert("通过jQuery.proxy返回一个新函数")
		//一下可以作为一个函数体中的实现
		var obj = 
		{
  			name: "KwooShung",
  			test: function()
			{
    			alert(this.name);
    			$("#test").unbind("click", obj.test);
  			}
		};
		
		$("#test").click($.proxy(obj,"test"));
		
		alert("判断一个dom节点是否包含另一个dom节点\n\n\"方法：$.contains(\"body\",\"HTML\")判断body节点是否包含在HTML节点中\n\n" );
		alert(isContains());
		
		function isContains()
		{
			return $.contains(document.body, document.documentElement)==true?"body【被】documentElement包含":"body【不被】documentElement包含";
		}

		
		alert("判断obj数组是否为数组对象,返回的为布尔类型：" + $.isArray(obj));
		
		function fun(){}
		
		alert("判断isFunction()是否为函数,返回的为布尔类型：" + $.isFunction(fun));
		alert("判断某个对象是否为空对象,如果为空则返回true。");
		alert($.isEmptyObject(obj));
		alert("判断某个对象是否为纯粹的对象");
		alert($.isPlainObject(obj));
		alert("带有开头或结尾包含空格的字符串" + str +"\n\n去除空格方法如下：\n\n$.trim(\""+str+"\")\n\n" + $.trim(str));
		
		alert("将担元素或者数组对象序列化\n\n方法如下：\n$.param({userName:\"kwooshung\",password:\"123456\"}" + "\n\n" + $.param({userName:"kwooshung",password:"123456"}));
		$.error = console.error;																							
	}
);