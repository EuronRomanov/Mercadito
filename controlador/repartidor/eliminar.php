<?php 
	
	require_once "../../database/db.php";
	require_once "../../modelo/repartidor/crud.php";

	$obj= new Repartidor();
	$obj->setconection($newConection);
	$dato=$obj->eliminar($_POST['idRepartidor']);
     echo $dato;

?>