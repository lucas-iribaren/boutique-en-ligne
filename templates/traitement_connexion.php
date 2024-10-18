<?php

require_once "classes/Utilisateur.php";
require_once "classes/Database.php";

$message = '';

// Vérifier si une session est déjà active
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!empty($_POST)) {
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    $utilisateur = new Utilisateur();
    $user = $utilisateur->login($email, $mot_de_passe);

    if ($user) {
        $user = (array) $user;

        $_SESSION['user'] = [
            'id' => $user['id'],
            'nom' => $user['nom'],
            'prenom' => $user['prenom'],
            'email' => $user['email']
        ];

        if ($user["role_id"] == 2) {
            header('Location: profil');
        } elseif ($user["role_id"] == 1) {
            header('Location: profilAdmin');
        } else {
            $message = 'Identifiants incorrects';
        }
    } else {
        $message = 'Identifiants incorrects';
    }
}