<?php
	require("inc/header.php");
	require("connexionbdd.php");
	$bdd = new Model(); 
?>
<div class="col-auto w-50 mx-auto text-left" id="content">
<?php
	if(isset($_GET['id'])){
		// recup trajet
?>
	<div class="border rounded-lg p-4">
		<div class="container">
			<div class="row">
				<div class="col">
					<h1>Trajet : Depart &raquo; Arrivée</h1>
					<h2 class="m-0">Date<br>
					<small>Heure</small></h2>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-auto">
					<img src="generic.png" width="200" height="200">
				</div>
				<div class="col">
					<h2>Nom Prénom</h2>
					<h4>0612345678</h4>
					<h5>Voiture</h5>
				</div>
			</div>
			<div class="row">
				<div class="col text-right">
					<a href="book.php?id" class="btn btn-primary btn-lg text-right">Réserver</a>
				</div>
			</div>
		</div>
	</div>
<?php
	}else{
		// exception pas d'id
	}
?>
<?php require("inc/footer.php"); ?>