<?php 
   session_start();
  //connexion à la base de données
   $con = mysqli_connect("localhost","root","root","online");
   //verifier la connexion
   if(!$con) die('Erreur : '.mysqli_connect_error());
   //supprimer les produits si la variable del existe
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--============== UNICONS================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Panier</title>
    <link rel="stylesheet" href="Assets/Css/panier.css">
    <style>
    .btn {
  background-color: #683b23;
  color: white;
  margin: 10px 0;
  padding: 3px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  font-size: 15px;
  text-decoration: none;
}

.btn:hover {
  background-color: #9e7456;
}

    </style>
</head>
<body class="panier">
    <a href="index.php" class="link"><i class="uil uil-times"></i></a>
    <section>
        <table>
            <tr>
                <th>Produits</th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Suppression</th>
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
                    <td><a href="panier.php?del=<?=$product['id']?>"><i class="uil uil-trash-alt panier_icon"></i></a></td>
                </tr>

            <?php endforeach ;} ?>

            <tr class="total">
                <th>Total : <?=$total?>DH</th>
            </tr>
            
        </table>
        <a href="checkout.php" class="btn">Passez au payment</a>
    </section>
</body>
</html>