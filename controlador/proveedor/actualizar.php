<?php 
	
	require_once "../../database/db.php";
require_once "../../modelo/proveedor/crud.php";

$obj= new Proveedor(); 
$obj->setconection($newConection);


$telefono=$_POST['areaM']."". $_POST['telefonoM'];



	$datos=array(
		strtoupper($_POST['nombreM']),   
		$_POST['rucM'], 
        $telefono,   
		$_POST['celularM'] ,
		$_POST['emailM'], 
		strtolower ($_POST['direccionM']),  
		strtoupper($_POST['nombreRM']),  
		$_POST['sitioM'],
		$_POST['idProveedor'] 	
		);
		
	   		
		
		$res=$obj->actualizar($datos);
		
	
	//answer of operation
	echo $res;
	 
	 

	 
	


 ?>