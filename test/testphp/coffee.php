<?php
render('header1');
pagetitle('it is the test for the js code of coffee');
eval( '$srcimg = "yes eval";' );
echo $srcimg;
?>
<p class="one">111111111</p>
<p class="two">222222222</p>
<p class="three">333333333</p>
<p class="four">444444444</p>
<script>
    var msg='hello';
    function great(name,attr){
            tt = 11;
             name='david';
             var greating=msg+name+'!';
             var msg='你好';
             for(var i=0;i<10;i++){
             var next=msg+'你的id是'+i*2+i ;
             }
//             alert(arguments[0]);//david
//             alert(arguments[1]);//undefined
//             alert(greating);//undefineddavid
//             alert(next);//你的id是189
    }
    great('Tom');
//    alert(tt);
</script>
<?php render('footer1');?>