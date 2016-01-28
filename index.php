<?php
$cat = file_get_contents('http://thecatapi.com/api/images/get?format=src&type=png&size=med');

echo $cat;
?>
