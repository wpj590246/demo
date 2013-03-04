

<div class="id">ggggg</div>
<script type="text/javascript" src="/demo/jquery.js"></script>
<script>
$(document).delegate(".id","click",function () {$(this).after("<div class='id'>ffff</div>");});

$(document).undelegate(".id","click");
</script>