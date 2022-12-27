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
          <a class="active flex align-center fs-14 rad-12 p-10 c-pri" href="index.php">
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
          <a class="flex align-center fs-14 rad-12 p-10 c-pri" href="category_form.php">
              <i class="active fa-solid fa-circle-plus"></i>
              <span>Nouvelle catégorie</span>
          </a>
      </li>
        <li>
          <a class="flex align-center fs-14 rad-12 p-10 c-pri" href="Settings.php">
            <i class="fa-solid fa-gear"></i>
            <span>Paramètres</span>
          </a>
        </li>
        <li>
          <a class="flex align-center fs-14 rad-12 p-10 c-pri" href="Clients.php">
            <i class="fa-solid fa-user-group"></i>
            <span>Clients</span>
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
            <h3 class ='admin'> <?php echo $user_data['user_name']; ?> </h3>
           
            <img src="css/photo/administrator.png" alt='admin' />
          </div>
          <div class="dropdown-content">
            <a href="#">Profil</a>
            <a href="logout.php">Deconnexion</a>
          </div>
        </div>
      </div>

      <main>
        <h1 class="p-relative">Vu generale</h1>
        <div class="cards">
          <div class="card-single">
            <div>
              <h2>3.000.000</h2>
              <small>Ventes</small>
            </div>
            <div>
              <span class="fa fa-shopping-cart"></span>
            </div>
          </div>

          <div class="card-single">
            <div>
              <h2>+400</h2>
              <small>Stock</small>
            </div>
            <div>
              <span class="fa fa-warehouse"></span>
            </div>
          </div>

          <div class="card-single">
            <div>
              <h2>45</h2>
              <small>Fournisseur</small>
            </div>
            <div>
              <span class="fa fa-outdent"></span>
            </div>
          </div>

          <div class="card-single">
            <div>
              <h2>70k</h2>
              <small>Communauté</small>
            </div>
            <div>
              <span class="fa fa-people-group"></span>
            </div>
          </div>
        </div>

        <div class="quick-draft p-10 pt-20 bg-white rad-10">
          <h2 class="margTop-0 marginBottom-10">Brouillon rapide:</h2>
          <p class="margTop-0 marginBottom-20 fs-15">
            Write A Draft For Your Ideas
          </p>
          <form>
            <input class="d-block mBottom-24 w-full p-10 b-none rad-6" type="text" placeholder="Title" />
            <textarea class="d-block margTop-15 w-full p-10 b-none bg-eee rad-6" placeholder="Your Thought"></textarea>
            <input class="save margTop-10 d-block fs-14 bg-blue c-white b-none w-fit btn-shape" type="submit"
              value="Save" />
          </form>
        </div>

        <div class="composant">
          <div class="ventes">
            <div class="case">
              <div class="header-case">
                <h2 class="pl-37">Listes produits:</h2>
                <button class="button margRight-39">
                  Voir plus <span class="fa fa-arrow-right"></span>
                </button>
              </div>
              <div class="body-case">
                <div class="tableau margBottom-25">
                  <table width="100%">
                    <thead>
                      <tr>
                        <td>Nom Du Produit</td>
                        <td>Qté</td>
                        <td>ID Du Produit</td>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
       $result =  mysqli_query($con, "SELECT * FROM products");
       while($row=mysqli_fetch_array($result)){
           echo "
                <tr>
                    <td>$row[name]</td>
                    <td>$row[quantity]</td>
                    <td>$row[id]</td>
                    <td><a href='delete.php? id=$row[id]' value='delete'>Supprimer</a></td>
                    <td><a href='update.php? id=$row[id]' value='Update'>Modifier</a></td>
                    
                    
                </tr>";}
       ?>
                    <!--  <tr>
                        <td>Crèmes</td>
                        <td>cc</td>
                        <td>2</td>
                      </tr>
                      <tr>
                        <td>Masques de beauté</td>
                        <td>dmeba</td>
                        <td>3</td>
                      </tr>
                      <tr>
                        <td>Fonds de teint</td>
                        <td>dmeba</td>
                        <td>4</td>
                      </tr>
                      <tr>
                        <td>Savons de toilette</td>
                        <td>dmeba</td>
                        <td>5</td>
                      </tr>-->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="case">
            <div class="header-case">
              <h2 class="pl-15">Clients fideles:</h2>
            </div>

            <div class="body-case">
              <div class="all-users">
                <div class="infos">
                  <img decoding="async" src="css/photo/man.png" width="30" height="30" />
                  <div>
                    <h4>Said</h4>
                    <small>76 Ventes</small>
                  </div>
                </div>

                <div class="user-contact">
                  <span class="fa-brands fa-facebook"></span>
                  <span class="fa-brands fa-whatsapp"></span>
                  <span class="fa fa-phone"></span>
                </div>
              </div>
              <div class="all-users">
                <div class="infos">
                  <img decoding="async" src="css/photo/gamer.png" width="30" height="30" />
                  <div>
                    <h4>Omar</h4>
                    <small>60 Ventes</small>
                  </div>
                </div>

                <div class="user-contact">
                  <span class="fa-brands fa-facebook"></span>
                  <span class="fa-brands fa-whatsapp"></span>
                  <span class="fa fa-phone"></span>
                </div>
              </div>
              <div class="all-users">
                <div class="infos">
                  <img decoding="async" src="css/photo/user-women.png" width="30" height="30" />
                  <div>
                    <h4>Zineb</h4>
                    <small>59 Ventes</small>
                  </div>
                </div>

                <div class="user-contact">
                  <span class="fa-brands fa-facebook"></span>
                  <span class="fa-brands fa-whatsapp"></span>
                  <span class="fa fa-phone"></span>
                </div>
              </div>
              <div class="all-users">
                <div class="infos">
                  <img decoding="async" src="css/photo/woman.png" width="30" height="30" />
                  <div>
                    <h4>Sanae</h4>
                    <small>22 Ventes</small>
                  </div>
                </div>

                <div class="user-contact">
                  <span class="fa-brands fa-facebook"></span>
                  <span class="fa-brands fa-whatsapp"></span>
                  <span class="fa fa-phone"></span>
                </div>
              </div>
            </div>
            <button class="btn margTop-10 txt-center">
              voir plus <span class="fa fa-arrow-right"></span>
            </button>

          </div>

        </div>
        <div class="calendar">
          <div class="mois-annee">
            <ul>
              <li class="prev">&#10094;</li>
              <li class="next">&#10095;</li>
              <li>
                Decembre <br />
                <span>2022</span>
              </li>
            </ul>
          </div>

          <ul class="mois">
            <li>Mo</li>
            <li>Tu</li>
            <li>We</li>
            <li>Th</li>
            <li>Fr</li>
            <li>Sa</li>
            <li>Su</li>
          </ul>

          <ul class="jours">
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
            <li>7</li>
            <li><span class="active">8</span></li>
            <li>9</li>
            <li>10</li>
            <li>11</li>
            <li>12</li>
            <li>13</li>
            <li>14</li>
            <li>15</li>
            <li>16</li>
            <li>17</li>
            <li>18</li>
            <li>19</li>
            <li>20</li>
            <li>21</li>
            <li>22</li>
            <li>23</li>
            <li>24</li>
            <li>25</li>
            <li>27</li>
            <li>28</li>
            <li>29</li>
            <li>30</li>
            <li>31</li>
          </ul>
        </div>

      </main>
    </div>
  </div>
</body>

</html>