<?php

session_start();

require 'src/models/connexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Récupérer et nettoyer les données du formulaire
    $email = trim($_POST['email']);
    $mot_de_passe = trim($_POST['mot_de_passe']);

    $connexion = connexionBDD();

    $query = $connexion->prepare("SELECT * FROM Utilisateur WHERE email = ?");
    $query->execute([$email]);

    $user = $query->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($mot_de_passe, $user['mot_de_passe'])) {
        $_SESSION['user'] = $user;
        header('Location: ../index.php?page=profil');
    } else {
        echo "Adresse email ou mot de passe incorrect.";
    }

}