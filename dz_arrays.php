<?php
/* Дан массив
[

	["Vasja, 4, "bbb"],
	["Petja", 2, "gh"],
	["Kolja", 6, "tre"],
	["Roma", 1, "lkn"],

]

Написать функцию которая перебирает в цикле все строчки массива.
Переменные из каждой строчки отправляют на ф-ию а1 из первого задания строчки массивов. */


// Функция 1
function getFunction1($a1,$a2,$a3)
{
  // Число от 1 до 10
  $data = rand(1, 10);
  return $data;
}
// Функция 2
function getFunction2($a1)
{
  // Число от 2 до 7
  $rand = rand(2, 7);
  // Умножаем
  $data = ($a1 * $rand);
  return $data;
}
// Функция 3
function getFunction3($a1)
{
  // Обрезаем данные до первого символа
$data = substr($a1, 0,1);
  return $data;
}
//Маcсив
$array = [
  [Vasja, 4, bbb],
  [Petja, 2, gh],
  [Kolja, 6, tre],
  [Roma, 1, lkn],
];

// Запускаем цикл
foreach ($array as list($a1, $a2, $a3)) {

    //echo "$name\n";



// Данные для функции 1
// $a1 = 'Vasja';
// $a2 = '444';
// $a3 = 'bb';

// Вызываем функцию 1
$func1 = getFunction1($a1,$a2,$a3);

// Вызываем функцию 2
$func2 = getFunction2($func1);

// Вызываем функцию 3
$func3 = getFunction3($a1);

//Выводим результат функции 1
echo "$func1 <br>";
//Выводим результат функции 2
echo "$func2 <br>";
//Выводим результат функции 3
echo "$func3 <br>";
}
?>
