
<!-- composant d'affichage -->
<div>
	<div style="text-align:center">
		<a data-toggle="collapse" href="#collapseRegister">s'enregistrer</a>
	</div>
	<div class="collapse" id="collapseRegister">
		<h2>Enregistrement</h2>
		<form class="container" action="controller/registerController.php" method="POST">
			<div class="row m-2">
				<label class="col-3">Identifiant :</label>
				<input class="col-9" type="text" name="pseudo" required /><br /><br />
			</div>
			<label>Mot de passe :</label>
			<input type="password" name="psw" required /><br /><br />
			<label>Retapez mot de passe :</label>
			<input type="password" name="psw2" required /><br /><br />
			<input type="submit" />
		</form>
	</div>
</div>