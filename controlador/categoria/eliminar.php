<?php 
	
	require_once "../../database/db.php";
	require_once "../../modelo/categoria/crud.php";

	$obj= new Categoria();
	$obj->setconection($newConection);
	$dato=$obj->eliminar($_POST['idProveedor']);
     echo $dato;

?>