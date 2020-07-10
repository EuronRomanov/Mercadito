<?php 
	
	require_once "../../database/db.php";
	require_once "../../modelo/proveedor/crud.php";

	$obj= new Proveedor();
	$obj->setconection($newConection);
	$dato=$obj->eliminar($_POST['idProveedor']);
     echo $dato;

?>