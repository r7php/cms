<?php 
require 'environment.php';

$config = array();
define("BASE_URL","localhost:8081/feed");

// if(ENVIRONMENT == 'development'){
// 	define("BASE_URL","http://localhost/mvc(2)/");
// 	$config['dbname'] = 'estrutura_mvc';
// 	$config['host'] = 'localhost';
// 	$config['dbuser'] = 'root';
// 	$config['dbpass'] = '';
	

// }else{
// 	define("BASE_URL","http://meusite.com.br");
//     $config['dbname'] = 'estrutura_mvc';
// 	$config['host'] = 'localhost';
// 	$config['dbuser'] = 'root';
// 	$config['dbpass'] = '';
// }

global $db;


	$severName = "172.22.4.108";
	$DB_User  =  "linkedserver";
	$DB_Password = "Planejamento2022@@";
	$DB_Name = "BD_PROJETO_FIFA";

	$db = new PDO("sqlsrv:Server=$severName;Database=$DB_Name", "$DB_User", "$DB_Password");


  //$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);


// }
// catch(PDOException $e){
// 	echo "Erro:".$e->getMessage();
// 	die;
// }


?>