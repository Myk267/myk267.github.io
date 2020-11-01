#!/usr/bin/env php
<?php
$im = new Imagick();

echo $argv[1];
$im->readimage($argv[1]);

$color = new ImagickPixel();
$color->setColor("rgb(0,0,0)");
$im->borderImage($color,1,1);

$im->writeImage($argv[2]);
?>
