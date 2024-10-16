<?php

session_start();

require_once 'src/models/connexiondb.php';

$connexion = connexionBDD();

if ($connexion === null) {
    die("Impossible de se connecter à la base de données");

}

require_once 'src/models/ModelsUserRegister.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $mot_de_passe = trim($_POST['mot_de_passe']);

    $user = new UserRegister();

    $user->connexionUser($email, $mot_de_passe);

    if ($user->connexionUser($email, $mot_de_passe)) {
        header('Location: index.php?page=profil');
    }
}