<!DOCTYPE html>
<html>
<head>
    <title></title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
          <link rel="stylesheet" href="css/ajout.css" />      
</head>

<body>
    <div class="container">
        <fieldset>
            <legend class="h1">Produit</legend>
                   <?php
 include 'ajout.class.php';
 $prod=new produit;
$liste=$prod->reade($_GET['pid']);               
$data = $liste->fetch();            
            ?>
            <form action="updatefood.php" method="POST">
                                           <div class="form-group">
                            <label for="nom">nom</label><br>
                            <input type="text" name="nom" id="nom" class="form-control">
                        </div>
                    
                                         <div class="form-group">
                            <label for="description	">Description	</label><br>
                                    <textarea name="description" id="description"   rows="5" cols="30"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="prix">prix</label>
                            <input type="text" name="prix" id="prix" class="form-control" placeholder="$">
                        </div>
                        <div class="form-group">
                            <label for="file"></label>
                            <br>
         <input type="file" name="img" id="file" accept="image/*" class="form-control form-control-danger " required >                        
                     </div>
                <div class="row">
                    <div class="col-md-3">
                    <p>   <button type="submit" value="envoi" class="btn btn-primary">Enregistrer</button>
                        <span class="text-danger"><?php if(isset($error)) echo $error; ?></span>
                    </p>
                       <input type="number" name="pid" value="<?= $data['pid']?>" hidden>
                      <button type="reset" class="btn btn-secondary">Annuler</button>
                    </div>
                </div></div>
            </form>
        </fieldset>
    </div>
</body>

</html>