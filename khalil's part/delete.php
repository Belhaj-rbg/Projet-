<?php
include 'ajout.class.php';
$produits=new produit;
$produits->delete($_GET['p_id']);
                  header ("location:food-admin.php");

?>