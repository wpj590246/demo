<!DOCTYPE HTML>
<html>
    <head>
        <!--        <meta charset="UTF-8"/>-->
        <title>收藏本站</title>
        <link href="/demo/test/css/13.css" type='text/css' rel='stylesheet'/>
        <script type="text/javascript" src="/demo/js/jquery.js"></script>

<script type="text/javascript" src="/demo/js/jquery-ui-1.9.2.custom.min.js"></script>
		 <script type="text/javascript" src="/demo/js/jquery.flip.js"></script>
    </head>
    <body>
<?php


echo $pre = base64_encode($_SERVER['HTTP_HOST']);
echo '<br/>';

echo  htmlentities("<div>");echo htmlspecialchars('<div>');echo html_entity_decode("&lt;div&gt;");
echo '<br/>';

echo '<br/>';echo base64_decode(urldecode('M0A0ZGM0NjhkMmVkMjg4ODlmOTFhZDdmYjVjODI4MDBkNg%3D%3D'));echo base64_decode('<>');
$cats = array(
    array(
        'id' => 1,
        'name' => '电子游戏',
        'children' => array(
            array(
                'id' => 3,
                'name' => '魔兽',
                'children' => array(
                    array(
                        'id' => 5,
                        'name' => '魔兽争霸',
                        'children' => null,
                    ),
                    array(
                        'id' => 5,
                        'name' => '魔兽世界',
                        'children' => null,
                    ),
                ),
            ),
            array(
                'id' => 5,
                'name' => '星际争霸',
                               'children' => array(
                    array(
                        'id' => 5,
                        'name' => '星际争霸1',
                        'children' => null,
                    ),
                    array(
                        'id' => 5,
                        'name' => '星际争霸2',
                        'children' => null,
                    ),
                ),
            ),
            array(
                'id' => 7,
                'name' => '竞技游戏3',
                'children' => null,
            ),
        ),
    ),
    array(
        'id' => 2,
        'name' => '学术和教育',
        'children' => array(
            array(
                'id' => 4,
                'name' => '自然科学',
                'children' => null,
            ),
            array(
                'id' => 6,
                'name' => '人文社科',
                'children' => null,
            ),
            array(
                'id' => 8,
                'name' => '期刊会议',
                'children' => null,
            ),
            array(
                'id' => 9,
                'name' => '高校名称',
                'children' => array(
                    array(
                        'id' => 14,
                        'name' => '中国大学',
                        'children' => null,
                    ),
                    array(
                        'id' => 16,
                        'name' => '国际大学',
                        'children' => null,
                    ),
                ),
            ),
        ),
    ),
    array(
        'id' => 10,
        'name' => '生活',
        'children' => array(
            array(
                'id' => 12,
                'name' => '生活1',
                'children' => null,
            ),
        ),
    ),
);


$str = '<div id="list">';
$index = array(); //存储id和对应索引值
$nameArr = array(); //存储索引值和对应名字
$setLoopIndex = setLoopIndex($cats, '', &$index, &$nameArr); //循环处理
$str.='</div>';
$str;

function setLoopIndex($val, $pref, &$index, &$nameArr) {

    if (!empty($val)) {//非空
        global $str;
        $str .= '<ul>';
        foreach ($val as $key => $v) {

            $str .= '<li>' . $v['name'];

            $child_pref = trim($pref . ' ' . $key);
            $index[$v['id']] = $child_pref;
            $nameArr[$child_pref] = $v['name'] . ":" . $v['id'];
            setLoopIndex($v['children'], $child_pref, &$index, &$nameArr); //循环处理该子类
            $str .= '</li>';
        }
        $str .= '</ul>';
    }
}
echo $str;
$string = 'fsh哈哈';echo strlen($string);
echo $string[4];
// $arr = array('a' => '这是A', 'b' => '这是B');

// $par = 'a';
// echo "ss{$arr[$par]}";
// echo $arr[$par];
// $odd = 'this is odd';
// $even = 'this is even';
// $arr = array(
    // 'odd' => array($odd, 1),
    // 'even' => array($even, 1)
// );
// $qq='q';
// $q='odd';
  // echo $_SERVER['PHP_SELF'];
// echo $_SERVER['REQUEST_URI'];
// echo $arr[${$qq}][1];
// ?>





        <a href="javascript:;" title="收藏本站" id="fav">收藏本站</a>
        <div id='flip' style="width:100px;">dd</div>
        <div>sda<div>dasd</div></div>

        <?php
//   $cmd = "date";
//
//   $output = system($cmd,$qqq);
//   printf("System Output: $qqq");


echo "\xef";
        /*
          Output:
          Mon Oct 26 19:30:08 EST 2009
          System Output: Mon Oct 26 19:30:08 EST 2009
          Exec Output: Mon Oct 26 19:30:08 EST 2009
         */
        ?>

        <br/> <br/>
        <img id="1" src="#"/>
        <img id="2" src="#" src2="aaa"/>
        <input type="file" name="usertx" id="photoSrc" value="文件上传" onchange="photoCheck(this)"/>
        <script type="text/javascript">
		 $("#flip").click(function(){
           $("#flip").flip({
	direction:'lr',
	color:'#B0EB17',
	content:'yoyoyo'
	
})
});
            
            var Cat={
                name:"小黑",
                q:1,
                makeSound:function(){this.q++;}
            }
            var cat1=Object.create(Cat);
//            alert(cat1.q);   
            cat1.makeSound();
                        var cat2=Object.create(Cat);
//            alert(cat2.q);   
            cat2.makeSound();
            //            var arr = {
            //                odd :  ['1','2'],
            //                even :  ['a','b']
            //            };
            //            var par = 'odd';
            //            console.log(arr[par]);
            //       function photoCheck(t) {
            //           console.log(t.select());
            //       }
               
               $('#list>ul').show();
               $('#list').on('click','li',function (e) {
                   e.stopPropagation();
				 
                   $(this).children('ul').toggleClass('block').end().siblings('li').children('ul').removeClass('block'); 
                   return false;
                   
                   
               });
            //    $('div').click(function ( e) {
            //          e.stopPropagation();
            //        alert('q');
            //    })
            //收藏本站代码
            //    jQuery.fn.addFavorite = function(l, h) {
            //        return this.click(function() {
            //            var t = jQuery(this);
            //            if(jQuery.browser.msie) {
            //                window.external.addFavorite(h, l);
            //            } else if (jQuery.browser.mozilla || jQuery.browser.opera) {
            //                t.attr("rel", "sidebar");
            //                t.attr("title", l);
            //                t.attr("href", h);
            //            } else {
            //                alert("请使用Ctrl+D将本页加入收藏夹！");
            //            }
            //        });
            //    };
            //    $(function(){
            //        $('#fav').addFavorite('收藏本站',location.href);
            //        if ($.browser.safari || $.browser.opera) {
            //            alert('q');   
            //            // Safari pass
            //            // Chrome pass
            //            // Opera pass
            //        } else {
            //            //            alert('a');
            //        }
            //        
            //        $('a').hover(function () {
            //            $('div').toggle();
            //            
            //        });
            //    });


        </script>
    </body>
</html>