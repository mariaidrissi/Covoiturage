<?php require("inc/header.php"); ?>

<?php require("connexionbdd.php");
$bdd = new Model(); ?>


<div class="col-auto w-50 mx-auto text-left results" id="content">
<h1>Passager</h1>
<hr>
<a href="trajet.php?id=<?php echo $trajet['id']; ?>">
<div class="result mx-auto my-2 p-2 border rounded-lg">
	<div class="container">
		<div class="row">
			<div class="col-auto p-0 my-auto">
				<img src="generic.png" width="80" height="80">
			</div>
			<div class="col-7 text-left my-auto">
				<h4>Départ &raquo; Arrivée<br>
				<small class="text-muted">Chauffeur</small></h4>
				<h6>2 places restantes</h6>
			</div>
			<div class="col-auto p-0 m-auto">
				<h2>Heure</h2>
			</div>
		</div>
	</div>
</div>
</a>
<a href="trajet.php?id=<?php echo $trajet['id']; ?>">
<div class="result mx-auto my-2 p-2 border rounded-lg">
	<div class="container">
		<div class="row">
			<div class="col-auto p-0 my-auto">
				<img src="generic.png" width="80" height="80">
			</div>
			<div class="col-7 text-left my-auto">
				<h4>Départ &raquo; Arrivée<br>
				<small class="text-muted">Chauffeur</small></h4>
				<h6>2 places restantes</h6>
			</div>
			<div class="col-auto p-0 m-auto">
				<h2>Heure</h2>
			</div>
		</div>
	</div>
</div>
</a>
<h1 class="mt-4">Chauffeur</h1>
<hr>
<a href="trajet.php?id=<?php echo $trajet['id']; ?>">
<div class="result mx-auto my-2 p-2 border rounded-lg">
	<div class="container">
		<div class="row">
			<div class="col-auto p-0 my-auto">
				<img src="generic.png" width="80" height="80">
			</div>
			<div class="col-7 text-left my-auto">
				<h4>Départ &raquo; Arrivée<br></h4>
				<h5>Passagers</h5>
				<ul>
					<li>Nom Prénom - Téléphone</li>
					<li>Nom Prénom - Téléphone</li>
				</ul>
				<h6>2 places restantes</h6>
			</div>
			<div class="col-auto p-0 m-auto">
				<h2>Heure</h2>
			</div>
		</div>
	</div>
</div>
</a>
<?php require("inc/footer.php"); ?>