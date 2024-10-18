<?php
include('db.php');

class CategoryModel
{
    private $bdd; 
    private $id;
    private $nom;
    private $description;

    public function __construct($bdd, $id = null, $nom = '', $description = '') {
        $this->bdd = $bdd; 
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
    }

    public function AddCat() {
        $stmt = $this->bdd->prepare('INSERT INTO SousCategorie (nom, description) VALUES (?, ?)');
        $stmt->execute([$this->nom, $this->description]);
    }

    public function Search($description) {
        $stmt = $this->bdd->prepare('SELECT * FROM SousCategorie WHERE description = ?');
        $stmt->execute([$description]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
