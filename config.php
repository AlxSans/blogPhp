<?php

$dbHost = 'localhost'; //Guardando la base de datos en la variable dbHost.
$dbName = 'cursophp'; //Guardando la tabla en la variable $dbName.
$dbUser = 'root'; //Guarando el usuario de la base de datos en la variable $dbUser.
$dbPass = ''; //Guardando el password del usuario en la variable $dbPass.

try{ //Agregando una excepción para mostrar un mnsj determinado si falla la conexión con la BD.

	$pdo=new PDO("mysql:host=$dbHost;dbname=$dbName",$dbUser,$dbPass); //Declarando la conexión y guardandola en la variable $pdo.
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //en caso de error en la conexión.

}catch(Exception $e){
	echo $e->getMessage(); //Mostrando el mensaje de error.
}



?>
