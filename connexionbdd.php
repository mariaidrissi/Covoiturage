<?php class Model {
	private $db;

	public function __construct() {
		try {
			$this->db = new PDO('pgsql:host=localhost;dbname=gova', 'youssef', 'labasedetest');
		} catch(PDOException $e) {
			die('<p>La connexion à la base de données a échoué. Erreur['.$e->getCode().'] : ' . $e->getMessage().'</p>');
		}

		$this->db->query('SET NAMES utf8');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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

	public function ajouterTrajetExceptionnel($id, $arrivee, $depart, $nb_places, $heure, $jour, $chauffeur) {
	  $sql = 'INSERT INTO Exceptionnel VALUES (:id, :depart, :arrivee, :places, :heure, :jour, :chauffeur)';
	  $req = $this->db->prepare($sql);
	  $req->bindParam(':id', $id);
	  $req->bindParam(':arrivee', $arrivee);
	  $req->bindParam(':depart', $depart);
	  $req->bindParam(':places', $nb_places);
	  $req->bindParam(':heure', $heure);
	  $req->bindParam(':jour', $jour);
	  $req->bindParam(':chauffeur', $chauffeur);

	  if ($req->execute() == TRUE) {
	    echo "Nouveau trajet ajouté";
	  } else {
	    echo "Error: " . $sql . "<br>" . $this->db->error;
	  }
	}

	public function getAllTrajetsExceptionnel() {
		$sql = 'SELECT * FROM Exceptionnel';
		$req = $this->db->prepare($sql);
		$req->execute();
		$req = $req->fetchAll();
		return $req;
	}

	public function getExceptionnelByDate($jour) {
		$sql = 'SELECT * FROM Exceptionnel WHERE jour=:jour';
		$req = $this->db->prepare($sql);
		$req->bindParam(':jour', $jour);
		$req->execute();
		$req = $req->fetchAll();
		return $req;
	}

	public function getExceptionnelByDateAndHour($jour, $heure) {
		$trajets = $this->getExceptionnelByDate($jour);
		$res = array();

		foreach($trajets as $trajet) {
			if($trajet['heure'] >= $heure) {
				array_push($res, $trajet);
			}
		}

		return $res;
	}

}
?>
