<?php 
	
	
	
	require_once "../../database/db.php";
	require_once "../../modelo/Repartidor/crud.php";

$obj= new Repartidor(); 
$obj->setconection($newConection);

	
	echo json_encode($obj->obtenDatosUpdate($_POST['idRepartidor']));

 ?>