<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="employee.css">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/logo.jpg">

    <title>Employé</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <a class="navbar-brand" href="accueil.html">RAFood</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Inscription <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Votre commande</a>
            </li>
          </ul>
         
        </div> 
     </nav> 
     <div class="first">
        <h3>Ajouter Un Produit:</h3>
        <form action=""  method="POST">
             <div class="form-group">
                     <label for="exampleInputPassword1">Nom du Produit:</label>
                     <input type="text" class="form-control" id="prenom" placeholder="Nom du Produit:" name="eid">
                   </div>
                   <form action=""  method="POST">
             <div class="form-group">
                     <label for="exampleInputPassword1">Description Produit:</label>
                     <input type="text" class="form-control" id="prenom" placeholder="Description Produit" name="eid">
                   </div>
                   <form action=""  method="POST">
             <div class="form-group">
                     <label for="exampleInputPassword1">Prix Produit:</label>
                     <input type="text" class="form-control" id="prenom" placeholder="Prix Produit" name="eid">
                   </div>
                   
                   <div class="col-md-6">
                        <button type="submit" class="btn btn-block btn-outline-primary">Enregistrer</button>
                    </div>
          </form>
        <img src="img/produit.jpg" class="produit">
    </div>
</body>
</html>