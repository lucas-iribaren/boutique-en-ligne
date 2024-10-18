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
        $title = "Pixel Plush - Mon Panier";
        $myView = new View('panier');
        $myView->setVars(['title' => $title]);
        $myView->render();
    }

    public function show404()
    {
        $title = 'Erreur 404';
        $myView = new View('page404');
        $myView->setVars(['title' => $title]);
        $myView->render();
    }

    public function showCategories()
    {
        $title = 'categories';
        $myView = new View('categories');
        $myView->setVars(['title' => $title]);
        $myView->render();
    }

    public function showProfil()
    {
        $title = 'Mon Profil';
        $myView = new View('profil');
        $myView->setVars(['title' => $title]);
        $myView->render();
    }

    public function showConnexion()
    {
        $title = 'Connexion';
        $myView = new View('connexion');
        $myView->setVars(['title' => $title]);
        $myView->render();
    }

    public function showDetail()
    {
        $title = 'Détails';
        $myView = new View('detail');
        $myView->setVars(['title' => $title]);
        $myView->render();
    }
}
?>