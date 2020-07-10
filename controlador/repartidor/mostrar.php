<?php 
	
	
	
	require_once "../../database/db.php";
	require_once "../../modelo/repartidor/crud.php";

$obj= new Repartidor(); 
$obj->setconection($newConection);

	
	echo json_encode($obj->obtenDatos($_POST['idRepartidor']));

 ?>