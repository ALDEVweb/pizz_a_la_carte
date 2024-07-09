<?php

// fragment : formulaire de connexion

?>

<form action="connecter.php" method="POST">
    <div>
        <label class="block mrlauto wfit" for="">Mail :</label>
        <input class="mrlauto" type="text" name="mail" id="mail">
    </div>
    <div>
        <label class="block mrlauto wfit" for="">Mot de passe :</label>
        <div>
            <input class="mrlauto" type="password" name="mdp" id="mdp">
            <div class="oeil-ferme flex j-center"><img src="assets/oeil-ferme.png" alt=""></div>
        </div>
    </div>
    <div class="flex j-center">
        <input class="txt-center" type="submit" value="Connexion">
    </div>
    <?php if($error === 1) echo "<p class='w200 mt16 fs12 red mrlauto'>Il y a une erreur de saisie sur ton mail ou mot de passe</p>"; ?>
</form>