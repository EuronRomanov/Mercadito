<?php 
	
	require_once "../../database/db.php";
    require_once "../../modelo/promocion/crud.php";

$obj= new Descuento(); 
$obj->setconection($newConection);


	$datos=array(
		strtoupper($_POST['nombre']),   
		strtoupper($_POST['detalle']),
		$_POST['descuento']
		);
		
	   		
		
		$res=$obj->agregar($datos);
		
	
	//answer of operation
	echo $res;
	 
	 

	 
	


 ?>