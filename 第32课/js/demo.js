$
(
 	function()
	{
		var obj = "abc";
		var str = "           CSSѧϰ����������ܸ����� ��             ";
		alert("$.noopֻ��һ���û����ղεĿպ���");
		alert($.noop);
		
		alert("ͨ��jQuery.proxy����һ���º���")
		//һ�¿�����Ϊһ���������е�ʵ��
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
		
		alert("�ж�һ��dom�ڵ��Ƿ������һ��dom�ڵ�\n\n\"������$.contains(\"body\",\"HTML\")�ж�body�ڵ��Ƿ������HTML�ڵ���\n\n" );
		alert(isContains());
		
		function isContains()
		{
			return $.contains(document.body, document.documentElement)==true?"body������documentElement����":"body��������documentElement����";
		}

		
		alert("�ж�obj�����Ƿ�Ϊ�������,���ص�Ϊ�������ͣ�" + $.isArray(obj));
		
		function fun(){}
		
		alert("�ж�isFunction()�Ƿ�Ϊ����,���ص�Ϊ�������ͣ�" + $.isFunction(fun));
		alert("�ж�ĳ�������Ƿ�Ϊ�ն���,���Ϊ���򷵻�true��");
		alert($.isEmptyObject(obj));
		alert("�ж�ĳ�������Ƿ�Ϊ����Ķ���");
		alert($.isPlainObject(obj));
		alert("���п�ͷ���β�����ո���ַ���" + str +"\n\nȥ���ո񷽷����£�\n\n$.trim(\""+str+"\")\n\n" + $.trim(str));
		
		alert("����Ԫ�ػ�������������л�\n\n�������£�\n$.param({userName:\"kwooshung\",password:\"123456\"}" + "\n\n" + $.param({userName:"kwooshung",password:"123456"}));
		$.error = console.error;																							
	}
);