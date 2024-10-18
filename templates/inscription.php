<main>
    <form action="traitement_inscription" method="post">
        <h1>Inscription</h1>
        <p>Créez un compte pour accéder à nos services.</p>
        <div>
            <label for="prenom">prenom</label>
            <input type="text" id="prenom" name="prenom" required>
        </div>
        <div>
            <label for="nom">nom</label>
            <input type="text" id="nom" name="nom" required>
        </div>
        <div>
            <label for="email">email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="mot_de_passe">mot de passe</label>
            <input type="password" id="mot_de_passe" name="mot_de_passe" required>
        </div>
        <div>
            <input type="submit" value="valider">
        </div>
    </form>
</main>

<?php

require_once "classes/Utilisateur.php";
require_once "classes/Database.php";

if (!empty($_POST)) {
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    $mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);

    $utilisateur = new Utilisateur();
    $utilisateur->register($prenom, $nom, $email, $mot_de_passe_hash);
    
    header('Location: connexion');
}