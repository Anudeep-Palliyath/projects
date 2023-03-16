<?php

$image = file_get_contents('images/' . $_GET['image'] . '.jpg');

header('Content-type: image/jpeg');

echo $image;
?>