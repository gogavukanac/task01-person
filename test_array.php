<?php

function printArrayElementWithKey($array, $key)
{
	echo $array[$key];
}

function  printEveryElementWtihKey($array)
{
	foreach ($array as $key => $value) {
		echo "indeks(key): " .$key;
		echo PHP_EOL , "<br>";
		echo "Vrednost (value): " . $value;
		echo PHP_EOL . "<br>";
		echo PHP_EOL . "<br>";
		echo PHP_EOL . "<br>";
	}
	echo PHP_EOL . "<br>";
}



$personTwo = [
	'first'  => 'Ivan',
	'last'   => 'Ivanovic',
	'email'  => 'mivan@email.com',
];

printEveryElementWtihKey($personTwo);