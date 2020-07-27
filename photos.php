<?php

function includeFigure($fn, $w, $h, $caption)
{
    $photourl = sprintf("/images/photos/%s", $fn);
    $imsrc = sprintf("smallphoto.php?fn=images/photos/%s&w=%d&h=%d", $fn, $w, $h);

    printf("<tr><td><a href=\"%s\">\n", $photourl);
    printf("<img src=\"%s\" class=\"gallery\" \n", $imsrc);
    printf("alt=\"%s\" \ntitle=\"%s\" />\n", $caption, $caption);
    printf("</a></td>\n");
    printf("<td>");
    printf("<p class=\"caption\">%s</p>", $caption);
    printf("</td><tr>\n");
}

require 'header.php';
?>

<body>

<h1>Queens' Graduate Choir</h1>

<? require_once("topbar.php") ?>

<h2>Photos</h2>

<p style="font-size: small; font-style: italic;">Click on each photo for full resolution...</p>

<table>
<? includeFigure("202003xx_botc.jpg", 600, 600,
"Battle of the Choirs, March 2020. Photo credit: Suzy Digby."
); ?>


<? includeFigure("20190308-botc-all.jpg", 600, 600,
"Battle of the Choirs, 8 March 2019, between us, the Chapel Choir and the
Fellows' Choir. We won for the first time ever! Photo credit: Suzy Digby."
); ?>

<? includeFigure("20190308_193217.jpg", 600, 600,
"A vigorous performance of Faure's Cantique de Jean Racine, at the Battle of
the Choirs. Photo credit: Robin Pillinger."); ?>

<? includeFigure("20190303-evensong.jpg", 600, 600,
"The choir after Choral Evensong at Queens', 3 March 2019."
); ?>

<? includeFigure("IMG_20181204_191701_HHT.jpg", 600, 600,
"The Choir after the Staff Carol Service, 4 December 2018."
); ?>

<? includeFigure("192380_205302902832355_7911037_o.jpg", 600, 600,
"The Choir performing in Old Hall."
); ?>
</table>

<? require_once("bottombar.php") ?>
</body>
</html>

