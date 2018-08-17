<?php

require_once "Database.php";
Class CategorieQueries {
    private $db;

    public function __construct() {
        $this->db = getConnexion();
    }
    public function getCategories() {
        $sql = "SELECT * FROM categorie  ";

        return json_encode($this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC));
    }
    public function getProduits($idcat) {
        $sql = "SELECT * FROM produit where categorie=$idcat";

        return json_encode($this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC));
    }
    public function getProduitByNom($nom) {
        $sql = "SELECT * FROM produit where nom like '%".$nom."%' ";

        return json_encode($this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC));
    }
    
    public function insertPanier($produit,$prix,$qt,$nomprod){
        $sql="INSERT INTO pannier VALUES (null,'$produit','$prix','$qt','$nomprod')";
        $ok= $this->db->exec($sql);
        if($ok==1)
        return json_encode(array("status"=>"OK"));
        
    }

}

?>