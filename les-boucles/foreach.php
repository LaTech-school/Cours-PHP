<?php

// Tableau numerique $fruits
// $fruits = [
//     "Pommes",
//     "Poires",
//     "Bananes",
//     "Kiwis",
// ];

// echo "<pre>";
// print_r($fruits);
// echo "</pre>";

// syntaxe
// foreach ($array as $key => $value)
// foreach ($fruits as $key => $value)
// {
//     echo $key ."<br>";
//     echo $value ."<br>";
//     echo  "<hr>";
// }


// foreach ($array as $value)
// foreach ($fruits as $value) 
// {
//     echo $value ."<br>";
// }

// foreach ($fruits as $fruit) 
// {
//     echo $fruit ."<br>";
// }



// Tableau associatif
$fruits = [
    'Pommes' => "Rouge",
    'Poires' => "Vert",
    'Bananes' => "Jaune",
    'Kiwis' => "Marron",
];

echo "<pre>";
print_r($fruits);
echo "</pre>";


// foreach ($array as $key => $value)
// foreach ($array as $value)

foreach ($fruits as $name => $color) 
{
    echo $name ." : ". $color ."<br>";
}