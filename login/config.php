<?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=supercoolboulangerie;charset=utf8','root','boulangerie');

    }catch(Exception $e)
    {
        die('Erreur'.$e->getMessage());
    }