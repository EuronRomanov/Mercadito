<?php 
	
	require_once "../../database/db.php";
require_once "../../modelo/promocion/crud.php";

$obj= new Descuento(); 
$obj->setconection($newConection);

	$datos=array(
		strtoupper($_POST['nombreM']),   
		strtoupper($_POST['detalleM']),
		$_POST['descuentoM'], 
        $_POST['idPromocion'] 	
		);
		
	   		
		
		$res=$obj->actualizar($datos);
		
	
	//answer of operation
	echo $res;
	 
	 

	 
	


 ?>