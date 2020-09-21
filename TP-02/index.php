<?php 
// Ajouter votre réponse sur le formulaire :
// https://forms.gle/ysYGhm4YKgihMVz48

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$arr = [
    [
        'name' => "Batman",
        'powers' => ["Belt", "Money"]
    ],
    [
        'name' => "Superman",
        'powers' => ["Lazer eyes", "Fly", "Speed"]
    ]
];

// Afficher la liste des heros dans une liste de définition HTML
// Batman
//      Belt, Money
// Superman
//      Lazer eyes, Fly, Speed

// lister de definition HTML <dl> <dt> <dd> w3school
// instruction php "for" ou "foreach"
// instruction php "implode"

?>

<h2>Rendu souhaité</h2>
<dl>
    
    <dt>Batman</dt>
    <dd>Belt, Money</dd>

    <dt>Superman</dt>
    <dd>Lazer eyes, Fly, Speed</dd>

</dl>

<hr>


<h2>Corretion 1</h2>

<?php

echo "<dl>";

// foreach ($array as $value)
foreach ($arr as $hero)
{
    echo "<dt>" . $hero['name'] . "</dt>";
    echo "<dd>" . implode(", ", $hero['powers']) . "</dd>";
}

echo "</dl>";

?>

<hr>


<h2>Corretion 2</h2>

<dl>
<?php foreach( $arr as $hero ): ?>
    <dt><?= $hero['name'] ?></dt>
    <dd><?= implode(", ", $hero['powers']) ?></dd>
<?php endforeach; ?>
</dl>

