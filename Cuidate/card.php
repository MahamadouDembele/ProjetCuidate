<!DOCTYPE html>
<html lang="en">
<head>
     <!-- custom css file link  -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card</title>
      <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/navbar.css">
    
    <link rel="stylesheet" href="css/footer.css">
    <style>
        main{
            width: 60% ;
            margin-top: 80px;
            box-shadow: 1px 1px 10px silver;
        }
        thead{
            background-color: gray;
            color: white;
            text-align: center;
        }
        tbody{
            text-align: center;
        }
        th{
            padding: 20px;
        
        }
        td{
            padding-top: 20px;
        }
    </style>
</head>
<body>
<header class="header">

<a href="#" class="logo">
    <img src="" class="Cuidate">
</a>
<span> Cuidate</span>

<nav class="navbar">
    <a href="#home">home</a>
    <a href="#about">about</a>
    <a href="#products">products</a>
    <a href="#review">review</a>
    <a href="#contact">contact</a>

    
</nav>


<div class="icons">
    <div class="fas fa-search" id="search-btn"></div>
    <div class="fas fa-shopping-cart" id="cart-btn"></div>
    <div class="fas fa-bars" id="menu-btn" ></div>
</div>

<div class="search-form">
    <input type="search" id="search-box" placeholder="search here...">
    <label for="search-box" class="fas fa-search"></label>
</div>

<div class="cart-items-container">
    <div class="cart-item">
        <span class="fas fa-times"></span>
        <img src="#" alt="">
        <div class="content">
            <h3>cart item 01</h3>
            <div class="price">100Dh/-</div>
        </div>
    </div>
    <div class="cart-item">
        <span class="fas fa-times"></span>
        <img src="#" alt="">
        <div class="content">
            <h3>cart item 02</h3>
            <div class="price">100Dh/-</div>
        </div>
    </div>
    <div class="cart-item">
        <span class="fas fa-times"></span>
        <img src="#" alt="">
        <div class="content">
            <h3>cart item 03</h3>
            <div class="price">100Dh/-</div>
        </div>
    </div>
    <div class="cart-item">
        <span class="fas fa-times"></span>
        <img src="#" alt="">
        <div class="content">
            <h3>cart item 04</h3>
            <div class="price">100Dh/-</div>
        </div>
    </div>
    <a href="#" class="btn">checkout now</a>
</div>

</header>
<br>
    <br>
    <center><h3>Your Cart contain</h3></center>
    <center>
    <main>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>Product Name</th>
                    <th scope='col'>Product Price</th>
                    <th scope='col'>Delete Product</th>
                </tr>
            </thead>
   <?php
   include('../admin/config.php');
   $result = mysqli_query($con, "SELECT * FROM addcard");
   while ($row = mysqli_fetch_array($result)) {
       echo " 
            <tbody>
                <tr>
                    <td>$row[name]</td>
                    <td>$row[price]</td>
                    <td><a href='delete.php? id=$row[id]' class='btn btn-danger'>Remove</a></td>
                </tr>
            </tbody>
    ";
   }
   ?>
       </table>
    </main>
    </center>
    <center>
        <a href="#" class='btn btn-success'>Check Out</a>
        <br>
        <a href="cuidate.php" class='btn btn-primary' >Back to Home page</a>
        <br>

    </center>
    <br>
    <br>

    <section class="footer">

    <div class="share">
        <a href="https://web.facebook.com/CuidateMa/" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>

        
    </div>

    <div class="links">
        <a href="#">home</a>
        <a href="#">about</a>
        <a href="#">products</a>
        <a href="#">review</a>
        <a href="#">contact</a>
    </div>

    <div class="credit">t'on bien etres chez <span>Cuidate </span> | for you </div>

</section>

<!-- footer section ends -->

















<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>