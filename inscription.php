<?php require_once __DIR__ . DIRECTORY_SEPARATOR . 'header.php'; ?>

<h2>Formulaire d'inscription</h2>

<form method="POST" action="">

    <label for="pseudo">Votre nom d'utilisateur * :</label>
    <input type="text" name="pseudo" placeholder="Votre nom d'utilisateur ici !" id="pseudo" required minlength="2" maxlength="255">
    <br><br>

    <label for="email">Votre e-mail * :</label>
    <input type="email" name="email" placeholder="Votre e-mail ici !" id="email" required>
    <br><br>

    <label for="mot_de_passe">Votre mot de passe * :</label>
    <input type="text" name="mot_de_passe" placeholder="Votre mot de passe ici !" id="mot_de_passe" required minlength="8" maxlength="72">
    <br><br>
    <label for="conf_mot_de_passe">Confirmation de votre mot de passe * :</label>
    <input type="text" name="conf_mot_de_passe" placeholder="Confirmation de votre mot de passe ici !" id="conf_mot_de_passe" required minlength="8" maxlength="72">
    <br>
    <p> Les champs marqués d'une * sont obligatoires ! </p>
    <br>
    <button type=" submit">Valider mon inscription</button>

</form>

<?php require_once __DIR__ . DIRECTORY_SEPARATOR . 'footer.php'; ?>