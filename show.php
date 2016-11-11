<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
// echo "<pre>";
$content = file_get_contents("test.json");
// echo $content;
// echo PHP_EOL;
$person = json_decode($content, true);
//print_r($person);
//var_dump($person);

echo "person";
echo "<br>";
echo "email: " . $person['email'];
echo "<br>";
echo "password: " . $person['password'];


// echo "</pre>";