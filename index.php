<?php
    // Définit la page par défaut 
    $page = isset($_GET['page']) ? $_GET['page'] : 'index';

    // Chemin du fichier correspondant à la page
    $file = __DIR__ . "src/views/" . $page . ".php";

    // Vérifie si le chemain existe, sinon affiche une erreur
    if (file_exists($file)) {
        require_once($file);
    } else {
        require_once (__DIR__ . "/src/views/page404.php");
    }
?>