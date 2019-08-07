<?php

	require_once File::build_path(array('model', 'ModelA_propos.php'));

	class ControllerA_propos {

		protected static $object = 'a_propos';

		public static function readAll(){
			$view = 'list';
			$pagetitle = 'À propos';
			require File::build_path(array('view', 'view.php'));//"redirige" vers la vue
		}

	}

?>