<?php
    header("Content-type:image/png");
    $color = imagecreatetruecolor(255, 255);

    $colorint = imagecolorallocate($color, 255, 255, 0);

    $image;

    imagefilledrectangle($image, 0, 0, 255, 255, 15);

    imagepng($image);

    imagedestroy($image);

    ?>