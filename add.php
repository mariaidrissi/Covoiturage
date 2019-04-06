<?php require("inc/header.php"); ?>
<h1>Ajouter un covoiturage</h1>
<form action="results.php" method="post">
	<div class="form-group">
		<div class="row">
			<div class="col">
				<label for="depart">Départ</label>
				<select name="depart" id="depart" class="form-control">
					<option>BF</option>
					<option>PG</option>
				</select>
			</div>
			<div class="col">
				<label for="arrivee">Arrivée</label>
				<select name="arrivee" id="arrivee" class="form-control">
					<option>PG</option>
					<option>BF</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<label for="date">Date</label>
				<input type="date" name="date" id="date" class="form-control">
				<label for="time">Heure</label>
				<input type="time" name="heure" id="heure" class="form-control">
        <label for="nb_places">Nombre de places</label>
				<input type="int" name="nb_places" id="nb_places" class="form-control">
        <label for="recurrence">Trajet récurrent ?</label>
				<select name="recurrence" id="nb_places" class="form-control">
			</div>
		</div>
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary btn-lg" value="Proposer">
	</div>
</form>
<?php require("inc/footer.php"); ?>