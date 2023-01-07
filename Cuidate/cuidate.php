<?php
include('../admin/config.php');
include('functions.php');
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

    <!-- custom css file link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/Products.css">
    <link rel="stylesheet" href="css/reviews.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/footer.css">
    <style>
        .card{
            float: left;
            margin-left: 20px;
            margin-right: 10px;
            margin-top: 20px;
            min-height: 200px;
        }
      

    </style>

    

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

        <a href="#" class="logo">
            <img src="" class="Cuidate">
        </a>
        <span> Cuidate</span>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#products">products</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>

            
        </nav>
    

        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fas fa-bars" id="menu-btn" ></div>
        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>

        <div class="cart-items-container">
                <div class="cart-item">
                    <span class="fas fa-times"></span>
                    <img src="#" alt="">
                    <div class="content">
                        <h3>cart item 01</h3>
                        <div class="price">100Dh/-</div>
                    </div>
                </div>
                <div class="cart-item">
                    <span class="fas fa-times"></span>
                    <img src="#" alt="">
                    <div class="content">
                        <h3>cart item 02</h3>
                        <div class="price">100Dh/-</div>
                    </div>
                </div>
                <div class="cart-item">
                        <span class="fas fa-times"></span>
                        <img src="#" alt="">
                        <div class="content">
                            <h3>cart item 03</h3>
                            <div class="price">100Dh/-</div>
                        </div>
                </div>
                <div class="cart-item">
                        <span class="fas fa-times"></span>
                        <img src="#" alt="">
                        <div class="content">
                            <h3>cart item 04</h3>
                            <div class="price">100Dh/-</div>
                        </div>
                </div>
                    <a href="#" class="btn">checkout now</a>
        </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Cuidate Pour Votre Bien Etres</h3>
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
            <img src="image/about.png" alt="">
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
<!--
</section>

<!-- about section ends -->

<!-- about Products start -->

<section class="products" id="products">

    <h1 class="heading"> our <span>products</span> </h1>

            <div class="box-container">
                <div class="box">
                <?php
                $result = mysqli_query($con,"SELECT * FROM products order by 1 DESC LIMIT 0,8");
                    while($row = mysqli_fetch_array($result)){
                        echo "
                        <main>
                    <div class='card' style='width: 31rem;'>
                            <img src='../admin/images/$row[image]' class='card-img-top'>
                        <div class='card-body'>
                            <h5 class='card-title'>$row[name]</h5>
                            <p class='card-desc'>$row[description]</p>
                            <p class='card-text'>$row[price]</p>
                            <a href='validate.php? id=$row[id]' class='btn btn-primary'>Add To Cart</a>
                            <a href='validate.php? id=$row[id]' class='btn btn-danger'>View Product</a>
                        </div>
                    </div>
                        </main>";}
                ?>
            <!--<div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                
            </div>
            
            <div class='image'>
                <img src='image/product1.jpeg' alt=''>
            </div>
            <div class='content'>
                <h3>name</h3>
                <div class='stars'>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star-half-alt'></i>
                </div>
                <div class='price'>100$</div>
                <div>
                    <button class='btn'>ADD TO CART</button>
                </div>
            </div>-->
       <!-- </div>-->
   

        <!--<div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                
            </div>
            <div class="image">
                <img src="image/product2.jpeg" alt="">
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
                <div class="price">100Dh <span>100Dh</span></div>
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
                <img src="image/product3.jpeg" alt="">
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
                <div class="price">200Dh <span>100</span></div>
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
                <img src="image/product4.jpeg" alt="">
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
                <img src="image/product5.png" alt="">
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
                <div class="price">200Dh <span>100Dh</span></div>
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
                <img src="image/product6.png" alt="">
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
                <div class="price">200Dh <span>100Dh</span></div>
                <div>
                    <button class="btn">ADD TO CART</button>
                </div>
            </div>
        </div>  -->
    </div>  
         </section>
    
<!-- Products section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/quote-img.png" alt="" class="quote">
            <p>My skin loves Cuidate product . I am seeing subtle changes in my skin and there’s a brightness to it that I haven’t seen in a long time.</p>
            <img src="image/prs1.jpg" class="user" alt="">
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
            <img src="image/quote-img.png"  class="quote">
            <p>Cuidate is always delivering the best products! Always ships quickly and arrive in cute packaging with a cute, hand written note.
                My skin is so happy.</p>
            <img src="image/prs2.jpg" class="user" alt="">
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

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53117.2920440801!2d-7.4239143991248735!3d33.68744632994036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7b65541dc9c3d%3A0x89fe602f8927da05!2sMohamm%C3%A9dia!5e0!3m2!1sfr!2sma!4v1669973066483!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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
                <input type="number"  placeholder="number">
            </div>
            <input type="submit" value="contact now" class="btn">
        </form>

    </div>

</section>

<!-- contact section ends -->



<!-- footer section starts  -->

<section class="footer">

    <div class="share">
        <a href="https://web.facebook.com/CuidateMa/" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>

        
    </div>

    <div class="links">
        <a href="#">home</a>
        <a href="#">about</a>
        <a href="#">products</a>
        <a href="#">review</a>
        <a href="#">contact</a>
    </div>

    <div class="credit">t'on bien etres chez <span>Cuidate </span> | for you </div>

</section>

<!-- footer section ends -->

















<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>