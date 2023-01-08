<?php 


	include("config.php");
    include("functions.php");
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$name = $_POST['name'];
        $lastname = $_POST['lastName'];
        $email=$_POST['email'];
        $userName = $_POST['username'];
        $password = $_POST['mdp'];
        $role = $_POST['Role'];
        if(!empty($username) && !empty($password) && !is_numeric($username)){
			//save to database
			$user_id = random_num(20);
			$query = "insert into users (id, Nom, Prenom, email, user_name, password, Role) values ($user_id,'$name','$lastname','$email','$userName',$password','$role')";

            mysqli_query($con, $query);
          

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

                    <!-- Ajouter nv mombre -->
                    <div class="case composant2 margLeft-15 margRight-15">
                        <div class="social-boxes margLeft-15 margRight-15 margTop-0">
                            <h2 class="generalinfo">Ajouter nouveaux mombre:</h2>
                            <p class="margTop-5 margBottom-20 c-pri fs-15">
                                Remplire les infotmation suivante s'il vous plais:
                            </p>
                            <form action="" method="POST">
                            <div class="mb-15">
                                <label class="fs-14 c-pri display-block margTop-10 margBottom-5" for="first">Nom</label>
                                <input class="b-none border-ccc p-10 rad-6 d-block w-95" type="text" id="first"
                                    placeholder="Nom" name="name">
                            </div>
                            <div class="margBottom-15">
                                <label class="fs-14 display-block c-pri margTop-10 margBottom-5" for="last">Prenom</label>
                                <input class="b-none border-ccc p-10 rad-6 display-block w-95" id="last" type="text"
                                    placeholder="Prenom" name="lastName">
                            </div>
                            <div class="margBottom-15">
                                <label class="fs-14 display-block c-pri margTop-10 margBottom-5" for="last">Nom d'utilisateur</label>
                                <input class="b-none border-ccc p-10 rad-6 display-block w-95" id="last" type="text"
                                    placeholder="Nom d'utilisateur" name="username">
                            </div>
                            <div class="margBottom-15">
                                <label class="fs-14 display-block c-pri margTop-10 margBottom-5" for="last">Role</label>
                                <input class="b-none border-ccc p-10 rad-6 display-block w-95" id="last" type="text"
                                    placeholder="Role" name="Role">
                            </div>
                            <div>
                                <label class="fs-14 c-pri display-block margTop-10 margBottom-20"
                                    for="email">Email</label>
                                <input class="email b-none border-ccc p-10 rad-6 mr-10 margBottom-20 w-95" id="email"
                                    type="email" value="@cuidate.com" name="email" >
                            </div>
                            <div class="margBottom-15">
                                <label class="fs-14 display-block c-pri margTop-10 margBottom-5" for="last">Mot de passe</label>
                                <input class="b-none border-ccc p-10 rad-6 display-block w-95" id="last" type="password"
                                    placeholder="mot de passe" name="mdp" >
                            </div>
                                <br />
                                <input  type="submit" name="save" value="Enregistrer">
                            </form>