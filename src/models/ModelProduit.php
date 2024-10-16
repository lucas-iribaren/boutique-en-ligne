<?php

require_once 'connexion.php';

class ModelProduit
{
    private $connexion;

    public function __construct()
    {
        $this->connexion = connexionBDD();
        $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getAllProducts()
    {
        $requete = $this->connexion->prepare("SELECT * FROM Produit INNER JOIN Categorie ON Produit.id_categorie = Categorie.id INNER JOIN SousCategorie ON Produit.id_sousCategorie = SousCategorie.id");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductById($id)
    {
        $requete = $this->connexion->prepare("SELECT * FROM Produit WHERE id = :id");
        $requete->execute(['id' => $id]);
        return $requete->fetch(PDO::FETCH_ASSOC);
    }

    public function addProduct($nom, $description, $prix, $quantite, $image, $categorie, $sous_categorie)
    {
        $date_ajout = date('Y-m-d h:i:s');
        $requete = $this->connexion->prepare("INSERT INTO Produit (id,nom, description, prix, quantite, image, date_ajout, categorie, sous_categorie) VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?)");
        $requete->execute([$nom, $description, $prix, $quantite, $image, $date_ajout, $categorie, $sous_categorie]);
    }

}