<?php
session_start();
header("Content-type: image/jpeg");
$text=$_SESSION['secure'];
//$text=substr(md5(rand(0,999)), 15, 5);
$font_size=20;

$image_width=  120;
$image_height=40;

$image=  imagecreate($image_width,$image_height);
imagecolorallocate($image, 255,255,255);
$text_color=  imagecolorallocate($image, 169,169,169);

for($x=1;$x<=50;$x++)
{
    $x1=  rand(1, 100);
    $y1=  rand(1, 100);
    $x2=  rand(1, 100);
    $y2=  rand(1, 100);
    imageline($image, $x1, $y1, $x2, $y2, $text_color);
}

imagettftext($image, $font_size, 0, 15, 30, $text_color, 'VeraIt.ttf', $text);
imagejpeg($image);
?>