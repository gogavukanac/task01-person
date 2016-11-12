<?php
echo "<pre>";
// $imena = ["Gorana", "Vlada", "Ime"];
// function stampaj($g) {
//     foreach ($g as $one) {
//         echo "type: " . gettype($one) . PHP_EOL;
//         echo $one  . PHP_EOL;
//     }
// }
// stampaj($imena);
// $osoba1 = new Person("Gorana", "Vukanac");
// $osoba2 = new Person("Veliki", "Samja");
// $osoba3 = new Person("Vlada", "Deriguz");

// $osobe = [$osoba1, $osoba2, $osoba3];
// function stampajOsobe($g) {
//     foreach ($g as $one) {
//         echo $one->ime . PHP_EOL;
//         echo "type: " . gettype($one) . PHP_EOL;
//         echo "type: " . get_class($one) . PHP_EOL;
//     }
// }
// stampajOsobe($osobe);
// /**
// * 
// */
// class Person
// {
//     public $ime;
//     public $prezime;
    
//     public function __construct($ime, $prezime)
//     {
//         $this->ime = $ime;
//         $this->prezime = $prezime;
//     }
// }

$osobaArA = [
"ime" => 'Goga',
'prezime' => 'Vukanac',
'adresa' => [
    'ulica' => 'BS',
    'broj' => 65
    ]
];
// p\rint_r($osobaArA["ime"]);
// echo "string";
$osobaArB = [
"ime" => 'Goga2',
'prezime' => 'Vukanac2'
];
$osobe2d = [$osobaArA, $osobaArB];

print_r($osobe2d);
$target = $osobe2d[0]['adresa']['ulica'];
print_r($target);

// echo PHP_EOL.PHP_EOL;

// function stampajNove($g) {
//    foreach ($g as $one) {
//        // echo $->;
//         echo "type: " . gettype($one) . PHP_EOL;
//         echo $one  . PHP_EOL;
//    }
// }
// stampajNove($Osobe2d);