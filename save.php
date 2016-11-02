<?php
echo '<pre>';
$email = $_POST["email"];
$psw   = $_POST["psw"];
// echo "My email is $email";

$personThree = [
	'email'		=> $email,
	'password'	=> $psw
];

$content = file_get_contents("moja-lista.json");
$listaOsoba = json_decode($content, true);

$personThree = [
    'first'  =>'Lazar',
    'last'   =>'Hrebeljanovic',
    'email'  =>'lazar@email.com',
];
$listaOsoba[] = $personThree;
print_r($listaOsoba);
$jsonString = json_encode($listaOsoba);
echo $jsonString;
file_put_contents("moja-lista.json", $jsonString);
echo '</pre>';

?>
