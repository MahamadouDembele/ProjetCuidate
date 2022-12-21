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
                    <a class="flex align-center fs-14 rad-12 p-10 c-pri" href="category_form.php">
                        <i class="active fa-solid fa-circle-plus"></i>
                        <span>Nouvelle catégorie</span>
                    </a>
                </li>
                <li>

                    <a class="active flex align-center fs-14 rad-12 p-10 c-pri" href="Paramètres.php">
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

            <!-- Settings -->

            <main>
                <h1 class="p-relative">Settings</h1>
                <div class="settings-page marg-20 display-grid gap-20">
                    <!-- Start Settings Box -->
                    <div class="p-20 bg-white rad-10">
                        <div class="case">
                            <div class="social-boxes pl-24 pt-10 pb-30 bg-white rad-10">
                                <h2 class="generalinfo">General Info</h2>
                                <p class="margTop-5 margBottom-20 c-pri fs-15">
                                    General Information About Your Account
                                </p>
                                <div class="mb-15">
                                    <label class="fs-14 c-pri display-block margTop-10 margBottom-5" for="first">First
                                        Name</label>
                                    <input class="b-none border-ccc p-10 rad-6 d-block w-95" type="text" id="first"
                                        placeholder="First Name" />
                                </div>
                                <div class="margBottom-15">
                                    <label class="fs-14 display-block c-pri margTop-10 margBottom-5" for="last">Last
                                        Name</label>
                                    <input class="b-none border-ccc p-10 rad-6 display-block w-95" id="last" type="text"
                                        placeholder="Last Name" />
                                </div>
                                <div>
                                    <label class="fs-14 c-pri display-block margTop-10 margBottom-5"
                                        for="email">Email</label>
                                    <input class="email b-none border-ccc p-10 rad-6 mr-10 margBottom-20 w-95"
                                        id="email" type="email" value="contact@cuidate.com" disabled />
                                    <br />
                                    <a class="change rad-6 p-5 c-white pBottom-10" href="#">Change</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-20 bg-white rad-10">
                        <div class="case">
                            <div class="social-boxes pl-24 pt-10 pb-30 bg-white rad-10">
                                <h2 class="margTop-5 margBottom-20">
                                    Mettre a jours des social media
                                </h2>
                                <p class="margTop-0 margBottom-20 c-pri fs-15">
                                    Social Media Information:
                                </p>
                                <div class="flex align-center margBottom-15">
                                    <i class="fa-brands fa-twitter center-flex c-pri"></i>
                                    <input class="w-85" type="text" placeholder="Twitter Username" />
                                </div>
                                <div class="flex align-center margBottom-15">
                                    <i class="fa-brands fa-facebook-f center-flex c-pri"></i>
                                    <input class="w-85" type="text" placeholder="Facebook Username" />
                                </div>
                                <div class="flex align-center margBottom-15">
                                    <i class="fa-brands fa-linkedin center-flex c-pri"></i>
                                    <input class="w-85" type="text" placeholder="Linkedin Username" />
                                </div>
                                <div class="flex align-center">
                                    <i class="fa-brands fa-youtube center-flex c-pri"></i>
                                    <input class="w-85" type="text" placeholder="Youtube Username" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="case composant2 margLeft-15 margRight-15 margBottom-15">
                        <div class="header-case">
                            <h2 class="pl-24">Liste team:</h2>
                        </div>

                        <div class="body-case">
                            <div class="all-users">
                                <div class="infos">
                                    <img decoding="async" src="css/photo/Admin team.png" width="30" height="30" />
                                    <div>
                                        <h4>Charaf</h4>
                                        <small>Admin</small>
                                    </div>
                                </div>

                                <div class="user-contact">
                                    <span class="fa-brands fa-facebook"></span>
                                    <span class="fa-brands fa-whatsapp"></span>
                                    <span class="fa fa-phone"></span>
                                </div>
                            </div>
                            <div class="all-users">
                                <div class="infos">
                                    <img decoding="async" src="css/photo/woman team.png" width="30" height="30" />
                                    <div>
                                        <h4>Nouhaila</h4>
                                        <small class="margTop-0">Commerciale</small>
                                    </div>
                                </div>

                                <div class="user-contact">
                                    <span class="fa-brands fa-facebook"></span>
                                    <span class="fa-brands fa-whatsapp"></span>
                                    <span class="fa fa-phone"></span>
                                </div>
                            </div>
                            <div class="all-users">
                                <div class="infos">
                                    <img decoding="async" src="css/photo/Developper.png" width="30" height="30" />
                                    <div>
                                        <h4>Hiba</h4>
                                        <small>Développeur back end</small>
                                    </div>
                                </div>

                                <div class="user-contact">
                                    <span class="fa-brands fa-facebook"></span>
                                    <span class="fa-brands fa-whatsapp"></span>
                                    <span class="fa fa-phone"></span>
                                </div>
                            </div>
                            <div class="all-users">
                                <div class="infos">
                                    <img decoding="async" src="css/photo/man team.png" width="30" height="30" />
                                    <div>
                                        <h4>Nasser</h4>
                                        <small>Développeur front end</small>
                                    </div>
                                </div>

                                <div class="user-contact">
                                    <span class="fa-brands fa-facebook"></span>
                                    <span class="fa-brands fa-whatsapp"></span>
                                    <span class="fa fa-phone"></span>
                                </div>
                            </div>
                            <div class="margBottom-15"></div>
                        </div>
                    </div>

                    <!-- Ajouter nv mombre -->
                    <div class="case composant2 margLeft-15 margRight-15">
                        <div class="social-boxes margLeft-15 margRight-15 margTop-0">
                            <h2 class="generalinfo">Ajouter nouveaux mombre:</h2>
                            <p class="margTop-5 margBottom-20 c-pri fs-15">
                                Remplire les infotmation suivante s'il vous plais:
                            </p>
                            <div class="mb-15">
                                <label class="fs-14 c-pri display-block margTop-10 margBottom-5" for="first">First
                                    Name</label>
                                <input class="b-none border-ccc p-10 rad-6 d-block w-95" type="text" id="first"
                                    placeholder="First Name" />
                            </div>
                            <div class="margBottom-15">
                                <label class="fs-14 display-block c-pri margTop-10 margBottom-5" for="last">Last
                                    Name</label>
                                <input class="b-none border-ccc p-10 rad-6 display-block w-95" id="last" type="text"
                                    placeholder="Last Name" />
                            </div>
                            <div class="margBottom-15">
                                <label class="fs-14 display-block c-pri margTop-10 margBottom-5" for="last">Role</label>
                                <input class="b-none border-ccc p-10 rad-6 display-block w-95" id="last" type="text"
                                    placeholder="Role" />
                            </div>
                            <div>
                                <label class="fs-14 c-pri display-block margTop-10 margBottom-20"
                                    for="email">Email</label>
                                <input class="email b-none border-ccc p-10 rad-6 mr-10 margBottom-20 w-95" id="email"
                                    type="email" value="@cuidate.com" />
                                <br />
                                <a class="change rad-6 p-5 c-white pBottom-10" href="#">Change</a>
                                <div class="margBottom-20"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>