<?php 
// Ajouter votre réponse sur le formulaire :
// https://forms.gle/oFeunAjpJrskBrHeA


// Récupèrer les données du tableau pour effectuer un addition dont le résultat sera 142
$num = [
    42,  // 0
    100  // 1
];

var_dump($num);
echo 42 + 100 ."<br>";
echo $num[0] + 100 ."<br>";
echo $num[0] + $num[1] ."<br>";
echo array_sum($num) ."<br>";


// Afficher la phrase "Bob cultive du maïs et du blé". 
$assoc = [
    'name' => "Bob",
    'farm' => [
        "maïs",
        "blé"
    ]
];


echo "Bob cultive du maïs et du blé<br>";
echo $assoc['name'] . " cultive du maïs et du blé<br>";

$ble = $assoc['farm'][1];

echo $assoc['name'] . " cultive du " . $assoc['farm'][0] . " et du $ble <br>";
echo $assoc['name'] . ' cultive du ' . $assoc['farm'][0] . ' et du $ble <br>';

echo "<pre>";
print_r( $assoc['farm'][0] );
echo "</pre>";