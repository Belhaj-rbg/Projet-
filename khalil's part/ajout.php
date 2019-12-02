<?php
include 'ajout.class.php';
  if (isset($_POST['submit'])) {
 $nom= $_POST['nom'];
 $description= $_POST['description'];
 $prix= $_POST['prix'];   
$fname = $_FILES['img']['name'];
$temp = $_FILES['img']['tmp_name'];
$extension = explode('.',$fname);
$extension = strtolower(end($extension));  
$fnew = uniqid().'.'.$extension;
$store = "img/produit/".basename($fnew); 
if($extension == 'jpg'||$extension == 'png'||$extension == 'gif' )
		{ 
 $prod=new produit;
 $liste=$prod->ajoutp($nom,$description,$prix,$fnew);
 move_uploaded_file($temp, $store);}
}
                  ?>