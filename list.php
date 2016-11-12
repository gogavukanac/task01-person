<?php
	echo "<pre>";
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

$listPerson = [

$personOne = [
	'first'  => 'Marko',
	'last'   => 'Markovic',
	'email'  => 'markon@email.com',
],
$personTwo = [
	'first'  => 'Ivan',
	'last'   => 'Ivanovic',
	'email'  => 'mivan@email.com',
],
$personThree = [
	'first'  => 'Sanja',
	'last'   => 'Sanjic',
	'email'  => 'sanjan@email.com',
]
];
print_r($listPerson);
foreach ($listPerson as $key => $value) {
	echo 'key: '. $key . ', value: ' . var_dump($value) . PHP_EOL;
}
PHP_EOL;

function stampajListu($listPerson) {
      foreach ($listPerson as $one) {
      	echo $one['first'] .' ' . $one['last'] . PHP_EOL;
      }
}
stampajListu($listPerson);

function stampajListu1(array $listPerson)
{
	foreach($listPerson as $person) {
		// ako je $person tipa Object od klase Person
		echo $person->ime . ' ' . $person->prezime . PHP_EOL;
		// ako je $person tipa Array tj. niz sa indeksima (keys): ime, prezime,...
		echo $person['ime'] . ' ' . $person['$prezime'] . PHP_EOL;
	}
}