<?php
//Connexion à la base de données
// BDD name : cv

try 
{
	$pdo = new PDO('mysql:host=localhost;dbname=cv', 'root', '');
}
 catch (Exception $e)
  {
	die('Erreur : ' . $e->getMessage());
}

//Nous vérifions que l'utilisateur a bien envoyé les informations demandées 
if (isset($_POST["pseudo"]) && isset($_POST["psw"])) 
{

	//Nous allons demander le hash pour cet utilisateur à notre base de données :
	$query = $pdo->prepare('SELECT psw FROM membre WHERE pseudo = :pseudo');
	$query->bindParam(':pseudo', $_POST["pseudo"]);
	$query->execute();
	$result = $query->fetch();
	$hash = $result[0];

	//Nous vérifions si le mot de passe utilisé correspond bien à ce hash à l'aide de password_verify :
	$correctPassword = password_verify($_POST["psw"], $hash);

	if ($correctPassword)
	 {
		//Si oui nous accueillons l'utilisateur identifié
		// echo "<h3>Bienvenu sur mon site : </h3>" . $_POST["pseudo"];
		header('Location: ../views/mainView.php');
	} else {
		//Sinon nous signalons une erreur d'identifiant ou de mot de passe
		echo "login/password incorrect";
		header('Location: ../loginView.php');
	}
}

	




// header ('Location:../registerController.php');



?>