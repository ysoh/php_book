<?php
$a = "10" / "2";
echo gettype($a) . "<br>";

$a = (int) (10.0 / 2);
echo gettype($a) . "<br>";

$a = (int) 10.0 / 2;
echo gettype($a) . "<br>";

$a = 10.0 / (int) 2.0;
echo gettype($a) . "<br>";

?>