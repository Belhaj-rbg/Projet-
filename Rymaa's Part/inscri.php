<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="inscri.css">

    <title>Document</title>
</head>
<body><nav class="navbar navbar-expand-lg navbar-dark bg-dark" method="POST" action="insert.php">
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
              <div class="jumbotron">
                    <form>
                            <h3>Inscription:</h3>
                            <div class="form-group">
                                    <label for="exampleInputPassword1">CIN</label>
                                    <input type="text" class="form-control" id="prenom" placeholder="Entrer Votre CIN" name="cin">
                                  </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Nom</label>
                              <input type="text" class="form-control" id="nom"  placeholder="Entrer Votre Nom" name="nom">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Prénom</label>
                              <input type="text" class="form-control" id="prenom" placeholder="Entrer Votre Prénom" name="prenom">
                            </div>
                            <div class="form-group">
                                    <label for="exampleInputEmail1">Adresse</label>
                                    <input type="text" class="form-control" id="adresse"  placeholder="Entrer Votre Adresse" name="adr">
                            </div>
                            <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="email"  placeholder="Entrer Votre Email" name="email">
                            </div>
                            <div class="form-group">
                                    <label for="exampleInputEmail1">Numéro de Téléphone</label>
                                    <input type="number" class="form-control" id="phone"  placeholder="Entrer Votre Numéro de téléphone" name="phone">
                            </div>
                            <div class="form-group">
                                    <label for="exampleInputEmail1">Mot De passe</label>
                                    <input type="password" class="form-control" id="pwd"  placeholder="Entrer Un mot de passe" name="pwd">
                            </div>
                            <button type="button" class="btn btn-dark">Valider</button>
                        </form>
        </div>
      <center>  <div class="foot"><footer>© Copyright 2019  RAFood est une marque déposée</footer></div></center>

</body>
</html>