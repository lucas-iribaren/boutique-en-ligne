<?php

require 'src/models/ModelsUsers.php';

function addUserPage() {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        // Récupérer et nettoyer les données du formulaire
        $prenom = trim($_POST['prenom']);
        $nom = trim($_POST['nom']);
        $email = trim($_POST['email']);
        $mot_de_passe = trim($_POST['mot_de_passe']);
        
        $userRegister = new UserRegister();
        
        // Appeler la méthode d'inscription
        $userRegister->registerUser($prenom, $nom, $email, $mot_de_passe);
    }
    
    require 'src/views/inscription.php';
}
