<?php
include_once 'config/config.php';

// Autoloader pour charger les classes
myAutoload::start();

// Récupération de la route (paramètre 'r' dans l'URL)
$request = $_GET['r'] ?? 'index';  // Route par défaut : 'index'

// Inclure l'en-tête et le header
include_once(__DIR__ . "/include/_head.php");
include_once(__DIR__ . "/include/_header.php");

?>
<main>
    <?php
    include_once(__DIR__ . "/include/_bandeau.php");

    // Gestion des routes
    switch ($request) {
        case 'index':
            include_once(CONTROLLER . 'HomeController.php');
            break;
        // Ajouter d'autres routes ici

        default:
            // Si la route n'existe pas, afficher la page 404
            include_once(__DIR__ . "/src/views/page404.php");
            break;
    }
    ?>
</main>
<?php
// Inclure le pied de page
include_once(__DIR__ . "/include/_footer.php");
?>
