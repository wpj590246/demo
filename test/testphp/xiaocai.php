<?php
render('header2');
?>
<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit">
    <h1>姓小单字一个菜！</h1>
    <p>此人乃是九江一条龙，奈何龙游浅水，只能0.1秒射,sf Solo 还被我拿过一血</p>
    <p><a href="#" class="btn btn-primary btn-large">更 多 &raquo;</a></p>
</div>

<!-- Example row of columns -->
<div class="row">
    <div class="span4">
        <h2>手机信息查询</h2>
        <div class="thumbnail">
            <input  class="span2" type="text" placeholder="请输入手机号码" />
            <p><a href="#mobile_info" class="btn btn-info" data-toggle="modal">查 询</a></p>
        </div>
        <!-- Modal -->
        <div id="mobile_info" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Modal header</h3>
            </div>
            <div class="modal-body">
                <p>One fine body…</p>
            </div>

        </div>

    </div>
    <div class="span4">
        <h2>蛋糕</h2>
        <div class="thumbnail"><p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p></div>
        <p><a class="btn btn-info" href="#" >详 情 &raquo;</a></p>
    </div>
    <div class="span4">
        <h2>我的腰</h2>
        <div class="thumbnail" href="#"><p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p></div>
        <p><a class="btn btn-info" href="#">详 情 &raquo;</a></p>
    </div>
</div>

<hr>
<div class='alert1'  >1111111111</div>



<footer>
    <p>&copy; Company 2013</p>
</footer>
<script>$('form button').popover({'title':'没那东西','content':'别点了','placement':'bottom'});

    $('.modal').on({
        'show': function () {
            console.log('要显示了');
        },
        'shown':function () {
            console.log('显示完了');
        }

    })
</script>
<?php
render('footer2');
?>