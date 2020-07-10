<?php 
	
	require_once "../../database/db.php";
    require_once "../../modelo/categoria/crud.php";

$obj= new Categoria(); 
$obj->setconection($newConection);


	$datos=array(
		strtoupper($_POST['nombre']),   
		strtoupper($_POST['descripcion']) 
		);
		
	   		
		
		$res=$obj->agregar($datos);
		
	
	//answer of operation
	echo $res;
	 
	 

	 
	


 ?>