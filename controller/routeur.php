<?php

	if(isset($_GET["controller"])){

		$controller = $_GET["controller"];

	}else{

		$controller = "a_propos";

	}

	$controller_class = "Controller".ucfirst($controller);



	require_once File::build_path(array('controller', "$controller_class.php"));



	if(isset($_GET["action"])){

		if(in_array($_GET["action"], get_class_methods("$controller_class"))){

			$action = $_GET["action"];//On récupère l'action passée dans l'URL

		}

		else{

			$action = "error";

		}

	}else{

		$action = "readAll";

	}

	$controller_class::$action();//Appel de la méthode statique $action de ControllerNews

	

?>	