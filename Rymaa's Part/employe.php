<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="employe.css">
    <link rel="icon" href="img/logo.jpg">

    <title>employé</title>
</head>
<body>
        <?php
        if (!empty($_POST)) {
            include 'classes/employe.class.php';
            $employe = new employe;
            $employe->addNewEmploye($_POST['eid'], $_POST['nom'], $_POST['phno'], $_POST['email'], $_POST['password']);
            header('Location:employee.php');
            exit();
        }
    ?>
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
     <h3>become a delivery Man</h3>
    <div class="jumbotron">
     <form action=""  method="POST">
             <div class="form-group">
                     <label for="exampleInputPassword1">CIN</label>
                     <input type="text" class="form-control" id="prenom" placeholder="Entrer Votre CIN" name="eid">
                   </div>
             <div class="form-group">
               <label for="exampleInputEmail1">Name:</label>
               <input type="text" class="form-control" id="nom"  placeholder="Entrer Votre Nom" name="nom">
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">phone:</label>
               <input type="text" class="form-control" id="prenom" placeholder="phone" name="phone">
             </div>
             <div class="form-group">
                     <label for="exampleInputEmail1">Email</label>
                     <input type="email" class="form-control" id="email"  placeholder="Email" name="email">
             </div>
             <div class="form-group">
                     <label for="exampleInputEmail1">password</label>
                     <input type="password" class="form-control" id="pwd"  placeholder="password" name="pwd">
             </div>
            
            
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-block btn-outline-primary">Enregistrer</button>
                    </div>
                   
                      
             </form>
</div>
</body>
</html>