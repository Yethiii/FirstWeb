<?php
$nomDuServeur = "localhost";
$nomUtilisateur = "root";
$motDePasse = "";
$nomBDD = "bdd_projet_web";

try {
    // Instancier une nouvelle connexion.
    $pdo = new PDO("mysql:host=$nomDuServeur;dbname=$nomBDD", $nomUtilisateur, $motDePasse);

    // Définir le mode d'erreur sur "exception".
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $requete = "CREATE TABLE t_utilisateur_uti (
        uti_id INT AUTO_INCREMENT PRIMARY KEY,
        uti_pseudo VARCHAR(32) NOT NULL,
        uti_email VARCHAR(255) UNIQUE
    ) ENGINE=InnoDB";

    // Exécuter la requête SQL pour créer la table "t_utilisateur_uti".
    $pdo->exec($requete);
} catch (PDOException $e) {
    echo "Erreur d'exécution de requête : " . $e->getMessage() . PHP_EOL;
}
