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
    <link rel="stylesheet" href="Assets/Css/Cuidate.css">
</head>
<body>
   
<!-- header section starts  -->
<header class="header">

   <a href="#" class="Logo">
        <img src="Assets/Img/logo.png" class="logo_img" >
    </a>  
    <!--<span> Cuidate</span>-->
    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#products" class="dropbtn"><div class="dropdown">products
            <i class="uil uil-angle-down"></i>
            <div class="dropdown-content">
                <a href="#products">Lien 1</a>
                <a href="#products">Lien 2</a>
                <a href="#products">Lien 3</a>
              </div>
        </div></a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
    </nav>
    <div class="icons">
        <a href="#" class="icon_link"><i class="uil uil-shopping-cart-alt nav_icon" ></i></a>
        <a href="login.php" class="icon_link"><i class="uil uil-user-circle nav_icon"></i></a>
        <div class="fas fa-bars" id="menu-btn" ></div>
    </div>

<!--
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
    </>div>
    -->
</header>

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

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                
            </div>
            <div class="image">
                <img src="Assets/img/product1.jpeg" alt="">
            </div>
            <div class="content">
                <h3>Routine Nutrition Exquise à l'Huile Argan</h3>
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
                <img src="Assets/img/product2.jpeg" alt="">
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
                <img src="Assets/img/product3.jpeg" alt="">
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
                <img src="Assets/img/product4.jpeg" alt="">
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
                <img src="Assets/img/product5.png" alt="">
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
                <img src="Assets/img/product6.png" alt="">
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

    <div class="credit">Votre bien etrê chez Cuidate </div>

</section>

<!-- footer section ends -->

















<!-- custom js file link  -->
<script src="Assets/Js/script.js"></script>

</body>
</html>