<?php

 session_start();

 require("config/connexion.php");

    if(isset($_POST['envoyer'])){
        if(!empty($_POST['nom']) AND !empty($_POST['email']) AND !empty($_POST['motdepasse'])){
            
            $nom = htmlspecialchars($_POST['nom']);
            $email = htmlspecialchars($_POST['email']);
            $motdepasse = htmlspecialchars($_POST['motdepasse']);

            $insererUser = $access->prepare('INSERT INTO clients (nom,email,motdepasse) VALUES (?,?,?)');
            $insererUser->execute(array($nom,$email,$motdepasse));

            if($insererUser){
                header("Location: login.php");
            }
           // $recupUser = $access-> prepare('SELECT * FROM user WHERE nom =? AND email=? AND motdepasse=?');
           // $recupUser->execute(array($nom,$email,$motdepasse));
           // if($recupUser->rowCount()>0){
              // $_SESSION['nom'] = $nom;
               // $_SESSION['email'] = $email;
                //$_SESSION['motdepasse'] = $motdepasse;
            //}

           // echo $_SESSION['id'];
        }
        else{
            echo "Veullez completer les champs....";
        }

    }

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!--========= BOXICONS =========-->
         <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
         <!--======== UNICONS=======-->
         <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
          <!--========= BOOTSRAP =========-->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
         <!-- ===== CSS ===== -->
         <link rel="stylesheet" href="Assets/Css/Cuidate.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,900&display=swap');
.login{
    margin-top: 5rem;
}
.registration-form{
	padding: 50px 0;
}

.registration-form form{
    background-color:rgb(204, 158, 121) ;
    max-width: 600px;
    margin: auto;
    padding: 50px 70px;
    border-radius: 30px;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
}
.form-group{
    margin-bottom: 20px;
}
.form-icon{
    font-size: 40px;
    color: white;
    text-align: center;
    line-height: 100px;
    margin-bottom: 20px;
}

.item{
	border-radius: 20px;
    margin-bottom: 25px;
    padding: 10px 20px;
}

.create-account{
    border-radius: 30px;
    padding: 10px 20px;
    font-size: 10px;
    font-weight: bold;
    background-color: #683b23;
    border: none;
    color: #fff;
    margin-top: 20px;
}
.create-account:hover{
    color: #fff;
}
.link_page{
    color: #fff;
    text-decoration: none;
    margin-left: 10px;
    margin-top: 20px;
}

.link_page:hover{
    text-decoration: underline;
    color: #fff;
}
.navbar a{
    text-decoration: none;
}
.links a{
    text-decoration: none;
}
.share a{
    text-decoration: none;
}
@media (max-width: 576px) {
    .registration-form form{
        padding: 50px 20px;
    }

}
        </style>

        <title>Login</title>
    </head>
    <body>
        <header class="header">

            <a href="#" class="Logo">
                 <img src="Assets/Img/logo.png" class="logo_img" >
             </a>  
             <!--<span> Cuidate</span>-->
         
             <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#products" class="dropbtn"><div class="dropdown">products
            <i class="uil uil-angle-down"></i>
            <div class="dropdown-content">
                <a href="#products">Lien 1</a>
                <a href="#products">Lien 2</a>
                <a href="#products">Lien 3</a>
              </div>
        </div></a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
    </nav>
    <div class="icons">
        <a href="#" class="icon_link"><i class="uil uil-shopping-cart-alt nav_icon" ></i></a>
        <a href="login.php" class="icon_link"><i class="uil uil-user-circle nav_icon"></i></a>
        <div class="fas fa-bars" id="menu-btn" ></div>
    </div>
         </header>
        <section class="login">
            <div class="registration-form">
            <form method="POST" action="">
                    <div class="form-icon">
                        <h3>Creer un Compte</h3>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control item" id="nom" name="nom" placeholder="nom">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control item" id="email" name="email" placeholder="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control item" id="password" name="motdepasse" placeholder="password">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="envoyer" class="btn btn-block create-account" value="Creer un Compte">
                    </div>
                </form>
            </div>
        </section>
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
        
            <div class="credit">Votre bien etrê chez Cuidate </div>
        
        </section>
        
    </body>
</html>