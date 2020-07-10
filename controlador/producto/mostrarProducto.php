<?php 
	
	
	
	require_once "../../database/db.php";
	require_once "../../modelo/producto/crud.php";

$obj= new crud(); 
$obj->setconection($newConection);

	
	echo json_encode($obj->obtenDatosUpdate($_POST['idProduct']));

 ?>