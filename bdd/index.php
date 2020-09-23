<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


// config.php
// --

// Definition des paramètres de connexion BDD
$db_type = "mysql";         // Type de la BDD / Type du SGBD
$db_host = "127.0.0.1";     // Adresse du serveur de BDD
$db_port = "3306";          // Port de la BDD
$db_schema = "cours_sql";   // Nom de la BDD / Nom du schema de données
$db_charset = "utf8";       // Jeu de caratères utilisé pour les données
$db_user = "osw3";          // Nom d'utilisateur de la BDD
$db_pass = "myosw3sql";     // Mot de passe de l'utilisateur de la BDD



// dbconnect.php
// --

// Definition de la chaine DSN (Domain Source Name) PDO (ex: 'mysql:host=localhost;dbname=DBNAME')
// $db_dsn = "mysql:host=localhost;dbname=DBNAME"
$db_dsn = $db_type.":";
$db_dsn.= "host=".$db_host.";";
$db_dsn.= "port=".$db_port.";";
$db_dsn.= "dbname=".$db_schema.";";
$db_dsn.= "charset=".$db_charset.";";

// Connexion à la BDD
$db = null;

try {
    $db = new PDO($db_dsn, $db_user, $db_pass);
} catch(Exception $e) {
    echo "Ooops... je ne sais pas me connecter à la BDD !!!<br>";
    echo $e->getmessage();
    exit;
}


// index.php
// --

// Liste des articles

// Definition de la requete SQL
$sql = "SELECT `id`, `title` FROM `articles`";

// Injection de la requete dans PDO
$query = $db->query($sql);

// Execution et repu. des données
$results = $query->fetchAll(PDO::FETCH_OBJ);


// Boucle sur $results
echo "<pre>";
print_r($results);
echo "</pre>";