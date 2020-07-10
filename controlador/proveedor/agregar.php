<?php 
	
	require_once "../../database/db.php";
require_once "../../modelo/proveedor/crud.php";

$obj= new Proveedor(); 
$obj->setconection($newConection);


$telefono=$_POST['area']."". $_POST['telefono'];



	$datos=array(
		strtoupper($_POST['nombre']),   
		$_POST['ruc'], 
        $telefono,   
		$_POST['celular'] ,
		$_POST['email'], 
		strtolower ($_POST['direccion']),  
		strtoupper($_POST['nombreR']),  
		$_POST['sitio']  	
		);
		
	   		
		
		$res=$obj->agregar($datos);
		
	
	//answer of operation
	echo $res;
	 
	 

	 
	


 ?>