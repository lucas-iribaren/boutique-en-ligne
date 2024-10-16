<?php
$title = 'Inscription';
?>

<main class="main-inscription">
    <form action="index.php?page=connexion" class="form-inscription" method="post">
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" required aria-describedby="prenomHelp">
            <small id="prenomHelp" class="form-text text-muted">Entrez votre prénom.</small>
        </div>

        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" required aria-describedby="nomHelp">
            <small id="nomHelp" class="form-text text-muted">Entrez votre nom de famille.</small>
        </div>

        <div class="form-group">
            <label for="email">Adresse email</label>
            <input type="email" class="form-control" id="email" name="email" required aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Entrez une adresse email valide.</small>
        </div>
        
        <div class="form-group">
            <label for="mot_de_passe">Mot de passe</label>
            <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe" required aria-describedby="motDePasseHelp">
            <small id="motDePasseHelp" class="form-text text-muted">Votre mot de passe doit contenir au moins 8 caractères.</small>
        </div>

        <input type="submit" class="btn btn-primary" name="submit" value="S'inscrire">
    </form>
</main>
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Vérification des données et nettoyage
    $prenom = trim($_POST['prenom']);
    $nom = trim($_POST['nom']);
    $email = trim($_POST['email']);
    $mot_de_passe = trim($_POST['mot_de_passe']);
    
    $userRegister = new UserRegister();
    
    $userRegister->registerUser($prenom, $nom, $email, $mot_de_passe);
    header('Location: index.php?page=connexion');
}
