<header class="header">

   <a href="index.php" class="Logo">
        <img src="Assets/Img/logo.png" class="logo_img" >
    </a>  
    <!--<span> Cuidate</span>-->
    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="index.php#about">about</a>
        <a href="index.php#products" class="dropbtn"><div class="dropdown">products
            <i class="uil uil-angle-down"></i>
            <div class="dropdown-content">
                <a href="index.php#products">Serum</a>
                <a href="index.php#products">Creme</a>
                <a href="index.php#products">Exfoliant</a>
                <a href="index.php#products">MASKS</a>
              </div>
        </div></a>
        <a href="index.php#review">review</a>
        <a href="index.php#contact">contact</a>
    </nav>
    <div class="icons">
        <a href="panier.php" class="icon_link panier_icon"><i class="uil uil-shopping-cart-alt nav_icon" ></i><span class="myspan"><?=array_sum($_SESSION['panier'])?></span></a>
        <a href="login.php" class="icon_link"><i class="uil uil-user-circle nav_icon"></i></a>
        <div class="fas fa-bars" id="menu-btn" ></div>
    </div>
</header>