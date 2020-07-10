<?php 
	
	require_once "../../database/db.php";
	require_once "../../modelo/producto/crud.php";

	$obj= new crud();
	$obj->setconection($newConection);
	$dato=$obj->eliminar($_POST['idProducto']);
     echo $dato;

?>