<?php

$pdo = new PDO('mysql:host=localhost;dbname=cv', 'root', '');
	
//On vérifie que l'utilisateur a bien envoyé les informations demandées 
if(isset($_POST["pseudo"]) && isset($_POST["psw"]) && isset($_POST["psw2"])){
	//On vérifie que password et password2 sont identiques
	if($_POST["psw"] == $_POST["psw2"]){
		//On utilise alors notre fonction password_hash :
		$hash = password_hash($_POST["psw"], PASSWORD_DEFAULT);
		//Puis on stock le résultat dans la base de données :
		$query = $pdo->prepare('INSERT INTO membre (pseudo, psw) VALUES(:pseudo, :psw);');
		$query->bindParam(':pseudo', $_POST["pseudo"]);
		$query->bindParam(':psw', $hash);
		$query->execute();
		header('Location: ../views/loginController.php');
        exit();
    }
}
