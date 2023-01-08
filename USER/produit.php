<?php 
   session_start();
  //connexion à la base de données
$con = mysqli_connect("localhost","root","root","online");
//verifier la connexion
if(!$con) die('Erreur : '.mysqli_connect_error());
   //supprimer les produits
   //si la variable del existe
   if(isset($_GET['del'])){
    $id_del = $_GET['del'] ;
    //suppression
    unset($_SESSION['panier'][$id_del]);
   }
?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!--========= BOXICONS =========-->
         <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
         <!--======== UNICONS=======-->
         <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
          <!--========= BOOTSRAP =========-->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
         <!-- ===== CSS ===== -->
         <link rel="stylesheet" href="Assets/Css/Cuidate.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,900&display=swap');

.panier_icon{
    position: relative;
  }
  .myspan {
    position: absolute;
    top: -26px;
    right: -12px;
    background-color: #fff;
    height: 20px;
    width: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    font-size: 7px;
    color: #000;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 600px;
  margin: auto;
  text-align: center;
  font-family: arial;
}
.category{
  font-size: 20pxko;
}
.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #683b23;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
  background-color: #9e7456;
}

        </style>

        <title>Produit</title>
    </head>
    <body>
    <?php
include('includes/header.php');
?>
        <section class="produit">
        <?php 
        if(isset($_GET['pdt'])){//si un id a été envoyé alors :
          $id = $_GET['pdt'];
          //verifier grace a l'id si le produit existe dans la base de  données
          $produit = mysqli_query($con ," SELECT * FROM products WHERE id = $id") ;
          if(empty(mysqli_fetch_assoc($produit))){
              //si ce produit n'existe pas
              die("Ce produit n'existe pas");
          }
                //lise des produit avec une boucle foreach
                foreach($produit as $product):
                ?>
           <div class="card">
             <img src="../admin/images/<?=$product['image']?>" style="width:100%">
             <h1><?=$product['name']?></h1>
             <p class="category"><?=$product['category']?></p>
             <p class="price"><?=$product['price']?>DH</p>
             <p><?=$product['description']?></p>
             <p><button>Commander</button></p>
           </div>
        
    <?php endforeach ;} ?>
  </div>
        </section>
        <?php
include('includes/footer.php');
?>
        
    </body>
</html>