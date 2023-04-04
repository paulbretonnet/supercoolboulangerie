<?php
   try{
      $pdo=new PDO('mysql:host=localhost;dbname=supercoolboulangerie;charset=utf8','root','boulangerie');
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
