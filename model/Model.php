<?php
	require_once File::build_path(array('config', 'Conf.php'));

	class Model{

		public static $pdo;

		public static function init(){
			$hostname = Conf::getHostName();
			$database_name = Conf::getDatabase();
			$login = Conf::getLogin();
			$password = Conf::getPassword();
			try{
				/*
				* Connexion à la base de données
				* Le dernier argument sert à ce que toutes les chaines de caractères
				* en entrée et sortie de MySQL soient dans le codage UTF-8
				*/
				self::$pdo = new PDO("mysql:host=$hostname; dbname=$database_name", $login, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

				/*
				* On active le mode affichage des
				* erreurs, et le lancement d'exception
				* en cas d'erreur
				*/
				self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch(PDOException $e){
				if(Conf::getDebug()){
					echo $e->getMessage(); //Affiche un message d'erreur
				}else {
					echo 'Une erreur est survenue <a href=""> retour à la page d\'accueil </a>';
				}
				die();
			}
		}

		public static function selectAll() {
			$table_name = static::$object;
			$class_name = 'Model'.ucfirst(static::$object);
			$rep = Model::$pdo->query("SELECT * FROM $table_name;");
			$rep->setFetchMode(PDO::FETCH_CLASS,$class_name);
			$tab = $rep->fetchAll();
			return $tab;
		}

		public static function select($primary_value){
			$table_name = static::$object;
			$class_name = 'Model'.ucfirst(static::$object);
			$primary_key = static::$primary;
			$sql = "SELECT * FROM $table_name WHERE $primary_key = :primval";
			$req_prep = Model::$pdo->prepare($sql);
			$values = array(
				"prival" => $primary_value,
			);
			$req_prep->execute($values);
			$req_prep->setFetchMode(PDO::FETCH_CLASS, $class_name);
			$tab = $req_prep->fetchAll();
			if(empty($tab)){
				return false;
			}
			return $tab[0];
		}

		public static function delete($primary){
			$table_name = static::$object;
			$class_name = 'Model'.ucfirst(static::$object);
			$primary_key = static::$primary;
			$sql = "DELETE FROM $table_name WHERE $primary_key = :primval";
			$req_prep = Model::$pdo->prepare($sql);
			$values = array(
				"primval" => $primary,
			);
			try{
				$req_prep->execute($values);
				return true;
			}catch(PDOException $e){
				return false;
			}
		}
	}

	Model::init();

?>