<?php 
	require_once "../../database/db.php";
	require_once "../../modelo/repartidor/crud.php";
	
    $obj= new Repartidor(); 
    $obj->setconection($newConection);
$portada=$_FILES['portadaM']['name'];

$datos=array(
		$_POST['nombreM'],   
        $_POST['cedulaM'], 
        $_POST['rucM'],  
		 $_POST['direccionM'] ,  
		$_POST['celularM'],  
		$_POST['emailM'],   
		 $_POST['transporteM'], 
		$portada,  
		$_POST['contratoM'], 	
		 $_POST['grupoM'],  
		 $_POST['passM'],
		 $_POST['habilitadoM'],  
		 $_POST['idRepartidor'], 	
		 $_FILES['portadaM']
		);
		
	   
		   
		
		$res=$obj->actualizar($datos);
		
	
	//respuesta de la operacion
	echo  $res;
	 
	 

	 





 ?>