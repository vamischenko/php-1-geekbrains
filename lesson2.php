<?php
echo 'Задание 1<br>';
$a = 5;
$b = 2;
if ($a >= 0 && $b >= 0) {
    echo $a - $b;
} elseif ($a < 0 && $b < 0) {
    echo $a * $b;
} elseif (($a < 0 && $b >= 0) || ($a >= 0 && $b < 0)) {
    echo $a + $b;
}
echo "<hr>";
echo 'Задание 2<br>';
$a = rand(0, 15);
echo "Число: $a <br>";
switch ($a) {
    case 0:
        echo 0;
        echo "<br>";
    case 1:
        echo 1;
        echo "<br>";
    case 2:
        echo 2;
        echo "<br>";
    case 3:
        echo 3;
        echo "<br>";
    case 4:
        echo 4;
        echo "<br>";
    case 5:
        echo 5;
        echo "<br>";
    case 6:
        echo 6;
        echo "<br>";
    case 7:
        echo 7;
        echo "<br>";
    case 8:
        echo 8;
        echo "<br>";
    case 9:
        echo 9;
        echo "<br>";
    case 10:
        echo 10;
        echo "<br>";
    case 11:
        echo 11;
        echo "<br>";
    case 12:
        echo 12;
        echo "<br>";
    case 13:
        echo 13;
        echo "<br>";
    case 14:
        echo 14;
        echo "<br>";
    case 15:
        echo 15;
}
echo "<hr>";
echo 'Задание 3<br>';

echo mult($a, rand(0, 15));

function add($a = 0, $b = 0)
{
    return $a + $b;
}

function mult($a = 0, $b = 0)
{
    return $a * $b;
}

function sub($a = 0, $b = 0)
{
    return $a - $b;
}

function div($a = 0, $b = 1)
{
    return $a / $b;
}

echo "<hr>";

echo 'Задание 4<br>';

echo mathOperation(5, 10, "summ");

function mathOperation($arg1 = 0, $arg2 = 0, $operation)
{
    switch ($operation) {
        case summ:
            return add($arg1, $arg2);
        case mult:
            return mult($arg1, $arg2);
        case sub:
            return sub($arg1, $arg2);
        case div:
            return div($arg1, $arg2);
        default:
            return "Операция не определена";
    }
}

echo "<hr>";

echo '<a href="index.php">Задание 5</a> вывести текущий год в подвале (date(\'Y\');)<hr>';


echo "Задание 6 <br>Возведение числа $b в степень $a<br>";

echo power($b, $a);

function power($val, $pow)
{

    return $pow == 0 ? 1 : $val * power($val, $pow - 1);

}

echo "<hr>";
echo "Задание 7<br>";


echo getHour() . ' ' . getMin();

function getHour()
{
    $h = date('H');
    $str = '';
    if ($h == 1 || $h == 21) {
        $str = 'час';
    } elseif (($h >= 2 && $h <= 4) || ($h > 21 && $h < 25)) {
        $str = 'часa';
    } else {
        $str = 'часов';
    }
    return $h . ' ' . $str;
}

function getMin()
{
    $m = date('i');
    $str = '';
    if ($m > 4 && $m < 21) {
        $str = 'минут';
    }
    $m2 = $m % 10;
    if ($m2 == 2 || $m2 == 3 || $m2 == 4) {
        $str = 'минуты';
    } elseif ($m2 == 1) {
        $str = 'минута';
    } else {
        $str = 'минут';
    }
    return $m . ' ' . $str;
}


?>