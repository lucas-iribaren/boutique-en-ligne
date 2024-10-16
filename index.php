<?php
include_once 'config/config.php';

// Autoloader pour charger les classes
myAutoload::start();


// Inclure l'en-tête et le header
include_once(__DIR__ . "/include/_head.php");
include_once(__DIR__ . "/include/_header.php");

?>
<main>
    <?php
    include_once(__DIR__ . "/include/_bandeau.php");

    // Récupération de la route (paramètre 'r' dans l'URL)
        $request = $_GET['r'] ?? 'index';  // index.php?r...

        include_once (CLASSES.'Routeur.php');

        $routeur = new Routeur($request);
        $routeur->renderController();

    
    ?>
</main>
<?php
// Inclure le pied de page
include_once(__DIR__ . "/include/_footer.php");
?>
