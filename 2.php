<?php
$str = 'a1b2c3';

$result = preg_replace_callback('/\d+/', function($matches) {
    $number = $matches[0];
    $sum = array_sum(str_split($number));
    return $sum;
}, $str);

echo $result; // Выведет: a1b2c3 (поскольку для однозначных чисел сумма цифр равна самому числу)
?>