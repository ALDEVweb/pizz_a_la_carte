<?php

// ajout en plus du cahier des charges

// template : affiche le formulaire de création d'un compte
// parametre : aucun

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizz'@ la carte - création d'un compte</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include "templates/fragments/header.php"; ?>
    <div id="creation" class="arriere-plan w100p h100v-80"></div>
    <main class="w300 mrlauto h100v-80 flex a-center j-center">
        <div>
            <h2 class="txt-center vert">Création d'un compte</h3>
            <?php include "templates/fragments/form_creation.php"; ?>
            <div class="flex j-center mt32"><a href="index.php"><button class="white back-green btnPad radius5 b-none">Annuler</button></a></div>
        </div>
    </main>
    <script src="js/creation.js" defer></script>
</body>
</html>