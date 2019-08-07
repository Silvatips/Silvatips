<?php



	require_once File::build_path(array('model', 'Model.php'));







	class ModelNews extends Model{

		private $titre;
		private $contenu;
		private $id;

		protected static $object = 'news';
		protected static $primary = 'id';
		
		
		//Un getter

		public function getTitre() {
			return $this->titre;
		}

		//Un setter
		public function setTitre($titre2) {
			$this->titre = $titre2;
		}

		public function getContenu() {
			return $this->contenu;
		}

		public function setContenu($contenu2) {
			$this->contenu = $contenu2;
		}

		public function getId() {
			return $this->id;
		}

		public function setId($id2) {
			$this->id = $id2;
		}


		//Un constructeur

		public function __construct($t = NULL, $c = NULL, $i = NULL) {

			if(!is_null($t) && !is_null($c) && !is_null($i)){
				$this->titre = $t;
				$this->contenu = $c;
				$this->id = $i;
			}
		}

		public static function getNewsById($id){
			$sql = "SELECT * FROM news WHERE id=:nom_tag";

			//Préparation de la requête
			$req_prep = Model::$pdo->prepare($sql);

			$values = array(
				"nom_tag" => $id,
				//nomdutag => valeur, ...
			);

			//On donne les valeurs et on exécute la requête
			$req_prep->execute($values);

			//On récupère les résultats comme précédemment
			$req_prep->setFetchMode(PDO::FETCH_MODE, 'ModelNews');
			$tab_news = $req_prep->fetchAll();

			//Attention, s'il n'y a pas de résultats, on renvoie false
			if(empty($tab_news)) {
				return false;
			}

			return $tab_news[0];
		}

		public function save(){

        	$sql = "INSERT INTO news (id, titre, contenu) VALUES (:id, :titre, :contenu)";

			//Préparation de la requête
          	$req_prep = Model::$pdo->prepare($sql);
          	$values = array(
            	"id" => $this->id,
            	"titre" => $this->titre,
            	"contenu" => $this->contenu
          	);

          	//On donne les valeurs et on exécute la requête
          	try{
            	$req_prep->execute($values);
            	return true;
          	}catch(PDOException $e){
            	return false;
          	}
        }

        public function update(){

          	$sql = "UPDATE news SET titre = :titre, contenu = :contenu WHERE id = :id";
         	$req_prep = Model::$pdo->prepare($sql);
          	$values = array(
            	"id" => $this->id,
            	"titre" => $this->titre,
            	"contenu" => $this->contenu
          	);

          	try{
            	$req_prep->execute($values);
            	return true;
          	}catch(PDOException $e){
            	return false;
          	}
        }
	}
?>