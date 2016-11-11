<?php
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
      	echo $one . PHP_EOL;
      }
};
stampajListu($personOne);
stampajListu($personTwo);
stampajListu($personThree);

//print_r($osobe2d);['adresa']['ulica']
//$target = $osobe2d[4]['adresa']['ulica'];
//print_r($target);


