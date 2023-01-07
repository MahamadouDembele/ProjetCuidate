<?php
include('../admin/config.php');
if(isset($_POST['add'])){

    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $product_img1 = $_POST['image'];
    //$temp_name1 = $_FILES['image']['tmp_name'];
    //move_uploaded_file($temp_name1,"images/$product_img1");
    $insert = "INSERT INTO addcard (name, price, image) VALUES ('$NAME', '$PRICE', '$product_img1')";
    mysqli_query($con, $insert);
    header('location:card.php');
}
?>