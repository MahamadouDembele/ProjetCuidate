<?php

session_start();

 require("../config/commandes.php");

 foreach($_SESSION['clientSession'] as $i){
    $nom = $i->nom;
    $login = $i->email;
    $motdepasse = $i->motdepasse;
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CuidateMa</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--============== UNICONS================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="../Assets/Css/Cuidate.css">
    <style>
        .about{
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10rem;
        }
        .titre{
            font-size: 25px;
        }
    </style>
</head>
<body>
   
<!-- header section starts  -->
<header class="header">
    <a href="#" class="Logo">
        <img src="../Assets/Img/logo.png" class="logo_img" >
    </a>  
    <!--<span> Cuidate</span>-->
    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#products" class="dropbtn"><div class="dropdown">products
            <i class="uil uil-angle-down"></i>
            <div class="dropdown-content">
                <a href="#products">Serum</a>
                <a href="#products">Creme</a>
                <a href="#products">Exfoliant</a>
                <a href="#products">MASKS</a>
              </div>
        </div></a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
    </nav>
    <div class="icons">
        <a href="../panier.php" class="icon_link"><i class="uil uil-shopping-cart-alt nav_icon" ></i></a>
        <a href="../login.php" class="icon_link"><i class="uil uil-user-circle nav_icon"></i></a>
        <a href="deconnect.php" class="icon_link"><i class="uil uil-signout nav_icon"></i></i></a>
        <div class="fas fa-bars" id="menu-btn" ></div>
    </div>
</header>

<!-- header section ends -->

<!-- home section starts  -->



<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">
    <h1 class=" heading titre">Hello <span><?= $nom ?></span>, content de vous revoir
        <br> Nous reservons pour de nombreuses surprises :
    </h1>
    <table class="table-style">
        <caption class="titre">Vos informations</caption>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Mote de Passe</th>
            </tr>
        </thead>
        
        <tbody>
            <tr>
                <td> <?= $nom ?></td>
                <td> <?= $login ?></td>
                <td> <?= $motdepasse ?></td>
            </tr>
        </tbody>

    </table>
    

</section>

<!-- about section ends -->

<!-- about Products start -->
<section class="products" id="products">
<h2 class="heading">Voici des produits speciales pour Vous:</h2>
    <div class="box-container">
        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                
            </div>
            <div class="image">
                <img src="../Assets/img/product1.jpeg" alt="">
            </div>
            <div class="content">
                <h3>L'Huile Argan</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">100Dh</div>
                <div>
                    <button class="btn">ADD TO CART</button>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                
            </div>
            <div class="image">
                <img src="../Assets/img/product2.jpeg" alt="">
            </div>
            <div class="content">
                <h3>Huile démaquillante</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">100Dh </div>
                <div>
                    <button class="btn">ADD TO CART</button>
                </div>
               
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                
            </div>
            <div class="image">
                <img src="../Assets/img/product3.jpeg" alt="">
            </div>
            <div class="content">
                <h3> Ceramide Cream </h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">200Dh</div>
                <div>
                    <button class="btn">ADD TO CART</button>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                
            </div>
            <div class="image">
                <img src="../Assets/img/product4.jpeg" alt="">
            </div>
            <div class="content">
                <h3>Creme Anti-age</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">200 </div>
                <div>
                    <button class="btn">ADD TO CART</button>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                
            </div>
            <div class="image">
                <img src="../Assets/img/product5.png" alt="">
            </div>
            <div class="content">
                <h3>Kit Meilleurs Produits Bio </h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">200Dh </div>
                <div>
                    <button class="btn">ADD TO CART</button>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                
            </div>
            <div class="image">
                <img src="../Assets/img/product6.png" alt="">
            </div>
            <div class="content">
                <h3>Lotion Tonifiante à l'Eau Florale</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">200Dh </div>
                <div>
                    <button class="btn">ADD TO CART</button>
                </div>
            </div>
        </div> 

       
    </div>

    </div>

</section>
<!-- footer section starts  -->

<?php
include('../includes/footer.php');
?>

<!-- footer section ends -->
<!-- custom js file link  -->
<script src="../Assets/Js/script.js"></script>

</body>
</html>