<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$myNumbers = [3, 5, 7];
// var_dump($myNumbers);
// print_r($myNumbers);

foreach ($myNumbers as $key => $value) {
	// echo $item . PHP_EOL;
	echo 'key: '. $key . ', value: ' . $value . PHP_EOL;
}


$myWords = ['Ruma','Beograd'];
print_r($myWords);
// array_push($myNumbers, 9);

$myNumbers[] = 9;
print_r($myNumbers);
$myWords[] = 'Valjevo';
print_r($myWords);
$myAssoc = [
	'city'		=> 'Cacak',
	'phone'		=> '555-56123456',
];
print_r($myAssoc);

$myList = [];
$personOne = [
	'first'  => 'Mihajlo',
	'last'   => 'Pupin',
	'email'  => 'mihajlopupin@email.com',
];
$personTwo = [
	'first'  => 'Nikola',
	'last'   => 'Tesla',
	'email'  => 'nikola@tesla.com',
];
foreach ($personOne as $key => $value) {
	// echo $item . PHP_EOL;
	echo 'key: '. $key . ', value: ' . $value . PHP_EOL;
}

$myList[] = $personOne;
$myList[] = $personTwo;
foreach ($myList as $key => $value) {
	// echo $item . PHP_EOL;
	echo 'key: '. $key . ', value: ' . var_dump($value) . PHP_EOL;
}
print_r($myList);
$jsonString = json_encode($myList);
echo $jsonString;
file_put_contents("moja-lista.json", $jsonString);
$content = file_get_contents("moja-lista.json");
$listaOsoba = json_decode($content, true);

$personThree = [
    'first'  =>'Marco',
    'last'   =>'Polo',
    'email'  =>'marcopolo@email.com',
];
$listaOsoba[] = $personThree;
print_r($listaOsoba);
$jsonString = json_encode($listaOsoba);
echo $jsonString;
file_put_contents("moja-lista.json", $jsonString);
