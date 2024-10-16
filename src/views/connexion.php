
<main class="main-connexion">
    <form action="index.php?page=profil" class="form-connexion" method="post">
        <div class="form-group">
            <label for="email">Adresse email</label>
            <input type="email" class="form-control" id="email" name="email" required aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Entrez votre adresse email.</small>
        </div>

        <div class="form-group">
            <label for="mot_de_passe">Mot de passe</label>
            <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe" required aria-describedby="motDePasseHelp">
            <small id="motDePasseHelp" class="form-text text-muted">Entrez votre mot de passe.</small>
        </div>

        <input type="submit" class="btn btn-primary" name="submit" value="Se connecter">
    </form>
</main>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Vérification des données et nettoyage
    $email = trim($_POST['email']);
    $mot_de_passe = trim($_POST['mot_de_passe']);
    
    $user = new UserRegister();
    
    $user->connexionUser($email, $mot_de_passe);
    
    if ($user->connexionUser($email, $mot_de_passe)) {
        header('Location: index.php?page=profil');
    }
}
