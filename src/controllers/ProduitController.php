<?php

require_once '../models/ModelProduit.php';
require_once '../models/connexion.php';

class ProduitController
{
    private $modelProduit;
    private $connexion;
    public function __construct()
    {
        $this->connexion = connexionBDD();
        $this->modelProduit = new ModelProduit();
    }

    public function getAllProducts()
    {
        return $this->modelProduit->getAllProducts();
    }
    
}