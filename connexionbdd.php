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

	

}
$bdd = new Model();
echo "lol";
$bdd->insererUser("lol");
?>