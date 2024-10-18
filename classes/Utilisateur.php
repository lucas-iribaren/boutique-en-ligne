<?php

require_once "Database.php";

class Utilisateur
{
    private $id;
    private $prenom;
    private $nom;
    private $email;
    private $mot_de_passe;
    private $date_inscription;
    private $id_adresse;
    private $role_id;
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function register($prenom, $nom, $email, $mot_de_passe, $id_adresse = null, $role_id= 2)
    {
        $this->db->query("INSERT INTO utilisateurs (id, prenom, nom, email, mot_de_passe, id_adresse, role_id) VALUES (null, ?, ?, ?, ?, ?, ?)");
        $this->db->bind(1, $prenom);
        $this->db->bind(2, $nom);
        $this->db->bind(3, $email);
        $this->db->bind(4, $mot_de_passe);
        $this->db->bind(5, $id_adresse);
        $this->db->bind(6, $role_id);
        return $this->db->execute();
    }

    public function login($email, $mot_de_passe)
    {
        $this->db->query("SELECT * FROM utilisateurs WHERE email = ?");
        $this->db->bind(1, $email);
        $row = $this->db->single();
        $hashed_password = $row->mot_de_passe;
        if (password_verify($mot_de_passe, $hashed_password)) {
            return $row;
        } else {
            return false;
        }
    }

}