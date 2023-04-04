<?php
   try{
      $pdo=new PDO("mysql:host=localhost;dbname=supercoolboulangerie","root","boulangerie");
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
?>