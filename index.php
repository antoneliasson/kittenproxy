<?php
$cat = file_get_contents('http://thecatapi.com/api/images/get?format=src&type=png&size=med');

header('Content-Type: image/png');

echo $cat;
?>
