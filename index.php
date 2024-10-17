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
    $title = 'Erreur 404'; // Titre par défaut pour les pages non définies
}

// Autoloader pour charger les classes
myAutoload::start();

// Inclure l'en-tête et le header
include_once(__DIR__ . "/include/_head.php");
include_once(__DIR__ . "/include/_header.php");
?>
<main>
    <?php
    include_once(__DIR__ . "/include/_bandeau.php");

    $routeur = new Routeur($request);
    $routeur->renderController();
    ?>
</main>
<?php
// Inclure le pied de page
include_once(__DIR__ . "/include/_footer.php");
?>
