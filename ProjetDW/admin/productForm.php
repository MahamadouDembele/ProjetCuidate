<?php 
session_start();

	include("config.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!--

include('config.php');


if(isset($_POST['insert_product'])){

    $NAME = $_POST['name'];
    $DESCRIPTION = $_POST['description'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $CATEGORY = $_POST['category'];
    $QUANTITY = $_POST['quantity'];

    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up = "images/".$image_name;

    $insert = "INSERT INTO products (name, description, price, image, category, quantity) VALUES ('$NAME', '$DESCRIPTION', '$PRICE', '$image_up', '$CATEGORY', $QUANTITY)";
    mysqli_query($con, $insert);
    if(move_uploaded_file($image_location,'images/'. $image_name)){
        echo "<script>alert('uploaded successfully')</script>";
    }else{
        echo "<script>alert('not uploaded successfully')</script>";
    }
    header('location: productForm.php'); 
}-->

<?php

if(isset($_POST['insert_product'])){

$product_title = $_POST['name'];
$product_cat = $_POST['category'];
//$cat = $_POST['cat'];
//$manufacturer_id = $_POST['manufacturer'];
$product_price = $_POST['price'];
$product_desc = $_POST['description'];
//$product_keywords = $_POST['product_keywords'];
    $QUANTITY = $_POST['quantity'];
//$psp_price = $_POST['psp_price'];

//$product_label = $_POST['product_label'];

//$product_url = $_POST['product_url'];

//$product_features = $_POST['product_features'];

//$product_video = $_POST['product_video'];

$status = "product";

$product_img1 = $_FILES['image']['name'];
//$product_img2 = $_FILES['product_img2']['name'];
//$product_img3 = $_FILES['product_img3']['name'];

$temp_name1 = $_FILES['image']['tmp_name'];
//$temp_name2 = $_FILES['product_img2']['tmp_name'];
//$temp_name3 = $_FILES['product_img3']['tmp_name'];

move_uploaded_file($temp_name1,"images/$product_img1");
//move_uploaded_file($temp_name2,"product_images/$product_img2");
//move_uploaded_file($temp_name3,"product_images/$product_img3");

$insert_product = "INSERT INTO products (name, description, price, image, category, quantity) VALUES ('$product_title', '$product_desc', '$product_price', '$product_img1', '$product_cat', $QUANTITY)";
$run_product = mysqli_query($con,$insert_product);

if($run_product){

echo "<script>alert('Product has been inserted successfully')</script>";

echo "<script>window.open('index.php?view_products','_self')</script>";

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
                    <a class=" active flex align-center fs-14 rad-12 p-10 c-pri" href="insert_product.php">
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
                <h1 class="p-relative">Nouveau Produit: </h1>
                <div class="settings-page marg-20">
                    <!-- Start Settings Box -->
                    <div class="p-20 bg-white rad-10">
                        <div class="case">
                            <div class="social-boxes pl-24 pt-10 pb-10 bg-white rad-10">
                                <h2 class="generalinfo">Ajouter un produit</h2>
                                <form action="" method="POST" enctype="multipart/form-data">
                                <div class="mb-15">
                                    <label class="fs-14 c-pri display-block margTop-10 margBottom-5" for="first">Le nom du produit: </label>
                                    <input class="b-none border-ccc p-10 rad-6 d-block w-95" type="text" id="first" name="name"/>
                                </div>
                                <div class="mb-15">
                                    <label class="fs-14 c-pri display-block margTop-10 margBottom-5" for="first"> Quantité </label>
                                    <input class="b-none border-ccc p-10 rad-6 d-block w-95" type="number" id="first" name="quantity"/>
                                </div>
                                <div class="margBottom-15">
                                    <label class="fs-14 display-block c-pri margTop-10 margBottom-5" for="last">Description du produit: </label>
                                    <input class="b-none border-ccc p-10 rad-6 display-block w-95" id="last" type="text" name="description" >
                                </div>
                                <div>
                                    <label class="fs-14 c-pri display-block margTop-10 margBottom-5" for="text">Price
                                    </label>
                                    <input class="b-none border-ccc p-10 rad-6 display-block w-95" type="text" name="price" >
                                </div>
                                <div>
                                    <label class="fs-14 c-pri display-block margTop-10 margBottom-5" for="text">image: </label>
                                    <input class="b-none border-ccc p-10 rad-6 display-block w-95" type="file" name="image">
                                </div>
                                <div>
                                    <label class="fs-14 c-pri display-block margTop-10 margBottom-10"
                                        for="text">Category:</label>
                                    <select name="category" >
                                        <option>Select a Category</option>
                                        <?php 
                                            /*$select_query  =  "SELECT name FROM category";
                                            $result_query=mysqli_query($con,$select_query);
                                            while($row=mysqli_fetch_assoc($result_query)){
                                                $category_title = $row['name'];
                                                $category_id = $row['id'];
                                                echo "<option value = '$category_id' > $category_title  </option>";
                                            }*/
                                            

                                            $get_cat = "select * from category ";

                                            $run_cat = mysqli_query($con, $get_cat);

                                            while ($row_cat=mysqli_fetch_array($run_cat)) {

                                            $cat_id = $row_cat['id'];

                                            $cat_title = $row_cat['name'];

                                            echo "<option value='$cat_id'>$cat_title</option>";

                                            }
                                            ?>
                                    </select>
                                </div>
                                    <div class="enregistrer">
                                    <input type="submit" name="insert_product" value="Insert Product" >
                                    </div>
                                    
                                        </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>