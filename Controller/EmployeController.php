<?php

$host = "127.0.0.1";
$user = "root";
$password = "";
$dbname = "dbemploye";
$dsn = "mysql:host=$host;dbname=$dbname";
$db = null;
try {
    $db = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (PDOException $ex) {
    die($ex->getMessage());
}
if ($_GET['action'] == "add") {
    $nom = $_POST['nom'];
    $age = $_POST['age'];
    $state = $_POST['state'];
    $contry = $_POST['country'];
    $sql = "insert into employe values (null,'$nom','$age','$state', '$contry')";
    $db->exec($sql);
}
require_once '../Model/EmployeQueries.php';
$edb = new EmployeQueries();
if ($_GET['action'] == "edit") {
    echo $edb->getEmployeById($_GET['idEmp']);
}
if ($_GET['action'] == "update") {
    echo'id= ' . $_POST['id'];
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $age = $_POST['age'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    echo $edb->updateEmploye($id,$nom, $age,$state,$country);
}
if ($_GET['action'] == "delete") {
    echo $_GET['idEmp'];
    echo $edb->deleteEmploye($_GET['idEmp']);
}
?>