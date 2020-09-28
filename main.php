<?php
// (A) OPEN IMAGE
$img = imagecreatefromjpeg('sample.jpg');

// (B) WRITE TEXT
$white = imagecolorallocate($img, 255, 255, 255);
$txt = "1,000,000 Views";
$font = "C:\Windows\Fonts\arial.ttf"; 

//  THE TEXT Position
$centerX = 204;
$centerY = 228;
imagettftext($img, 80, 0, $centerX, $centerY, $white, $font, $txt);

// (C) OUTPUT IMAGE

imagejpeg($img);
imagejpeg($img, "test.jpg", 100);
imagedestroy($img);