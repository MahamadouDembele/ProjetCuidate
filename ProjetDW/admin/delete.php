<?php
include('config.php');
 $ID = $_GET['id'];
mysqli_query($con, "DELETE FROM products where id=$ID");
header('location: index.php')
?>