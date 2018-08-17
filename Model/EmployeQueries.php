<?php

require_once "Database.php";
Class EmployeQueries {
    private $db;

    public function __construct() {
        $this->db = getConnexion();
    }
    public function listeEmploye() {

        $sql = "SELECT e.id,e.nom,e.age,e.state,e.country FROM employe e  ";

        return $this->db->query($sql);
    }

    public function getEmployeById($id) {

        $sql = "SELECT *  FROM employe WHERE id=$id";

        return json_encode($this->db->query($sql)->fetchObject());
    }

    public function updateEmploye($id,$nom,$age,$state,$country){
        $sql=" update employe set  nom='$nom',age='$age',state='$state',country='$country' where id=$id";
        return $this->db->exec($sql);
    }
     public function deleteEmploye($id){
        $sql=" delete from employe where id=$id";
        return $this->db->exec($sql);
    }
}

?>