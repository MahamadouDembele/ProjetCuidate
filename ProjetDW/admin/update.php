<?php 
session_start();

	include("config.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<?php
include('config.php');
$ID = $_GET['id'];
$up = mysqli_query($con, "SELECT * FROM products where id=$ID");
$data = mysqli_fetch_array($up);
?>
<?php
include('config.php');
$ID = $_POST['id'];
if(isset($_POST['update'])){
    $ID = $_POST['id'];
    $NAME =  $_POST['name'];
    $DESCRIPTION = $_POST['description'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $CATEGORY = $_POST['category'];
    $QUANTITY = $_POST['quantity'];

    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up = "images/" .$image_name;

    $update = "UPDATE products SET name='$NAME' , description='$DESCRIPTION' , price = '$PRICE' , image = '$image_up' , category ='$CATEGORY', quantity=$QUANTITY  WHERE id=$ID";
    mysqli_query($con, $update);
    if(move_uploaded_file($image_location,'images/'.$image_name)){
        echo "<script>alert('uploaded successfully')</script>";
    }else{
        echo "<script>alert('not uploaded successfully')</script>";
    }
    header('location: index.php'); 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Product</title>
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
                <h1 class="p-relative">Modifier un Produit: </h1>
                <div class="settings-page marg-20">
                    <!-- Start Settings Box -->
                    <div class="p-20 bg-white rad-10">
                        <div class="case">
                            <div class="social-boxes pl-24 pt-10 pb-10 bg-white rad-10">
                                <h2 class="generalinfo">Modifier le produit</h2>
                                <form action="" method="POST" enctype="multipart/form-data">
                                <div class="mb-15">
                                   
                                    <input class="b-none border-ccc p-10 rad-6 d-block w-95" type="text" id="first" name="id" value='<?php echo $data['id']?>' style="display: none"/>
                                </div>
                                <div class="mb-15">
                                    <label class="fs-14 c-pri display-block margTop-10 margBottom-5" for="first">Le nom du produit: </label>
                                    <input class="b-none border-ccc p-10 rad-6 d-block w-95" type="text" id="first" name="name" value='<?php echo $data['name']?>'/>
                                </div>
                                <div class="mb-15">
                                    <label class="fs-14 c-pri display-block margTop-10 margBottom-5" for="first"> Quantité </label>
                                    <input class="b-none border-ccc p-10 rad-6 d-block w-95" type="number" id="first" name="quantity" value='<?php echo $data['quantity']?>'/>
                                </div>
                                <div class="margBottom-15">
                                    <label class="fs-14 display-block c-pri margTop-10 margBottom-5" for="last">Description du produit: </label>
                                    <input class="b-none border-ccc p-10 rad-6 display-block w-95" id="last" type="text" name="description" value='<?php echo $data['description']?>' >
                                </div>
                                <div>
                                    <label class="fs-14 c-pri display-block margTop-10 margBottom-5" for="text">Price
                                    </label>
                                    <input class="b-none border-ccc p-10 rad-6 display-block w-95" type="text" name="price" value='<?php echo $data['price']?>' >
                                </div>
                                <div>
                                    <label class="fs-14 c-pri display-block margTop-10 margBottom-5" for="text">image: </label>
                                    <input class="b-none border-ccc p-10 rad-6 display-block w-95" type="file" name="image" >
                                </div>
                                <div>
                                    <label class="fs-14 c-pri display-block margTop-10 margBottom-10"
                                        for="text">Category:</label>
                                    <select name="category" value='<?php echo $data['category']?>'>
                                        <option>Select a Category</option>
                                        <?php 
                                            $select_query  =  "SELECT name FROM category";
                                            $result_query=mysqli_query($con,$select_query);
                                            while($row=mysqli_fetch_assoc($result_query)){
                                                $category_title = $row['name'];
                                                $category_id = $row['id'];
                                                echo "<option value = '$category_id' > $category_title  </option>";
                                            }?>
                                    </select>
                                </div>
                                    <div class="enregistrer">
                                    <input type="submit" name="update" value="Modifier Le Produit" >
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