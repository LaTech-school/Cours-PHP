<h1>Les fonctions</h1>

<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Déclaration d'une fonction
// - Mot clé "function"
// - Suivi du nome de la fonction 
function doSomething() {

    echo "Affiche ligne 1 <br>";

    $a = 5;
    $b = 12;

    echo $a + $b;
    echo "<br>";

}


// Appel d'une fonction
// doSomething();


// Déclaration d'une fonction avec paramètres d'entrté
function doSubtration($a, $b) 
{
    echo $a - $b;
}

// doSubtration(20, 10);echo "<br>";
// doSubtration(10, 20);echo "<br>";

// Déclaration d'une fonction avec paramètres d'entrté facultatif
function doAddition($c, $d=5)
{
    echo $c + $d; // Sortie PHP
}

// doAddition(10, 20);echo "<br>";
// doAddition(10);echo "<br>";


// Sortie de fonction
function multiply($e=0, $f=0)
{
    // echo $e * $f; // Sortie PHP
    return $e * $f; // Sortie de fonction
}

// echo multiply(50, 2);
doAddition( 100 , multiply( 40, 3) );

