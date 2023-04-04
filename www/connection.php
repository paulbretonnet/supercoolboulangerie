<?php
try {
    $mysqlClient = new PDO('mysql:host=localhost;dbname=supercoolboulangerie;charset=utf8', 'root', 'boulangerie');
} catch (Exception $e) {
    die('erreur :' . $e->getMessage());
    }



$sqlQuery = 'SELECT * FROM produits';
$produitsStatement = $mysqlClient->prepare($sqlQuery);
$produitsStatement->execute();
$produits = $produitsStatement->fetchAll();
