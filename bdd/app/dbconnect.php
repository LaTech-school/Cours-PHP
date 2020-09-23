<?php

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