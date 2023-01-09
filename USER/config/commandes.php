<?php

function ajouterUser($nom, $prenom, $email, $motdepasse)
{
  if(require("connexion.php"))
  {
    $req = $access->prepare("INSERT INTO utilisateur (nom, prenom, email, motdepasse) VALUES (?, ?, ?, ?)");

    $req->execute(array($nom, $prenom, $email, $motdepasse));

    return true;

    $req->closeCursor();
  }
}

function getUsers($email, $password){
  
  if(require("connexion.php")){

    $req = $access->prepare("SELECT * FROM clients where email=? AND motdepasse=?");

    $req->execute(array($email, $password));

    if($req->rowCount() > 0){
      
      $data = $req->fetchAll(PDO::FETCH_OBJ);

      foreach($data as $i){
        $mail = $i->email;
        $mdp = $i->motdepasse;
      }

      if($mail == $email AND $mdp == $password)
      {
        return $data;
      }
      else{
          return false;
      }

    }

   }

 }

function afficher(){
	if(require("connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM products ORDER BY id DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}

?>