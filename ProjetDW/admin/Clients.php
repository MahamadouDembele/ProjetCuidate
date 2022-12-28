<?php 
session_start();

	include("config.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/framework.css" />
  <link rel="stylesheet" href="css/Style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="page flex">
    <div class="sidebar p-20 p-relative">
      <h3 class="p-relative txt-c cuidate">CUIDATE</h3>
      <ul>
        <li>
          <a class="flex align-center fs-14 rad-12 p-10 c-pri" href="index.php">
            <i class="fa-solid fa-house"></i>
            <span>Accueil</span>
          </a>
        </li>
        <li>
          <a class="flex align-center fs-14 rad-12 p-10 c-pri" href="productForm.php">
            <i class="fa-solid fa-plus"></i>
            <span>Nouveau Produit</span>
          </a>
        </li>
        <li>
          <a class="flex align-center fs-14 rad-12 p-10 c-pri" href="view_products.php">
            <i class="fa fa-archive"></i>
            <span>Voir les Produits</span>
          </a>
        </li>
        <li>
          <a class="flex align-center fs-14 rad-12 p-10 c-pri" href="category_form.php">
              <i class="active fa-solid fa-circle-plus"></i>
              <span>Nouvelle catégorie</span>
          </a>
      </li>
      <li>
          <a class="flex align-center fs-14 rad-12 p-10 c-pri" href="View_cat.php">
              <i class="active fa fa-eye"></i>
              <span>Voir les catégorie</span>
          </a>
      </li>
        <li>
          <a class="flex align-center fs-14 rad-12 p-10 c-pri" href="Clients.php">
            <i class="fa-solid fa-user-group"></i>
            <span>Clients</span>
          </a>
        </li>
        <li>
          <a class="flex align-center fs-14 rad-12 p-10 c-pri" href="Settings.php">
            <i class="fa-solid fa-gear"></i>
            <span>Paramètres</span>
          </a>
        </li>
       
      </ul>
    </div>

    <div class="content w-full bg-white">
      <div class="head p-15 between-flex">
        <div class="search p-relative">
          <input class="p-10" type="search" placeholder="recherche" />
        </div>
        <div id="dropdown" class="user-wrapp">
          <div class="icons flex align-center">
          <?php
            $user_data = check_login($con);
          ?>
            <h3 class="admin"><?php echo $user_data['user_name']; ?></h3>
            <img src="css/photo/administrator.png" alt="admin" />
          </div>
          <div class="dropdown-content">
            <a href="#">Profil</a>
            <a href="#">Deconnexion</a>
          </div>
        </div>
      </div>

      <!--Clients-->

      <main>
        <h1 class="p-relative">Les clients</h1>
        <div class="friends-page d-grid marg-20 gap-20">
          <div class="friend bg-white rad-6 p-20 p-relative">
             
              <img class="marg-enrg1" src="./css/photo/Admin team.png" alt="" />
              <h4 class="marg-enrg2">Omar Fathy</h4>
            
            <div class="icons fs-14 p-relative">
              <div class="margBottom-10">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>79 Produits vendus</span>
              </div>
              <div class="margBottom-10">
                <i class="fa-sharp fa-solid fa-check"></i>
                <span>73 Projects</span>
              </div>
              <div>
                <i class="fa-solid fa-close"></i>
                <span>12 Demande rejeté</span>
              </div>
            </div>
            <div class="info between-flex fs-13">
              <span class="c-grey">Joined 02/08/2020</span>
              <div>
                <a class="bg-blue c-white btn-shape" href="profile.html">Profile</a>
                <a class="bg-pri c-white btn-shape" href="">Remove</a>
              </div>
            </div>
          </div>
          <div class="friend bg-white rad-6 p-20 p-relative">
            
              <img class="marg-enrg1" src="./css/photo/Admin team.png" alt="" />
              <h4 class="marg-enrg2">Said chawki</h4>

            <div class="icons fs-14 p-relative">
              <div class="margBottom-10">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>72 Produits vendus</span>
              </div>
              <div class="margBottom-10">
                <i class="fa-sharp fa-solid fa-check"></i>
                <span>70 Demande validée</span>
              </div>
              <div>
                <i class="fa-solid fa-close"></i>
                <span>2 Demande rejeté</span>
              </div>
            </div>
            <div class="info between-flex fs-13">
              <span class="c-grey">Joined 02/06/2020</span>
              <div>
                <a class="bg-blue c-white btn-shape" href="profile.html">Profile</a>
                <a class="bg-pri c-white btn-shape" href="">Remove</a>
              </div>
            </div>
          </div>
          <div class="friend bg-white rad-6 p-20 p-relative">
            
              <img class="marg-enrg1" src="./css/photo/Admin team.png" alt="" />
              <h4 class="marg-enrg2">Shady Nabil</h4>

            <div class="icons fs-14 p-relative">
              <div class="margBottom-10">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>70 Produits vendus</span>
              </div>
              <div class="margBottom-10">
                <i class="fa-sharp fa-solid fa-check"></i>
                <span>67 Demande validée</span>
              </div>
              <div>
                <i class="fa-solid fa-close"></i>
                <span>3 Demande rejeté</span>
              </div>
            </div>
            <div class="info between-flex fs-13">
              <span class="c-grey">Joined 28/06/2020</span>
              <div>
                <a class="bg-blue c-white btn-shape" href="profile.html">Profile</a>
                <a class="bg-pri c-white btn-shape" href="">Remove</a>
              </div>
            </div>
          </div>
          <div class="friend bg-white rad-6 p-20 p-relative">
            
              <img class="marg-enrg1" src="./css/photo/Admin team.png" alt="" />
              <h4 class="marg-enrg2">Anass adel</h4>
            
            <div class="icons fs-14 p-relative">
              <div class="margBottom-10">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>64 Produits vendus</span>
              </div>
              <div class="margBottom-10">
                <i class="fa-sharp fa-solid fa-check"></i>
                <span>61 Demande validée</span>
              </div>
              <div>
                <i class="fa-solid fa-close"></i>
                <span>3 Demande rejeté</span>
              </div>
            </div>
            <div class="info between-flex fs-13">
              <span class="c-grey">Joined 28/08/2020</span>
              <div>
                <a class="bg-blue c-white btn-shape" href="profile.html">Profile</a>
                <a class="bg-pri c-white btn-shape" href="">Remove</a>
              </div>
            </div>
          </div>
          <div class="friend bg-white rad-6 p-20 p-relative">
            
              <img class="marg-enrg1" src="./css/photo/Admin team.png" alt="" />
              <h4 class="marg-enrg2">Amr adhem</h4>

            <div class="icons fs-14 p-relative">
              <div class="margBottom-10">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>60 Produits vendus</span>
              </div>
              <div class="margBottom-10">
                <i class="fa-sharp fa-solid fa-check"></i>
                <span>57 Demande validée</span>
              </div>
              <div>
                <i class="fa-solid fa-close"></i>
                <span>3 Demande rejeté</span>
              </div>
            </div>
            <div class="info between-flex fs-13">
              <span class="c-grey">Joined 28/06/2020</span>
              <div>
                <a class="bg-blue c-white btn-shape" href="profile.html">Profile</a>
                <a class="bg-pri c-white btn-shape" href="">Remove</a>
              </div>
            </div>
          </div>
          <div class="friend bg-white rad-6 p-20 p-relative">
            
              <img class="marg-enrg1" src="./css/photo/Admin team.png" alt="" />
              <h4 class="marg-enrg2">Nasser nahi</h4>

            <div class="icons fs-14 p-relative">
              <div class="margBottom-10">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>55 Produits vendus</span>
              </div>
              <div class="margBottom-10">
                <i class="fa-sharp fa-solid fa-check"></i>
                <span>55 Demande validée</span>
              </div>
              <div>
                <i class="fa-solid fa-close"></i>
                <span>0 Demande rejeté</span>
              </div>
            </div>
            <div class="info between-flex fs-13">
              <span class="c-grey">Joined 02/08/2020</span>
              <div>
                <a class="bg-blue c-white btn-shape" href="profile.html">Profile</a>
                <a class="bg-pri c-white btn-shape" href="">Remove</a>
              </div>
            </div>
          </div>
          <div class="friend bg-white rad-6 p-20 p-relative">
            
              <img class="marg-enrg1" src="./css/photo/Admin team.png" alt="" />
              <h4 class="marg-enrg2">Ahmed haiti</h4>

            <div class="icons fs-14 p-relative">
              <div class="margBottom-10">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>52 Produits vendus</span>
              </div>
              <div class="margBottom-10">
                <i class="fa-sharp fa-solid fa-check"></i>
                <span>50 Demande validée</span>
              </div>
              <div>
                <i class="fa-solid fa-close"></i>
                <span>2 Demande rejeté</span>
              </div>
            </div>
            <div class="info between-flex fs-13">
              <span class="c-grey">Joined 28/08/2020</span>
              <div>
                <a class="bg-blue c-white btn-shape" href="profile.html">Profile</a>
                <a class="bg-pri c-white btn-shape" href="">Remove</a>
              </div>
            </div>
          </div>
          <div class="friend bg-white rad-6 p-20 p-relative">
            
              <img class="marg-enrg1" src="./css/photo/Admin team.png" alt="" />
              <h4 class="marg-enrg2">Yasser said</h4>

            <div class="icons fs-14 p-relative">
              <div class="margBottom-10">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>51 Produits vendus</span>
              </div>
              <div class="margBottom-10">
                <i class="fa-sharp fa-solid fa-check"></i>
                <span>50 Demande validée</span>
              </div>
              <div>
                <i class="fa-solid fa-close"></i>
                <span>1 Demande rejeté</span>
              </div>
            </div>
            <div class="info between-flex fs-13">
              <span class="c-grey">Joined 02/10/2020</span>
              <div>
                <a class="bg-blue c-white btn-shape" href="profile.html">Profile</a>
                <a class="bg-pri c-white btn-shape" href="">Remove</a>
              </div>
            </div>
          </div>
          <div class="friend bg-white rad-6 p-20 p-relative">
            
              <img class="marg-enrg1" src="./css/photo/Admin team.png" alt="" />
              <h4 class="marg-enrg2">Hamza radi</h4>

            <div class="icons fs-14 p-relative">
              <div class="margBottom-10">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>44 Produits vendus</span>
              </div>
              <div class="margBottom-10">
                <i class="fa-sharp fa-solid fa-check"></i>
                <span>44 Demande validée</span>
              </div>
              <div>
                <i class="fa-solid fa-close"></i>
                <span>0 Demande rejeté</span>
              </div>
            </div>
            <div class="info between-flex fs-13">
              <span class="c-grey">Joined 02/06/2020</span>
              <div>
                <a class="bg-blue c-white btn-shape" href="profile.html">Profile</a>
                <a class="bg-pri c-white btn-shape" href="">Remove</a>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>

</html>