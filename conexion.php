<?php 
$host="mysql:host=localhost";
$db="dbname=datosbd";
$user="root";
$pass="";
$tabla="";

	try {
     $conex= new PDO($host.";".$db,$user,$pass);
     $conex->exec("SET CHARACTER SET utf8");
	echo "Conexion exitosa";
	} catch (Exception $e) {
	 echo "hubo un error";

	}






 ?>