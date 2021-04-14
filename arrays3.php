<pre>
<?php

$users = [
	[
		"NAME" => 'Юрий',
		"AGE" => 22,
		"PHONE" => '+79991234567'
	],
	[
		"NAME" => 'Василий',
		"AGE" => 33,
		"PHONE" => '+798271929281'
	],
	[
		"NAME" => 'Никита',
		"AGE" => 36,
		"PHONE" => '+7932336982521'
	],
];

var_dump($users);

$firstUser = $users[0]; // достали один из элементов.
$firstUserName = $firstUser["Name"]; // достали имя.

var_dump($firstUserName);
var_dump($users[0]["NAME"]; // обращаемся к вложенному массиву.

$users[] = [
		"NAME" => "Илья",
		"AGE" => 16,
		"PHONE" => "+792837628362"
];

var_dump($users);

?>

</pre>
