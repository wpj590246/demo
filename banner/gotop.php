<!--人性化返回顶部 -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GOTOP</title>
<body id="top">  
      <div style="position: fixed; background-color: #888888; height: 22px; left: 0px; top: 0px; width: 100%; z-index: 1;">11</div>
  exist 1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  1</br>  </br><p id="back-to-top"><a href="#top"><span></span>返回顶部</a></p>
    </body>  
<script type="text/javascript" src="/demo/jquery.js"></script>
<style type="text/css">
   #top {
         position:relative;
         z-index:0;
         width:100%;
         height:auto;
   }
    p#back-to-top{  
          position:fixed;
          bottom:100px;  
          left:80px;
          z-index: 999;
          display:block;  
    }  
    
    p#back-to-top a{  
          text-align:center;  
          text-decoration:none;  /* 取消链接的下划线*/
          color:#d1d1d1;  
          display:block;  
          width:80px;  
          /*使用CSS3中的transition属性给跳转链接中的文字添加渐变效果*/  
          -moz-transition:color 1s;  
          -webkit-transition:color 1s;  
          -o-transition:color 1s;  
    }  
    p#back-to-top a:hover{  
          color:red;  
    }  
    p#back-to-top a span{  
          background:#d1d1d1 url("gotop.jpg") no-repeat center bottom ;  
          border-radius:6px;  
          display:block;  
          height:80px;  
          width:80px;  
          margin-bottom:5px;  
          padding-top:20px;
          /*使用CSS3中的transition属性给<span>标签背景颜色添加渐变效果*/  
          -moz-transition:background 1s;  
          -webkit-transition:background 1s;  
          -o-transition:background 1s;  
    }  
    #back-to-top a:hover span{  
          background:#979797 url("gotop.jpg") no-repeat center top;  
    }  
    </style>
   
    
<script>
    $(document).ready(function(){  
    //首先将#back-to-top隐藏  
     $("#back-to-top").hide();  
    //当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失  
    $(function () {  
        $(window).scroll(function(){  
            if ($(window).scrollTop()>100){  
                $("#back-to-top").fadeIn(1500);  
            }else{  
                $("#back-to-top").fadeOut(1500);  
            }  
        });  
        //当点击跳转链接后，回到页面顶部位置  
        $("#back-to-top").click(function(){  
            $('body,html').animate({scrollTop:0},1000);  
            return false;  
        });  
    });  
});  
</script>


</body>
</html>  
  
