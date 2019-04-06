<?php class Model {
	private $db;

	public function __construct() {
		try {
			$this->db = new PDO('mysql:host=sql7.freemysqlhosting.net:3306;dbname=sql7286907', 'sql7286907', 'QnaHJIg95T');
		} catch(PDOException $e) {
			die('<p>La connexion à la base de données a échoué. Erreur['.$e->getCode().'] : ' . $e->getMessage().'</p>');
		}

		$this->db->query('SET NAMES utf8');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "ça marche gros";
    }
    
}
$bdd = new Model();
?>