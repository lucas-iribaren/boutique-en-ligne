<?php

// Assurez-vous que la session est démarrée
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Définir le titre de la page
$title = 'Profil';

// Inclure le fichier de connexion à la base de données
require_once(__DIR__ . '/../models/connexiondb.php');

// Récupérer l'utilisateur connecté
$connexion = connexionBDD();
$query = $connexion->prepare("SELECT * FROM Utilisateur WHERE id = ?");
$query->execute([$_SESSION['user_id']]);
$user = $query->fetch(PDO::FETCH_ASSOC);



?>

<h1>Profil de <?php echo $user['user_prenom']; ?></h1>
