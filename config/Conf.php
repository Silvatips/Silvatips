<?php
	class Conf{

		//Variables

		static private $database = array(
			'hostname' => 'localhost',
			'database' => 'silvatips',
			'login' => 'root',
			'password' => '');

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