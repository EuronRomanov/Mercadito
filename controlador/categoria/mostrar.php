<?php 
	
	
	
	require_once "../../database/db.php";
	require_once "../../modelo/categoria/crud.php";

    $obj= new Categoria(); 
    $obj->setconection($newConection);

	
	echo json_encode($obj->obtenDatosUpdate($_POST['idProduct']));

 ?>