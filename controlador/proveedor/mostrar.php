<?php 
	
	
	
	require_once "../../database/db.php";
	require_once "../../modelo/proveedor/crud.php";

    $obj= new Proveedor(); 
    $obj->setconection($newConection);

	
	echo json_encode($obj->obtenDatosUpdate($_POST['idProduct']));

 ?>