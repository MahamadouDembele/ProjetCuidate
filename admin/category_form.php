<?php 
session_start();

	include("config.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<?php
include('config.php');
/*
if(isset($_POST['insert_cat'])){
  $category_name = $_POST['category_name'];



if($category_name!=''){

  $sql = "INSERT INTO category (name) VALUES ('$category_name')";

  if (mysqli_query($con, $sql)) {
   echo "<script>alert('category successfully added')</script>";

  } else {
    echo "ERROR: Hush! Sorry $sql. "
      . mysqli_error($con);
  }
 
}
header('location: category_form.php');
}*/
if(isset($_POST['insert_cat'])){

    $cat_title = $_POST['category_name'];
    
    //$cat_top = $_POST['cat_top'];
    
    //$cat_image = $_FILES['cat_image']['name'];
    
    //$temp_name = $_FILES['cat_image']['tmp_name'];
    
    //move_uploaded_file($temp_name,"other_images/$cat_image");
    
    $insert_cat = "insert into category (name) values ('$cat_title')";
    
    $run_cat = mysqli_query($con, $insert_cat);
    
    if($run_cat){
    
    echo "<script> alert('New Category Has Been Inserted')</script>";
    
    //echo "<script> window.open('index.php?view_cats','_self') </script>";
    
    }
    
    }

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
        <style>
        input{margin-bottom: 10px;
        }
        .btn:hover{
            cursor: pointer;
            
        }
        .btn{
            color: black;
            margin-left: 0px;
        }



            </style>
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

            <main>
                <h1 class="p-relative">Nouvelle catégorie:</h1>
                <div class="settings-page marg-20">
                    <!-- Start Settings Box -->
                    <div class="p-20 bg-white rad-10">
                        <div class="case">
                            <div class="social-boxes pl-24 pt-10 pb-10 bg-white rad-10">
                                <h2 class="generalinfo">Ajouter un catégorie</h2>
                                <div class="mb-15">
                                    <form action="" method="POST"> 
                                    <label class="fs-14 c-pri display-block margTop-10 margBottom-5" for="first">Le nom de la nouvelle catégorie:</label>
                                    <br>
                                    <input class="b-none border-ccc p-10 rad-6 d-block w-95 " type="text" id="first" name="category_name" >
                                    <br>               
                                    <input class="btn" type="submit" name="insert_cat" value="insert category" >
                                    </form>
                                </div>
                            </div>                                                            
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>