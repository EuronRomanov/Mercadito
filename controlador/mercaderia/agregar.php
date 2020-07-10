<?php 
	
	require_once "../../database/db.php";
require_once "../../modelo/mercaderia/crud.php";

$obj= new Mercaderia(); 
$obj->setconection($newConection);






	$datos=array(
		$_POST['bien'],   
		$_POST['mal'], 
        $_POST['listaProveedores'],
		$_POST['listaProductos'] 
		);
		
	   		
		
		$res=$obj->agregar($datos);
		
	
	//answer of operation
	echo $res;
	 
	 

	 
	


 ?>