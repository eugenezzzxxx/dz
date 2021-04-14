<?php

// Определили переменную с названием helloWorld и значением "Bye, World!". /* многострочный комментарий. */.
$helloWorld = "Bye, World!";

echo $helloWorld;
echo "<BR>". PHP_EOL;
echo "<BR>". PHP_EOL;

// определим переменную типа boolean
$isWinner = true;
$isAuthorized = false;

var_dump($isWinner);
var_dump($helloWorld);
echo "<BR>". PHP_EOL;
echo "<BR>". PHP_EOL;

// определим целое число.
$numberTen = 10;
$minusTen = -10;

var_dump($numberTen);
echo "<BR>". PHP_EOL;
var_dump($minusTen);
echo "<BR>". PHP_EOL;
echo "<BR>". PHP_EOL;

$decimalInt = 150; // десятичное число.
$octimalInt = 0123; // восьмеричное число.
$hexadecimalInt = 0xAF3; // шестнадцатиричное число.
var_dump($hexadecimalInt);
echo "<BR>". PHP_EOL;
echo "<BR>". PHP_EOL;

$myFirstDoubleVariable = 1.5;
var_dump($myFirstDoubleVariable);
echo "<BR>". PHP_EOL;
echo "<BR>". PHP_EOL;

$simple = 10.34; // простой способ.
$power = 3.4E4; // 3.4 умноженное на 10 в 4 степени.
$anotherPower = -1.34E-10; // -1.34 умноженное на 10 в -10 степени.

var_dump($simple);
echo "<BR>". PHP_EOL;
var_dump($power);
echo "<BR>". PHP_EOL;
var_dump($anotherPower);
echo "<BR>". PHP_EOL;
echo "<BR>". PHP_EOL;

$intVariable = 10;
$doubleVariable = 1.5;

$someString = "I am a string: $intVariable";
$anotherString = 'I am a string too: $intVariable';

var_dump($someString);
echo "<BR>". PHP_EOL;
var_dump($anotherString);
echo "<BR>". PHP_EOL;
