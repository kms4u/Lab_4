<?php
$str = 'abba adca abea auba aucu aeeb adcb axeb';
preg_match_all('/u..u/', $str, $matches);
print_r($matches[0]);
?>