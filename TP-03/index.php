<?php
// Ajouter votre réponse sur le formulaire :
// https://forms.gle/LmPNMh3HnHVVNz3M8

// Récupérer les données du formulaire, puis sortir du script PHP

// Tester l'envois du formulaire
// - on test la methode de requete (GET ou POST)

// Récupération des données du formulaire, puis affichage (echo)

// Sortie du script

?>
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