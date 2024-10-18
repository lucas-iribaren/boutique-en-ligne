<?php

require_once "classes/Utilisateur.php";
require_once "classes/Database.php";

$message = '';

if (!empty($_POST)) {
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    $mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);

    $utilisateur = new Utilisateur();
    $utilisateur->register($prenom, $nom, $email, $mot_de_passe_hash);
    
    $message = 'Inscription réussie ! Vous pouvez maintenant vous <a href="connexion.php">connecter</a>.';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>
<body>
    <?php if ($message): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>
</body>
</html>

