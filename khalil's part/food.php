<html>
<?php
error_reporting(0);
session_start();
?>
<head>  
<title>Liste food</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
 <link href="css/food1.css" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

</head>
<body> 
 <header>
       <nav class="navbar navbar-inverse">
  <div class="container-fluid">
      <ul class="nav navbar-nav">
      <li ><a href="#">Home</a></li>
          <li class="active" ><a href="food.php">Food Menu</a></li>
              <li><a href="order.php">Track Order</a></li>
</ul>
    <ul class="nav navbar-nav navbar-right">
      <li><<span class="glyphicon glyphicon-user"></span>Panier</a></li>
<</ul></div></nav></header>
<section class="banner-area banner-area2 menu-bg text-center">
<div class="container">
<div class="row">
<div class="col-lg-12">
<h2 class="mb-4">Our Menu</h2>
<p class="pt-2"><i>Beast kind form divide night above let moveth bearing darkness.</i></p>
</div>
</div>
</div>
</section>
    <?php
                include 'ajout.class.php';
                                    $produit=new produit;
                                    $liste=$produit->read();
                                  while ($produits = $liste->fetch())
{
                                                ?>
                                                <section lass="restaurants-page">

                 <div class="col-md-4 col-sm-6 ftco-animate">
                                  <form method="post" action='Panier.php'>
                                    <div class="box">
                    <div class="box-part text-center">
                                               <div class="single-food">
                        <div class="food-img">
                    <a href="ficheProd.php?id=<?php echo $produits['id'] ?>">
                        <img class="img-fluid" src="admin/img/produit/'.$produits['img'].'" alt="<?php echo $produits['nom']; ?>" title="<?php echo $produits['nom']; ?>"></a></div>
<div class="food-content">
  <div class="d-flex justify-content-between">
 <h5 class="text-truncate title"><?php echo $produits['nom']; ?></h5>
    <p class="pt-3" id="ss"> <?php echo $produits['description']; ?></p>
        <span class="style-change">$<?php echo $produits['prix']; ?> </span>
                    </div>
                </div>
                  <div class="col-xs-10 col-sm-10 col-lg-5 pull-right item-cart-info">
                <input class="b-r-0"  type="text" name="quantity" id="qt" value="1" size="2" />
                <input type="submit" class="ml-2 bt btn btn-white btn-outline-white" value="Add to cart" /></div>
              </div>
          </div>
             </form>
   </div>
   </section>
                                            <?php
}   
$liste->closeCursor();
?>
                            </body>
                            </html>
