<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Onload image fades without Flash | clagnut/sandbox</title>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<style type="text/css">
@import url(sandbox.css);
#photoholder {
width:450px;
height:338px;
border:1px solid #666;
background:#fff url('5fd411e985d2c939b90e2dfb.gif') 50% 50% no-repeat;
}
#thephoto {
width:450px;
height:338px;
}
TABLE {
margin-bottom:1em;
border-collapse:collapse;
}
TH {
font-weight:normal;
font-style:italic;
white-space:nowrap;
text-align:left;
}
TD, TH {
vertical-align:top;
padding:0.25em 0.5em;
border:1px solid #ddd;
}
</style><script type="text/javascript">
<!--
document.write("<style type='text/css'>#thephoto {visibility:hidden;}</style>");function initImage() {
imageId = 'thephoto';
image = document.getElementById(imageId);
setOpacity(image, 0);
image.style.visibility = "visible";
fadeIn(imageId,0);
}
function fadeIn(objId,opacity) {
if (document.getElementById) {
   obj = document.getElementById(objId);
   if (opacity <= 100) {
    setOpacity(obj, opacity);
    opacity += 10;
    window.setTimeout("fadeIn('"+objId+"',"+opacity+")", 100);
   }
}
}
function setOpacity(obj, opacity) {
opacity = (opacity == 100)?99.999:opacity;
// IE/Win
obj.style.filter = "alpha(opacity:"+opacity+")";
// Safari<1.2, Konqueror
obj.style.KHTMLOpacity = opacity/100;
// Older Mozilla and Firefox
obj.style.MozOpacity = opacity/100;
// Safari 1.2, newer Firefox and Mozilla, CSS3
obj.style.opacity = opacity/100;
}
window.onload = function() {initImage()}
// -->
</script>
</head><body>
<div id="content">
<h2>Example</h2>
<p id="photoholder">
<img src="http://www.mydeskcity.com/DESK/apple/iPhone_2/iPhone_2001.jpg" alt=".........." id="thephoto" />
</p>
<table>
</table>
</div> <!-- /content -->
<p>&copy;<b>copy: >
</body>
</html>

/* 等待全部图片加载完成后执行的方法 */

function $$(tag, parent) {
    return (parent || document).getElementsByTagName(tag)
}
var imgs = $$("img");
var imgArr = [];
for (var i = 0; i < imgs.length; i++) {
    imgArr.push(imgs[i].src);
}
var imageArr = [];
var n = 0;
for (var j = 0; j < imgArr.length; j++) {
    imageArr.push(new Image());
    imageArr[j].src = imgArr[j];
 
    imageArr[j].onload = function() {
        n++; //每加载完成一张图片就累加1;
        if (n == imageArr.length) {
            alert("全部图片加载完成!")
        }
    }
}?