<?php 
require 'environment.php';

$config = array();
define("BASE_URL","localhost:8081/feed");
require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();
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

	$severName = getenv('DB_HOST');
	$DB_Name = getenv('DB_DATABASE');
	$DB_User = getenv('DB_USERNAME');
	$DB_Password = getenv('DB_PASSWORD');

	

	$db = new PDO("sqlsrv:Server=$severName;Database=$DB_Name", "$DB_User", "$DB_Password");


  //$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);


// }
// catch(PDOException $e){
// 	echo "Erro:".$e->getMessage();
// 	die;
// }


?>