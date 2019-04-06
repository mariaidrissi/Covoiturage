<?php require("inc/header.php"); ?>
<div class="col-auto w-50 mx-auto text-center" id="content">
<h1>Ajouter un covoiturage</h1>
<form action="results.php" method="post">
	<div class="form-group">
		<div class="row">
			<div class="col">
				<label for="depart" class="my-2">Départ</label>
				<select name="depart" id="depart" class="form-control">
					<option>BF</option>
					<option>PG</option>
				</select>
			</div>
			<div class="col">
				<label for="arrivee" class="my-2">Arrivée</label>
				<select name="arrivee" id="arrivee" class="form-control">
					<option value="pg">PG</option>
					<option>BF</option>
				</select>
			</div>
		</div>
		<div class="btn-toolbar my-4" role="choix">
			<div class="btn-group mr-2 mx-auto" role="group" aria-label="First group">
				<button type="button" class="btn btn-secondary">Exceptionnel</button>
				<button type="button" class="btn btn-secondary">Récurrent</button>
			</div>
		</div>
		<div class="row">
			<div class="col">
			    <label for="recurrence" class="my-2">Récurrence</label>
				<select name="recurrence" id="nb_places" class="form-control">
					<option value="quoti">Quotidien</option>
					<option value="hebdo">Hebdomadaire</option>
					<option value="bi">Bihebdomadaire</option>
				</select>
				<label for="date" class="my-2">Date</label>
				<input type="date" name="date" id="date" class="form-control">
				<label for="time" class="my-2">Heure</label>
				<input type="time" name="heure" id="heure" class="form-control">
       			<label for="nb_places" class="my-2">Nombre de places</label>
				<input type="int" name="nb_places" id="nb_places" class="form-control">
			</div>
		</div>
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-primary btn-lg my-4" value="Proposer">
	</div>
</form>
<?php require("inc/footer.php"); ?>
