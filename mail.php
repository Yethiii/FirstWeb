<?php
// Expéditeur de l'email.
$expediteur = "Information WEB <info@siteweb.be>";

// Destinataire de l'email.
$destinataire = "Laetitia Voue <laetitia.voue@ifosup.wavre.be>";

// Sujet de l'email.
$sujet = "Projet web - Formulaire de contact";


// Configurer les entêtes.
$entetes = [
    "From" => $expediteur,
    "MIME-Version" => "1.0",
    "Content-Type" => "text/html; charset=\"UTF-8\"",
    "Content-Transfer-Encoding" => "quoted-printable"
];

// Corps du message au format HTML.
$message = "<html><body>";
$message .= "<p>Maman,</p>";
$message .= "<p>Je suis dégoûté, je viens de me faire carjackey !</p>";
$message .= "<p>Bisou,</p>";
$message .= "<p>Claudy.</p>";
$message .= "</body></html>";

// Tentative d'envoi du mail :
if (mail($destinataire, $sujet, $message, $entete)) {
    echo "Le courriel a été envoyé avec succès.";
} else {
    echo "L'envoi du courriel a échoué.";
}
