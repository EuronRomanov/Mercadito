<?php 
	
	require_once "../../database/db.php";
require_once "../../modelo/categoria/crud.php";

$obj= new Categoria(); 
$obj->setconection($newConection);

	$datos=array(
		strtoupper($_POST['nombreM']),   
		strtoupper($_POST['descripcionM']), 
        $_POST['idCategoria'] 	
		);
		
	   		
		
		$res=$obj->actualizar($datos);
		
	
	//answer of operation
	echo $res;
	 
	 

	 
	


 ?>