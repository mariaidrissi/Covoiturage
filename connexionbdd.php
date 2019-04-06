<?php class Model {
	private $db;

	public function __construct() {
		try {
			$this->db = new PDO('pgsql:host=localhost:8889;dbname=covoit', 'root', '');
		} catch(PDOException $e) {
			die('<p>La connexion à la base de données a échoué. Erreur['.$e->getCode().'] : ' . $e->getMessage().'</p>');
		}

		$this->db->query('SET NAMES utf8');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "ça marche gros";
    }

	public function insererUser($id) {
		$sql = 'INSERT INTO Users (id) VALUES (:id)';
		$req = $this->db->prepare($sql);
		$req->bindParam(':id', $id);
		if ($req->execute() == TRUE) {
			echo "Nouvel utilisateur ajouté";
		} else {
			echo "Error: " . $sql . "<br>" . $this->db->error;
		}
	}

	public function ajouterTrajet($arrivee, $depart, $nb_places, $heure) {
	  $sql = 'INSERT INTO Trajet (arrivee,depart,nb_places,heure) VALUES (:arrivee,:depart,:nb_places,:heure)';
	  $req = $this->db->prepare($sql);
	  $req->bindParam(':arrivee', $arrivee);
	  $req->bindParam(':depart', $depart);
	  $req->bindParam(':nb_places', $nb_places);
	  $req->bindParam(':heure', $heure);

	  if ($req->execute() == TRUE) {
	    echo "Nouveau trajet ajouté";
	  } else {
	    echo "Error: " . $sql . "<br>" . $this->db->error;
	  }
	}

}
$bdd = new Model();
echo "lol";
$bdd->insererUser("lol");
$bdd->ajouterTrajet(BF,PG, 3, 15:30);
?>
