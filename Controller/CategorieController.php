<?php

require_once "../Model/CategorieQueries.php";
if($_GET['action']=="getCategorie"){
  $cq = new CategorieQueries();
  echo $cq->getCategories();
}
if($_GET['action']=="getProduit"){
  $idcat =  $_GET['idcat'];
  $cq = new CategorieQueries();
  echo $cq->getProduits($idcat);
}
if($_GET['action']=="getProduitByNom"){
  $nom =  $_GET['nomProd'];
  $cq = new CategorieQueries();
  echo $cq->getProduitByNom($nom);
}

if($_GET['action']=="insertPanier"){
    echo ' entrer ';
  $nom = $_GET['nomProd'];
  $prix = $_GET['prix'];
  $qt=$_GET['qt'];
  $produit=$_GET['idp'];
  $cq = new CategorieQueries();
  echo $cq->insertPanier($produit,$prix,$qt,$nom);
}
?>