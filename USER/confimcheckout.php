<?php 
   session_start();
  //connexion à la base de données
   $con = mysqli_connect("localhost","root","root","online");
   //verifier la connexion
   if(!$con) die('Erreur : '.mysqli_connect_error());

   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $email = $_POST['email'];
   $address = $_POST['address'];
   $cardnumber = $_POST['cardnumber'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--============== UNICONS================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Confirmation de Payement</title>
    <link rel="stylesheet" href="Assets/Css/panier.css">
    <style>
        .btn {
   background-color: #683b23;
   color: white;
   padding: 12px;
   margin: 10px 0;
   border: none;
   border-radius: 3px;
   cursor: pointer;
   font-size: 17px;
 }
 
 .btn:hover {
   background-color: #9e7456;
 }
 .header{
    display: flex;
    justify-content: space-between;
    align-items: center;
 }
 .title1{
    font-size: 25px;
 }
 .subtitle{
    font-size: 19px;
 }
 .icon{
    font-size: 45px;
 }
 
    </style>
</head>
<body class="panier">
    <section>
        <div class="header">
            <h1 class="title1">Your order Confirmed!</h1>
            <i class="uil uil-check-circle icon"></i>
            <div>
                <h3 class="subtitle">Hello, <?php echo  $firstname ?></h3>
                <span>Veuillez confirmer votre commande pour que <br> nous puissions prendre en compte votre demande !</span>
            </div>
        </div>
        <div class="infos">
            <div class="box">
                <h3 class="title">Numero de la carte : <?php echo  $cardnumber ?></h3>
            </div>
            <div class="box">
            <h3 class="title">Nom : <?php echo  $firstname ; echo $lastname ?></h3>
            </div>
            <div class="box">
            <h3 class="title">Adresse e-mail : <?php echo  $email ?></h3>
            </div>
            <div class="box">
            <h3 class="title">Adresse de livraison : <?php echo  $address ?></h3>
            </div>
            
        </div>
        <table>
            <tr>
                <th>Produits</th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
            </tr>
            <?php 
              $total = 0 ;
              // liste des produits
              //récupérer les clés du tableau session
              $ids = array_keys($_SESSION['panier']);
              //s'il n'y a aucune clé dans le tableau
              if(empty($ids)){
                echo "Votre panier est vide";
              }else {
                //si oui 
                $produits = mysqli_query($con, "SELECT * FROM products WHERE id IN (".implode(',', $ids).")");

                //lise des produit avec une boucle foreach
                foreach($produits as $product):
                    //calculer le total ( prix unitaire * quantité) 
                    //et aditionner chaque résutats a chaque tour de boucle
                    $total = $total + $product['price'] * $_SESSION['panier'][$product['id']] ;
                ?>
                <tr>
                    <td><img src="../admin/images/<?=$product['image']?>"></td>
                    <td><?=$product['name']?></td>
                    <td><?=$product['price']?>DH</td>
                    <td><?=$_SESSION['panier'][$product['id']] // Quantité?></td>
                </tr>

            <?php endforeach ;} ?>

            <tr class="total">
                <th>Total à Payer: <?=$total?>DH</th>
            </tr>
        </table>
        <input type="submit" value="Confirmer le payment" class="btn">
    </section>
</body>
</html>