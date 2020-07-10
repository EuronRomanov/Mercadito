<?php 
	
	require_once "../../database/db.php";
	require_once "../../modelo/promocion/crud.php";

	$obj= new Descuento();
	$obj->setconection($newConection);
	$dato=$obj->eliminar($_POST['idPromocion']);
     echo $dato;

?>