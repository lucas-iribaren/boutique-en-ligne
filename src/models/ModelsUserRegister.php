<?php

require_once 'connexiondb.php';

class UserRegister
{
    private $connexion;


    public function __construct()
    {
        $this->connexion = $this->connexionBDD();
        $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    
    private function connexionBDD()
    {
        return connexionBDD();
    }

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

    public function connexionUser($email, $mot_de_passe)
    {
        $requete = $this->connexion->prepare("SELECT id, nom, prenom, email, role_id FROM Utilisateur WHERE email = ?");

        try {
            $requete->execute([$email]);
            $user = $requete->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($mot_de_passe, $user['mot_de_passe'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_prenom'] = $user['prenom'];
                $_SESSION['user_nom'] = $user['nom'];
                $_SESSION['user_email'] = $user['email'];
                $_SESSION['user_role_id'] = $user['role_id'];
                return true;
            } else {
                echo "Adresse email ou mot de passe incorrect.";
                return false;
            }
        } catch (PDOException $e) {
            echo "Erreur lors de la connexion : " . $e->getMessage();
        }
    }
}

