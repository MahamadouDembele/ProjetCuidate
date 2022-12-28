<?php 
session_start();

	include("config.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
	$name = $_POST['Nom'];
	$LastName = $_POST['Prenom'];
	$email = $_POST['email'];
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$role = $_POST['role'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "INSERT INTO users (id,Nom, Prenom, email, user_name,password,Role) values ($user_id,'$name','$LastName','$email','$user_name','$password','$role')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>
			<input id="text" type="text" name="Nom" placeholder="Nom"><br><br>
			<input id="text" type="text" name="Prenom" placeholder="Prenom"><br><br>
			<input id="text" type="e-mail" name="email" placeholder="e-mail"><br><br>
			<input id="text" type="text" name="user_name" placeholder="user name"><br><br>
			<input id="text" type="text" name="role" placeholder="role"><br><br>
			<input id="text" type="password" name="password" placeholder="mot de passe"><br><br>
			

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>