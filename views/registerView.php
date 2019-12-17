<!-- composant d'affichage -->
<br>
<div>
	<div style="text-align:center">
	<p style="font-family: 'Ruda', sans-serif;"> pas d'identifiant cliquez sur le lien çi-dessous</p>
		<a data-toggle="collapse" href="#collapseRegister">s'enregistrer</a>
	</div>
	<div class="collapse" id="collapseRegister">
		<h1>Enregistrement</h1>
		<form class="container" action="controller/registerController.php" method="POST">
			<div class="row m-2">
				<label class="col-3">Identifiant :</label>
				<input class="col-9" type="text" name="pseudo" required /><br /><br />
			</div>
			<br>
			<div class="row m-2">
				<label class="col-3">Mot de passe :</label>
				<input class="col-9" type="password" name="psw" required /><br /><br />
			</div>
			<br>
			<div class="row m-2">
				<label class="col-3">Retapez mot de passe :</label>
				<input class="col-9" type="password" name="psw2" required /><br /><br />
			</div>
			<input type="submit" />
		</form>
	</div>
</div>