 <pre>
<?php
// объявление переменных.
$message;

// объявление с присваиванием.
$fuel = "gasoline";
$age = 21;

// использование (чтение).
$print($age);

// переопределение.
$fuel = "diesel";

// уничтожение переменной.
unset($age);

// конкатенация.
$fish = "shark";
$type = "predator";
$area = "the sea";

$desc = $fish . "_" . $area . $type;

// shark the sea predator.
print($desc);

?>
</pre>
