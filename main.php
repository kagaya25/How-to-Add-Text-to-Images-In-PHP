<?php
// (A) OPEN IMAGE
$img = imagecreatefromjpeg('balloon.jpg');

// (B) WRITE TEXT
$white = imagecolorallocate($img, 255, 255, 255);
$txt = "Hello World";
$font = "C:\Windows\Fonts\arial.ttf"; 

// THE IMAGE SIZE
$width = imagesx($img);
$height = imagesy($img);

// THE TEXT SIZE
$text_size = imagettfbbox(24, 0, $font, $txt);
$text_width = max([$text_size[2], $text_size[4]]) - min([$text_size[0], $text_size[6]]);
$text_height = max([$text_size[5], $text_size[7]]) - min([$text_size[1], $text_size[3]]);

// CENTERING THE TEXT BLOCK
$centerX = CEIL(($width - $text_width) / 2);
$centerX = $centerX<0 ? 0 : $centerX;
$centerY = CEIL(($height - $text_height) / 2);
$centerY = $centerY<0 ? 0 : $centerY;
imagettftext($img, 24, 0, $centerX, $centerY, $white, $font, $txt);

// (C) OUTPUT IMAGE
header('Content-type: image/jpeg');
imagejpeg($img);
imagejpeg($img, "test.jpg", 100);