<?php
include_once 'config/config.php';

// Récupération de la route (paramètre 'r' dans l'URL)
$request = $_GET['r'] ?? 'index';  // index.php?r...

// Définition du titre selon la page
if ($request === 'index') {
    $title = 'Pixel Plush';
} elseif ($request === 'panier') {
    $title = 'Mon Panier';
} else {
    $title = 'Erreur 404';
}

// Autoloader pour charger les classes
myAutoload::start();

?>
<main>
    <?php

    $routeur = new Routeur($request);
    $routeur->renderController();
    ?>
</main>

