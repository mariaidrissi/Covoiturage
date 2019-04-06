<?php require("inc/header.php"); ?>
<div class="col-auto mx-auto text-center" id="content">
<h1>Connexion</h1>
<form action="login.php" method="post">
	<div class="form-group">
		<div class="row">
			<div class="col">
				<label for="depart">Nom d'utilisateur</label>
				<input type="text" class="form-control" name="username" id="username">
				<label for="arrivee">Mot de passe</label>
				<input type="text" class="form-control" name="password" id="password">
			</div>
		</div>
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary btn-lg" value="Chercher">
	</div>
</form>
<?php require("inc/footer.php"); ?>