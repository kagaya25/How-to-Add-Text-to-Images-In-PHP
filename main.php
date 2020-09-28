<?php
//OPEN IMAGE
$img = imagecreatefromjpeg('sample.jpg');
//WRITE TEXT
$white = imagecolorallocate($img, 255, 255, 255);
$txt = "1,000,000 Views";
$font = "C:\Windows\Fonts\arial.ttf"; 
//THE TEXT Position
$positionX = 204;
$positionY = 228;
imagettftext($img, 80, 0, $positionX, $positionY, $white, $font, $txt);
imagettftext($img, 80, 0, 204, 328, $white, $font, $txt);
//OUTPUT IMAGE
imagejpeg($img);
imagejpeg($img, "test.jpg", 100);
imagedestroy($img);