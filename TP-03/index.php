<?php
// Ajouter votre réponse sur le formulaire :
// https://forms.gle/LmPNMh3HnHVVNz3M8

// Récupérer les données du formulaire, puis sortir du script PHP

// Tester l'envois du formulaire
// - on test la methode de requete (GET ou POST)

// PAS BON !!
// if ( isset($_POST) )
// {
//     echo "Le formulaire est soumis !";
// }

// OK
// if ( isset($_POST['submit']) )
// {
//     echo "Le formulaire est soumis !";
// }

if ( $_SERVER['REQUEST_METHOD'] === "POST" )
{
    echo "Le formulaire est soumis !<br>";

    // Récupération des données du formulaire, puis affichage (echo)
    echo $_POST['firstname']."<br>";
    echo $_POST['lastname']."<br>";
    echo $_POST['password']."<br>";
    echo $_POST['agreeterms']."<br>";
    
    // Sortie du script
    // die;
    exit;
}


?>
<pre><?php print_r($_POST) ?></pre>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    
<form method="post">

    <div>
        <input type="text" name="firstname" placeholder="Firstname">
    </div>
    <div>
        <input type="text" name="lastname" placeholder="Lastname">
    </div>
    <div>
        <input type="password" name="password" placeholder="password">
    </div>
    <div>
        <input type="checkbox" name="agreeterms"> I agree with terms.
    </div>

    <button type="submit">Send</button>
</form>

</body>
</html>