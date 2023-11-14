<?php
$im=imagecreate(200,200) or die ("GD library not activated");
$background_color=imagecolorallocate($im,255,255,0);
$blue=imagecolorallocate($im,0,0,255);
imageline($im,0,0,200,200,$blue);
imagerectangle($im,0,50,50,100,$blue);
imagefilledrectangle($im,55,50,100,100,$blue);
imagepng($im,"demoimage.png");
?>
<img src="demoimage.png">