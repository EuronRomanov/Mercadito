<?php 
	
	require_once "../../database/db.php";
	require_once "../../modelo/ordenes/crud.php";

	$obj= new Orden();
	$obj->setconection($newConection);
	$dato=$obj->eliminar($_POST['idOrden']);
     echo $dato;

?>