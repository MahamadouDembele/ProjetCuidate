<?php
include('config.php');
 $ID = $_GET['id'];
mysqli_query($con, "DELETE FROM category where id=$ID");
header('location: view_cat.php')
?>