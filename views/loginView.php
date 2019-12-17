<div>
	<br>
	<h1>Connexion</h1>
	<form action="controller/loginController.php" method="POST">
		<label id="login-error" name="login-error" style="display:none"></label>
		<label class="col-4">Identifiant :</label>
		<input class="col-8" type="text" name="pseudo" required /><br /><br />
		<label class="col-4">Mot de passe :</label>
		<input class="col-8" type="password" name="psw" required /><br /><br />
		<input type="submit" />
	</form>
	<br />
</div>