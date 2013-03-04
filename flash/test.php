
<?PHP
  
  $i='0';
  $q='qq';
  ?>
  <title>test</title>
<!--<OBJECT classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="400" height="300" id="flashvars" align="middle">
<param name="allowscriptAccess" value="sameDomain" />
<PARAM   NAME= "movie "   VALUE= "/crm3/cat.swf "/> 
<PARAM   NAME= "quality "   VALUE= "high "/> 
<PARAM   NAME= "FlashVars "   VALUE= "uid=<?= $i ?>&uname=<?= $q;?>"/> 
    </OBJECT>     -->   
<EMBED style="LEFT: 40px; POSITION: absolute; TOP: 0px;" align="center" src= 'cat.swf'  
FlashVars="webdata=11,12,13,14,15,16;17,18,19,10,11,12;13,14,15,16,17,18;19,20,21,22,23,24;25,26,27,28,29,30;31,32,33,34,35,36;37,38,39,40,41,42" 

allowscriptAccess="sameDomain" width=1200 height=800 type=application/x-shockwave-flash wmode="transparent" quality="high" name="flashvars" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
   

   
<script language="javascript">
 function getval(str) {
    // url是全局变量，函数正确执行
    alert("获取的值为："+str);
   }
</script>
