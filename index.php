<title>transform eff</title>

<style type="text/css">/*transform*/

.showbox {
width : 100px;
-webkit-transition: all 1s ease-in-out; 
-moz-transition: all 1s ease-in-out;
}
.slideright:hover {
-webkit-transform: translate(3em,0);/*有safati,google chrome,搜狗*/
-moz-transform: translate(3em,0);/*firefox*/
/* 还有presto作为内核的Opera：-o-tansform*/
}
.rotate:hover {
-webkit-transform: rotate(30deg);
-moz-transform: rotate(30deg);
}
.slideleft:hover {
-webkit-transform: translate(-3em,1em);
-moz-transform: translate(-3em,1em);
}
.scale:hover {
-webkit-transform: scale(2);
-moz-transform: scale(2);
}

</style>
<div align="center">
<div class="showbox slideright">box 1</div>
<div class="showbox rotate" style="border-color: red;">box 2</div>
<div class="showbox slideleft">box 3</div>
<div class="showbox scale">box 4</div></div>
  
  <!--webkit的内核浏览器效果好 因为多了个showbox的css  -->