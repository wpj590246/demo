<title>transform eff</title>

<style type="text/css">/*transform*/

.showbox {
width : 100px;
-webkit-transition: all 1s ease-in-out; 
-moz-transition: all 1s ease-in-out;
}
.slideright:hover {
-webkit-transform: translate(3em,0);/*��safati,google chrome,�ѹ�*/
-moz-transform: translate(3em,0);/*firefox*/
/* ����presto��Ϊ�ں˵�Opera��-o-tansform*/
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
  
  <!--webkit���ں������Ч���� ��Ϊ���˸�showbox��css  -->