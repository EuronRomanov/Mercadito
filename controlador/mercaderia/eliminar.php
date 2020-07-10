<?php 
	
	require_once "../../database/db.php";
	require_once "../../modelo/mercaderia/crud.php";

	$obj= new Mercaderia();
	$obj->setconection($newConection);
	$dato=$obj->eliminar($_POST['idMercaderia']);
     echo $dato;

?>