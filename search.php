<?php require("inc/header.php"); ?>
<h1>Rechercher un covoiturage</h1>
<form action="results.php" method="post">
	<div class="form-group">
		<div class="row">
			<div class="col">
				<label for="depart">Départ</label>
				<select name="depart" id="depart" class="form-control">
					<option value='bf'>BF</option>
					<option value='pg'>PG</option>
				</select>
			</div>
			<div class="col">
				<label for="arrivee">Arrivée</label>
				<select name="arrivee" id="arrivee" class="form-control">
					<option value='pg'>PG</option>
					<option value='bf'>BF</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<label for="date">Date</label>
				<input type="date" name="date" id="date" class="form-control">
				<label for="time">Heure</label>
				<input type="time" name="heure" id="heure" class="form-control">
			</div>
		</div>
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary btn-lg" value="Chercher">
	</div>
</form>
<?php require("inc/footer.php"); ?>