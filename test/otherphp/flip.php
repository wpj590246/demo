<div id="flipbox" style="background-color: #FF9000; width: 100px; height: 150px;">Hello! I'm a flip-box! :)</div>
<div id="flipPad">
	<a href="#" class="left" rel="rl" rev="#39AB3E" title="Change content as you like!">left</a>
	<a href="#" class="top" rel="bt" rev="#B0EB17" title="Ohhh yeah!">top</a>
	<a href="#" class="bottom" rel="tb" rev="#82BD2E" title="Hey oh let's go!">bottom</a>
	<a href="#" class="right" rel="lr" rev="#C8D97E" title="Waiting for css3...">right</a>
</div>
<script src="../js/jquery-1.3.2.js"></script>
<script src="../js/jquery-ui-1.7.2.min.js"></script>
<script src="../js/jquery.flip.min.js"></script>
<script>
$(function(){
	
	$("#flipPad a").bind("click",function(){
		var $this = $(this);
		$("#flipbox").flip({
			direction: $this.attr("rel"),
			color: $this.attr("rev"),
			content: $this.attr("title"),//(new Date()).getTime(),
			onBefore: function(){$(".revert").show()}
		})
		return false;
	});

});
</script>