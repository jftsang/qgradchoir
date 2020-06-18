<?php
header("Content-Type: image/jpg");
$fn = $_REQUEST["fn"];
$w = $_REQUEST["w"];
$h = $_REQUEST["w"];
$im = new Imagick($fn);
$im->thumbnailImage($w, $h, TRUE);
echo $im;
?>
