<?php require_once __DIR__ . DIRECTORY_SEPARATOR . 'header.php'; ?>

<h2>Page de connexion</h2>

<form method="POST" action="">

    <label for="pseudo">Votre nom d'utilisateur :</label>
    <input type="text" name="pseudo" placeholder="Votre nom d'utilisateur ici !" id="pseudo" required minlength="2" maxlength="255">
    <br><br>

    <label for="mot_de_passe">Votre mot de passe :</label>
    <input type="text" name="mot_de_passe" placeholder="Votre mot de passe ici !" id="mot_de_passe" required minlength="8" maxlength="72">
    <br><br>
    <button type=" submit">Connexion</button>

</form>
<p><a href="inscription.php">S'inscrire</a></p>

<?php require_once __DIR__ . DIRECTORY_SEPARATOR . 'footer.php'; ?>