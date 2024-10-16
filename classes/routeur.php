<?php

// Classe Routeur qui gère les routes et appelle les controllers
class Routeur
{
    private $request;
    
    // Tableau de correspondance entre les routes et les controllers
    private $routes = [ 
                            "index"  => "HomeController", 
                            "panier" => "PanierController"
                      ];

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function renderController()
    {
        $request = $this->request;

        // Vérifie si la requête (r) existe dans les routes
        if(array_key_exists($request, $this->routes)) 
        {
            // Récupère le contrôleur associé à la requête
            $controller = $this->routes[$request];
            include_once (CONTROLLER . $controller . '.php');

            $currentController = new $controller();
            $currentController->$method();
            
        } 
        else 
        {
            // Si la route n'existe pas, affiche la page 404
            include_once (VIEW . "page404.php");
        }
    }
}
?>
