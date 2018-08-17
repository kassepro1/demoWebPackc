<?php
function getConnexion(){
    $host = "127.0.0.1";
    $user = "root";
    $password = "";
    $dbname = "db_sama_diaba";
    $dsn = "mysql:host=$host;dbname=$dbname";
    try{
        $db = new PDO($dsn, $user, $password,
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }catch (PDOException $ex){
        die($ex->getMessage());
    }
    return $db;
}

?>