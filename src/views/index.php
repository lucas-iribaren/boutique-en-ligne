<?php
$title = 'Accueil';

if(isset($_SESSION['prenom'])) {
    session_start();
    echo "Hello". $_SESSION['prenom'];
} else {
    echo "<h1>Pixel Plush</h1>";
}

?>

