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
    <style>
table, td {
  text-align: center; 
}
tr:nth-child(even),.firsrow {
  background-color: #f2f2f2;
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
                        <span>Accueil: </span>
                    </a>
                </li>
                <li>
          <a class="flex align-center fs-14 rad-12 p-10 c-pri ama" href="productForm.php">
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
 
            <h1 class="p-relative">Produits disponibles</h1>
                <div class="settings-page marg-20">
                <div class="table-responsive" ><!-- table-responsive Starts -->
                <table class="table table-bordered table-hover table-striped case margo" width="100%"><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr class="firsrow">
<th>#</th>
<th>Title</th>
<th>Image</th>
<th>Price</th>
<th>Description</th>
<th>Delete</th>
<th>Edit</th>



</tr>

</thead>

<tbody>

<?php
include('config.php');

$result =  mysqli_query($con, "SELECT * FROM products");
while($row=mysqli_fetch_array($result)){
    
    echo "
         <tr>
            <td>$row[id]</td>
             <td>$row[name]</td>
             <td><img src='images/$row[image]' width='60' height='60' ></td>
             <td>$row[price]</td>
             <td >$row[description]</td>
             <td><a href='delete.php? id=$row[id]' value='delete'>Supprimer</a></td>
             <td><a href='update.php? id=$row[id]' value='Update'>Modifier</a></td>
            
             
         </tr>";}

?>
</tbody>


</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->




<?php ?>
                  
            </main>
        </div>
    </div>
</body>

</html>


