<?php

 //Conectar com banco de dados!
 define('HOST','localhost');
 define('USER','root');
 define('PASSWORD','');
 define('DATABASE','eco');
 
	class MySql{

		private static $pdo;

		public static function conectar(){
			if(self::$pdo == null){
				try{
				self::$pdo = new PDO('mysql:HOST='. HOST .';dbname='.DATABASE,USER,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
				self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				}catch(Exception $e){
					echo '<h2>Erro ao conectar no banco de dados</h2>';
				}
			}

			return self::$pdo;
		}

	}
?>