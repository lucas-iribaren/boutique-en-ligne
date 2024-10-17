<?php

class HomeController
{
    // Pour afficher la page index
    public function showHome()
    {
        $myView = new View('index');
        $myView->render(); // Passer les variables dans les parenthèse pour afficher les objets
    }

    // Pour afficher la page panier
    public function showPanier()
    {
        $myView = new View('panier');
        $myView->render();
    }
}
?>