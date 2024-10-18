<?php 

include('db.php'); 

class CategoryModel
{
    private int $id;
    public string $nom;
    public $description;
    private $bdd; 

    public function __construct($bdd, $id, $nom, $description) {
        $this->bdd = $bdd; 
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
    }

    public function AddCat($id,$nom,$description) {
        $stmt = $this->bdd->prepare('INSERT INTO SousCategorie (id, nom, description) VALUES (?, ?, ?)');
        $stmt->execute([$this->id, $this->nom, $this->description]);
    }

    public function Search($id){
        $stmt = $this->bdd->prepare('SELECT * FROM SousCategorie WHERE id = ?');
        $stmt->execute([$this->id]);
    }
}
?>
