<?php
include_once 'config/config.php';

include_once ('src/controllers/HomeController');

myAutoload::start();

$request = isset($_GET['r']) ? $_GET['r'] : null; // index.php?r...

if ($request == "index")
{
    include_once (CONTROLLER . 'home.php');
}


include_once(__DIR__ . "/include/_head.php");
include_once(__DIR__ . "/include/_header.php");

?>
<main>
    <?php
    include_once(__DIR__ . "/include/_bandeau.php");

    // Définit la page par défaut 
    $page = isset($_GET['page']) ? $_GET['page'] : 'index';

    // Chemin du fichier correspondant à la page
    $file = __DIR__ . "/src/views/" . $page . ".php";

    // Vérifie si le chemain existe, sinon affiche une erreur
    if (file_exists($file)) {
        require_once($file);
    } else {
        require_once(__DIR__ . "/src/views/page404.php");
    }
    ?>
</main>
<?php
include_once(__DIR__ . "/include/_footer.php");
?>