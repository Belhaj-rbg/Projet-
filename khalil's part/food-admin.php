<!DOCTYPE html>
<html>
<?php
error_reporting(0);
session_start();
?>
<head>
	<title></title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
 <div class="jumbotron">
      <div class="container">
      	<h2 class="">Liste produit</h2>
</div>
       <br>
       <br>
        <a class="btn btn-primary btn-lg" name="" id="" href="ajout.html" role="button">Nouveau produit</a>
        <br><br>

<table class="table table-hover">
              <thead>
              		<tr>
                <th class="bg-info">PID</th>
                <th class="bg-info">nom</th>
                <th class="bg-info">description</th>
                <th class="bg-info">prix</th>
                <th class="bg-info">img</th>
                <th class="bg-info">Opérations</th>
            </tr>
        </thead>
  <?php
  include 'ajout.class.php';
  $produits=new produit;
  $liste=$produits->read();
                    while($data = $liste->fetch()){
echo '<tr class="bg-danger">';
echo '<td class="">'.$data['p_id'].'</td>';
echo '<td class="">'.$data['nom'].'</td>';
echo '<td class="">'.$data['description'].'</td>';
echo '<td class="">'.$data['prix'].'</td>';
echo '<td class="">'.$data['file'].'</td>';
 echo '<td class=""><a class="badge badge-primary text-wrap text-danger" href="edit.php?id='.$data['p_id'].'">Editer</a>
 <a  class="badge badge-primary text-wrap" href="delete.php?id='.$data['p_id'].'">Supprimer</a></td>';
echo'</tr>';
}
?>
</table>
    </div>
</body>
</</html>