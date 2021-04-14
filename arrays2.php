<pre>
<?php

$myArray = []; // пустой массив (работает только на PHP 5.4 и выше).
$anotherEmptyArray = array(); // еще способ создать массив.

var_dump($myArray);
var_dump($anotherEmptyArray);

$numbersArray = [1, 2, 3, 4]; // инициализировали массив числами.
$mixedTypeArray = [1, "I am a string", 1.5]; // массив смешанный тип данных.

var_dump($numbersArray);
var_dump($mixedTypeArray);

$customKeysArray = [
	12 => "Значение",
	133 => 15,
	128 => 1.5E-7
];

var_dump($customKeysArray);

// массив в котором ключи - это строки.
$stringKeysArray = [
	"ID" => 138,
	"NAME" => "Eugene",
	"AGE" => 38
];

var_dump($stringKeysArray);

// ключами массива могут быть одновременно и числа и строки.
$mixedTypeKeysArray = [
	12 => "Я Значение с ключом типа число",
	"SOME_KEY" => "Я значение с ключом типа строка"
];

// достаем элемент из массива.
$arrayElement = $mixedTypeKeysArray[12];
$anotherArrayElements = $mixedTypeKeysArray["SOME_KEY"];

var_dump($mixedTypeKeysArray);
var_dump($arrayElement);

$mixedTypeKeysArray[12] = 100;

var_dump($mixedTypeKeysArray);
?>


</pre>
