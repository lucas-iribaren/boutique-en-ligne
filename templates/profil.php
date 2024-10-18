<?php
// Vérifier si une session est déjà active
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<main>
    <h1>Profil</h1>
    <p>
        <?php
        if (isset($_SESSION['user'])) {
            echo "Bonjour " . $_SESSION['user']['prenom'] . " " . $_SESSION['user']['nom'] . "<br>";
            echo "Email: " . $_SESSION['user']['email'];
        } else {
            echo "Vous n'êtes pas connecté.";
        }
        ?>
    </p>
</main>