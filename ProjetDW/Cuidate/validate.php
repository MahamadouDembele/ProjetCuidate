<?php
include('../admin/config.php');
$ID = $_GET['id'];
$up = mysqli_query($con, "SELECT * FROM products where id=$ID");
$data = mysqli_fetch_array($up);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm purchasing</title>
    <style>
        input{
            
            display: none;
        }
        .main{
            background-color: beige;
            width: 30%;
            padding: 20px;
            box-shadow: 1px 1px 10px silver;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    
        <center>
            <div class="main">
                <form action="insertTocard.php" method="post">
                    <h2>Do you want to add this product to the card?</h2>
                    <input type="text" name="id" value='<?php echo $data['id']?>' >
                    <br>
                    <input type="text" name="name" value='<?php echo $data['name']?>' >
                    <br>
                    <input type="text" name="price" value='<?php echo $data['price']?>' >
                    <br>
                    <button name="add" type="submit" class="btn btn-warning">Add To Cart</button>
                    <br>
                    <a href="cuidate.php" value>Back to Catalog</a>
                </form>
            </div>

        </center>
</body>
</html>