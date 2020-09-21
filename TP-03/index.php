<?php
// Récupération des données du formulaire, puis sortie du script PHP

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