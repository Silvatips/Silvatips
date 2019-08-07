<?php

	require_once File::build_path(array('model', 'ModelNews.php'));//Chargement du modèle

	class ControllerNews{

		protected static $object = 'news';

		public static function readAll(){

			$tab_n = ModelNews::selectAll();//appel au modèle pour gerer la BD
			//$controller = 'news';
			$view = 'list';
			$pagetitle = 'Liste des news';
			require File::build_path(array('view', 'view.php'));//"redirige" vers la vue
		}

		public static function read(){

			$n = ModelNews::select($_GET['id']);
			if ($n) {
				//$controller = 'news';
				$view = 'detail';
				$pagetitle = 'Détail news ' . $_GET['id'];
				require File::build_path(array('view', 'view.php'));
			} else {
				//$controller = 'news';
				$view = 'errorIdentifiant';
				$pagetitle = 'Identifiant inconnu';
				require File::build_path(array('view', 'view.php'));
			}
		}


		public static function create(){

			//$controller = 'news';
			$view = 'create';
			$pagetitle = 'Création news';
			require File::build_path(array('view', 'view.php'));
		}

		public static function created(){
			
			$news = new ModelNews($_GET['titre'], $_GET['contenu'], $_GET['id']);
			if ($news->save()){
				$tab_n = ModelNews::selectAll();
				//$controller = 'news';
				$view = 'created';
				$pagetitle = 'News Créée';
				require File::build_path(array('view', 'view.php'));
			} else {
				//$controller = 'news';
				$view = 'errorInsertion';
				$pagetitle = 'News déjà existante';
				require File::build_path(array('view', 'view.php'));
			}
		}

		public static function delete(){

			if(ModelNews::delete($_GET['id'])){
				$id = $_GET['id'];
				$tab_n = ModelNews::selectAll();
				//$controller = 'news';
				$view = 'deleted';
				$pagetitle = 'News Supprimée';
				require File::build_path(array('view', 'view.php'));
			} else {
				//$controller = 'news';
				$view = 'errorSupression';
				$pagetitle = 'News inexistante';
				require File::build_path(array('view', 'view.php'));
			}
		}

		public static function update(){
		
			$n = ModelNews::getNewsById($_GET['id']);
			if($n){
				//$controller = 'voiture';
				$view = 'update';
				$pagetitle = 'Update news';
				require File::build_path(array('view', 'view.php'));
			}else{
				//$controller = 'voiture';
				$view = 'errorIdentifiant';
				$pagetitle = 'Identifiant inconnu';
				require File::build_path(array('view', 'view.php'));
			}

		}

		public static function updated(){

			$news = new ModelNews($_GET['titre'], $_GET['contenu'], $_GET['id']);
			if($news->update()){
				$id = $_GET['id'];
				$tab_n = ModelNews::selectAll();
				//$controller = 'news';
				$view = 'updated';
				$pagetitle = 'News Updated';
				require File::build_path(array('view', 'view.php'));
			}else{
				//$controller = 'news';
				$view = 'errorUpdate';
				$pagetitle = "News inexistante";
				require File::build_path(array('view', 'view.php'));
			}

		}

		public static function error(){

			//$controller = 'news';
			$view = 'error';
			$pagetitle = 'Erreur';
			require File::build_path(array('view', 'view.php'));
		}

	}

?>