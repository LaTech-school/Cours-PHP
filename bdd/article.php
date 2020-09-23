<?php
include "app/app.php";

// Recup de l'id de l'article depuis l'url
if (isset($_GET['id']))
{
    $id = intval($_GET['id']);
}
else {
    echo "Ooops, je ne retrouve pas l'id de l'article.";
    exit;
}


// Definition de la requete SQL
$sql = "SELECT `title`, `content` FROM `articles` WHERE `id`=:id";

// Préparation de la requete
$query = $db->prepare($sql);

// Définition des paramètres de la requete
$query->bindParam(":id", $id, PDO::PARAM_INT);

// Execution de la requete
$query->execute();

// Repu. des données
$article = $query->fetch(PDO::FETCH_OBJ);

// var_dump($results);
?>

<h2><?= $article->title ?></h2>
<p><?= $article->content ?></p>