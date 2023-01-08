<?php
session_start();

ini_set('display_errors', 'on');

include('../admin/config.php');

include('ajouter_panier.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Accueil-Cuidate</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--============== UNICONS================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="Assets/Css/Cuidate.css">
    <style>
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
    </style>
</head>
<body>
   
<!-- header section starts  -->

<?php
include('includes/header.php');
?>
<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Cuidate Pour Votre Bien Etre</h3>
        <p>Parce que chez Cuidate on a décidé de ne vous proposer que des essentiels : des formules simples, saines et efficaces pour prendre soin de votre peau, retrouvez tous nos soins visage pour vous concocter une routine adaptée à votre type de peau et à ses besoins</p>
        <a href="#" class="btn">get yours now</a>
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="Assets/img/about_img.png" alt="">
        </div>

        <div class="content">
            <h3>what makes our products special?</h3>
            <p>Cuidate est un établissement de bien-être contemporain fondé sur une conviction de base : Chaque être mérite son bien-être.
                 Chaque besoin mérite d'être compris avant d'être traité avec des produits efficaces et des gestes d'expert. Notre marque est 100% Made in Morocco, 
                 végan, personnalisée, avec des produits efficaces.
                 Notre objectif est de pouvoir vous offrir des produits qui soient naturels / certifiés biologiques .</p>
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- about Products start -->
<section class="products" id="products">

    <h1 class="heading"> our <span>products</span> </h1>

    <div class="box-container">
           <?php 
                           $result = mysqli_query($con,"SELECT * FROM products order by 1 DESC LIMIT 0,8");
                    while($row = mysqli_fetch_array($result)){
                        echo " 
                    <main>
                    <form action=''>
                     <div class='box'>
                     <div class='icons'>
                     <a href='ajouter_panier.php?id=$row[id]' class='fas fa-shopping-cart'></a>
                     <a href='#' class='fas fa-heart'></a>
                      </div>            
                        <div class='card' style='width: 31rem;'>
                          <div class='image'>
                            <img src='../admin/images/$row[image]' class='card-img-top'>
                          </div>
                          <div class='card-body'>
                          <h5 class='card-title'>$row[name]</h5>
                          <p class='card-desc'>$row[description]</p>
                          <div class='price'>$row[price]</div>
                          <a href='ajouter_panier.php?id=$row[id]' class='btn btn-primary'>Add To Cart</a>
                          <a href='produit.php? pdt=$row[id]' class='btn btn-danger'>View Product</a>
                        </div>
                    </div>  
                    </form>      
            </div> </main>"
            ;} ?>
       
    </div>

  

</section>

<!-- Products section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="Assets/img/quote-img.png" alt="" class="quote">
            <p>My skin loves Cuidate product . I am seeing subtle changes in my skin and there’s a brightness to it that I haven’t seen in a long time.</p>
            <img src="Assets/img/prs1.jpg" class="user" alt="">
            <h3>Bdioui Basma</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        
        <div class="box">
            <img src="Assets/img/quote-img.png"  class="quote">
            <p>Cuidate is always delivering the best products! Always ships quickly and arrive in cute packaging with a cute, hand written note.
                My skin is so happy.</p>
            <img src="Assets/img/prs2.jpg" class="user" alt="">
            <h3>Sihame adal</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="row">

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53117.2920440801!2d-7.4239143991248735!3d33.68744632994036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7b65541dc9c3d%3A0x89fe602f8927da05!2sMohamm%C3%A9dia!5e0!3m2!1sfr!2sma!4v1669973066483!5m2!1sfr!2sma" width="600" height="492" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <form action="">
            <h3>get in touch</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="name">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="tel"  placeholder="telephone">
            </div>
            <input type="submit" value="contact now" class="btn">
        </form>

    </div>

</section>

<!-- contact section ends -->
<?php
include('includes/footer.php');
?>
<!-- footer section starts  -->



<!-- footer section ends -->

















<!-- custom js file link  -->
<script src="Assets/Js/script.js"></script>

</body>
</html>