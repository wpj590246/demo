<?php render('header1');?>
<?php
//pagetitle('it is test for captcha');
if (isset($_POST['input'])) {
    echo Captcha::Validate($_POST['input']);
    echo $_POST['input'];
    return;
}else
    echo 111111111111;


?>

<div class="field">
    <label for="signup-password-verify">验证码</label>
    <input type="text" name="vcaptcha" id="signup-mobile" class="number" require="true" datatype="require|limitc" min="4" maxlength="4" style="text-transform:uppercase;"/><span class="inputtip">请输入下面验证码上的字母或数字</span><span class="hint"><img src="testphp/imagecreate.php" title="看不清楚，点击更换" onclick="captcha(this);" style="cursor:pointer;" /></span>
</div>

<script>

    var $r = $('img').attr('src');
    function captcha(e) {
   
        $(e).attr('src',$r+'?'+Math.random());
    }
    $('input').focusout(function () {

        $.ajax({
            type:'POST',
       
            data : {input:$('input').val()}
        
        })
    })


</script>
<?php render('footer1');?>