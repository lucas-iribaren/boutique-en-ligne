<?php

class AdminProduitsController extends Controller
{
    public function index()
    {
        // Récupére les produits depuis la base de données
        $products = $this->productModel->getAllProducts();

        // Passe les produits à la vue
        require_once 'src/views/admin-produits.php';
    }
}
