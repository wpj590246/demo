<?php
require_once '../app.php';
// header("Content-type: image/png");
//$im = @imagecreate(100, 50)
//    or die("Cannot Initialize new GD image stream");
//$background_color = imagecolorallocate($im, 255, 255, 0);
//$text_color = imagecolorallocate($im, 233, 14, 91);
//imagefttext($im, 25, 0, 10,35, $text_color, '../fonts/W5.ttc', '汉自拉拉');
//imagepng($im);

//header("Content-type: image/jpeg");
//$b= imagecreate(100, 50);
//imagecolorallocate($b, 255, 255, 255);
//$iLineColour = imagecolorallocate($b, 255, 255, 0);
//imageline($b, rand(0, 100), rand(0, 50), rand(0, 100), rand(0, 50), $iLineColour);
//imagejpeg($b);

Util::CaptchaCreate();

?>
