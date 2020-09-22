<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Variables et constantes</h1>

    <h2>Variables</h2>

    <?php
    // Definition d'une variable
    // Une variable est un espace mémoire sur le serveur
    // Fonctione par paire nom/valeur
    // La variable est accessible sur TOUT le programme


    // Déclaration d'une variable
    $a = null;

    // Déclaration d'une variable et affectation de valeur
    $b = "azerty";
    ?>

    variable $a : <?php var_dump($a); ?><br>
    variable $b : <?php var_dump($b); ?><br>
    
    <?php
    // Régles de nommage d'une variable
    // --
    // Déclaration avec le sympbole $ 
    // Suivie du nom de la variable
    // --

    // Autorisé
    // - caractères alpha a-z A-Z
    // - chiffres 0-9
    // - underscore _

    // Pas autorisé
    // - Commence par un chiffre
    // - Caractères spéciaux @&é"'(§è!çà)-#°;,=+%£$€|{}[]/\ß…•÷≠

    // ma_variable_ecrite_en_slug
    // maVariableEnLowerCamelCase
    // MaVariableEnUpperCamelCase
    ?>

    <?php
    // Type et valeur flexiobles

    $c = "azerty"; ?>
    variable $c : <?php var_dump($c); ?><br>

    <?php $c = 42; ?>
    variable $c : <?php var_dump($c); ?><br>

    <?php
    // Appel d'une variable non déclarée
    var_dump($d);
    ?>


    <h2>Constantes</h2>

    <?php
    // Definition d'un constante
    // C'est une variable invariable !
    // Une constante est un espace mémoire sur le serveur
    // Fonctione par paire nom/valeur
    // La constante est accessible sur TOUT le programme
    // NE PEUT PAS ETRE MODIFIEE

    // Declaration d'une contante
    
    // Possibilité 1 
    // Avec le mot clé "const" suivi du nom de la constante
    const MY_FIRST_CONSTANT = "Hello la constante !" ;
    ?>
    constante MY_FIRST_CONSTANT : <?php var_dump( MY_FIRST_CONSTANT ); ?><br>

    <?php
    // Possibilité 2 
    // Avec la fonction "define"
    // https://www.php.net/manual/fr/function.define.php
    define( 'MY_SECOND_CONSTANT', "Goodbye define constant" );
    define( 'MY_THIRD_CONSTANT', "Faut pas faire ça !!!!!!", true );
    ?>
    constante MY_SECOND_CONSTANT : <?php var_dump( MY_SECOND_CONSTANT ); ?><br>

    constante my_first_constant : <?php var_dump( my_first_constant ); ?><br>
    constante my_second_constant : <?php var_dump( my_second_constant ); ?><br>

    constante MY_THIRD_CONSTANT : <?php var_dump( MY_THIRD_CONSTANT ); ?><br>
    constante my_third_constant : <?php var_dump( my_third_constant ); ?><br>
</body>
</html>