<?php
	class Conf{

		//Variables

		static private $database = array(
		    //Voltis: Je l'ai mis a jour
			'hostname' => 'localhost',
			'database' => 'id10168254_mtips1',
			'login' => 'id10168254_mtips1',
			'password' => 'Mtipscestsuper66');

		//La variable debug est un boolean
		static private $debug = True;


		//Getters & Setters

		static public function getDebug(){
			return self::$debug;
		}

		static public function getLogin(){
			return self::$database['login'];
		}

		static public function getHostName(){
			return self::$database['hostname'];
		}

		static public function getDataBase(){
			return self::$database['database'];
		}

		static public function getPassword(){
			return self::$database['password'];
		}
	}

?>