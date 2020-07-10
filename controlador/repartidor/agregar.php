<?php 
	require_once "../../database/db.php";
	require_once "../../modelo/repartidor/crud.php";
	
    $obj= new Repartidor(); 
    $obj->setconection($newConection);
$portada=$_FILES['portada']['name'];

$datos=array(
		$_POST['nombre'],   
        $_POST['cedula'], 
        $_POST['ruc'],  
		 $_POST['direccion'] ,  
		$_POST['celular'],  
		$_POST['email'],   
		 $_POST['transporte'], 
		$portada,  
		$_POST['contrato'], 	
		 $_POST['grupo'],  
		 $_POST['pass'],  	
		 $_FILES['portada']	);
		
	   
		   
		
		$res=$obj->agregar($datos);
		
	
	//respuesta de la operacion
	echo $res;
	 
	 

	 





 ?>