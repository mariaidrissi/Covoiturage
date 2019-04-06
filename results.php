<?php require("inc/header.php"); ?>

<?php require("connexionbdd.php");
$bdd = new Model(); ?>


<div class="col-auto w-50 mx-auto text-center" id="content">
<h1>Trajet : BF > PG</h1>
<h2><?= $_POST['date'];?><br>
<small><?= $_POST['heure'];?></small></h2><br>
<?php
if(isset($_POST['depart'])) { 
	
$trajets = $bdd->getExceptionnelByDateAndHour($_POST['date'], $_POST['heure']);
foreach($trajets as $trajet) {
?>
<div class="result mx-auto my-2 p-2 border rounded-lg">
	<div class="container">
		<div class="row">
			<div class="col-auto p-0 my-auto">
				<img src="generic.png" width="80" height="80">
			</div>
			<div class="col-7 text-left my-auto">
				<h4><?php echo $trajet['depart']; ?> -> <?php echo $trajet['arrivee']; ?><br>
				<small class="text-muted"><?php echo $trajet['chauffeur']; ?></small></h4>
				<h6><?php echo $trajet['places']; ?> places restantes</h6>
			</div>
			<div class="col-auto p-0 m-auto">
				<h2><?php echo $trajet['heure']; ?></h2>
			</div>
		</div>
	</div>
</div>
<?php }}
?>
<?php require("inc/footer.php"); ?>