<?php 
    include 'food.php'; //require 'bdconnexion.php';
        if (!empty($_POST))
        {   $cin = $_POST['cin'];
            $nom = $_POST['nom'];
            $prenom= $_POST['prenom'];
            $email = $_POST['email'];
            $adr = $_POST['adr'];
            $pwd = $_POST['pwd'];
            $phone = $_POST['phone'];
        
           $req= $bdd->prepare (
               'INSERT INTO students (firstname,lastname,email,phone) VALUES (:param_firstname, :param_lastname, :param_email, :param_phone)');
           $req->bindParam(':param_firstname', $firstn );
           $req->bindParam(':param_lastname', $lastn );
           $req->bindParam(':param_email', $email );
           $req->bindParam(':param_phone', $phone );
                $req->execute();
               header('location:create.php');
            
            
 //$req->bindParam (':param_firstname', $firstn);
 //$req->execute;           
         }
    
?>