<?php

class HomeController
{
    // Pour afficher la page index
    public function showHome()
    {
        $title = "Pixel Plush";
        $myView = new View('index');
        $myView->setVars(['title' => $title]);  // Passer la variable $title à la vue
        $myView->render(); // Passer les variables dans les parenthèse pour afficher les objets
    }

    // Pour afficher la page panier
    public function showPanier()
    {
        $title = "Mon Panier";
        $myView = new View('panier');
        $myView->setVars(['title' => $title]);
        $myView->render();
    }
}
?>