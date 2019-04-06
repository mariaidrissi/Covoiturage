<?php include('connexionbdd.php');
$bdd = new Model();
print_r($_POST);
$bdd->ajouterTrajetExceptionnel(
    3,
    $_POST['arrivee'],
    $_POST['depart'],
    $_POST['nb_places'],
    $_POST['heureExc'],
    $_POST['dateExc'],
    'lol'
);