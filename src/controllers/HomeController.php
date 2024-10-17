<?php

class HomeController
{
    // Pour afficher la page index
    public function showHome()
    {
       include_once (VIEW.'index.php'); 
    }

    // Pour afficher la page panier
    public function showPanier()
    {
        include_once (VIEW.'panier.php');
    }
}
?>