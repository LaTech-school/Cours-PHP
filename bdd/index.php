<?php
include "app/app.php";


// Liste des articles

// Definition de la requete SQL
$sql = "SELECT `id`, `title` FROM `articles`";

// Injection de la requete dans PDO
$query = $db->query($sql);

// Execution et repu. des données
$results = $query->fetchAll(PDO::FETCH_OBJ);
?>


<ul>
    <?php foreach ($results as $item): ?>
    <li>
        <a href="./article.php?id=<?= $item->id ?>"><?= $item->title ?></a>
    </li>
    <?php endforeach; ?>
</ul>