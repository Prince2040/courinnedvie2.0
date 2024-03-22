<?php 

   //script de connexion de connexion a la base de donnee
   
   try
   {
      $link = new PDO('mysql:host=localhost;dbname=couronnedvie', 'root', '' , array( PDO::ATTR_PERSISTENT => true) );
   }
   catch (PDOException $e)
   {
      echo('Erreur de connexion: ' . $e->getMessage());
   }
      
?>