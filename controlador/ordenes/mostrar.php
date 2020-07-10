<?php 
	
	
	
	require_once "../../database/db.php";
	require_once "../../modelo/ordenes/crud.php";

    $obj= new Orden(); 
    $obj->setconection($newConection);

	
	echo json_encode($obj->obtenDatosUpdate($_POST['idOrden']));

 ?>