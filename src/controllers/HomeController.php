<?php

class HomeController
{
    // Pour afficher la page index
    public function showHome()
    {
        //global $title;
        $title = "Accueil";
       include_once (VIEW.'index.php'); 
    }

    // Pour afficher la page panier
    public function showPanier()
    {
        //global $title;
        $title = "Panier";
        include_once (VIEW.'panier.php');
    }
}
?>