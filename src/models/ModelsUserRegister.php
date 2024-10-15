<?php

require 'connexion.php';

class UserRegister
{
    private $connexion;

    // Constructor to initialize the database connection
    public function __construct()
    {
        $this->connexion = $this->connexionBDD();
        $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    // Method to handle the database connection
    private function connexionBDD()
    {
        return connexionBDD(); // This assumes that the connexionBDD() function is defined in 'connexion.php'
    }

    // Method to register a user
    public function registerUser($prenom, $nom, $email, $mot_de_passe)
    {
        $date_inscription = date('Y-m-d h:i:s');
        $mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);

        $requete = $this->connexion->prepare("
            INSERT INTO Utilisateur (id, prenom, nom, email, mot_de_passe, date_inscription, id_adresse, role_id)
            VALUES (null, ?, ?, ?, ?, ?, ?, ?)
        ");

        $id_adresse = null; // This can be replaced with a real value if needed
        $role_id = 2; // Default role as 'client'

        try {
            $requete->execute([$prenom, $nom, $email, $mot_de_passe_hash, $date_inscription, $id_adresse, $role_id]);
            echo "L'utilisateur a été ajouté avec succès.";
        } catch (PDOException $e) {
            echo "Erreur lors de l'ajout de l'utilisateur : " . $e->getMessage();
        }
    }
}

