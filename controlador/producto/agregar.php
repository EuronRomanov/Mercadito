<?php 
	
	require_once "../../database/db.php";
	require_once "../../modelo/producto/crud.php";

	$obj= new crud();
    $obj->setconection($newConection);
$portada=$_FILES['portada']['name'];
$cantidadVenta=$_POST['cantidadVenta']." ". $_POST['unidadesVenta'];
$cantidadCompra=$_POST['cantidadCompra']." ".$_POST['unidadesCompra'];
//echo count(explode(" ",$cantidadVenta));
//echo count(explode(" ",$cantidadCompra));

	$datos=array(
		$_POST['nombre'],   
        $_POST['descripcion'], 
        $_POST['promociones'],  
		 $_POST['cantidad'] , 
		$_POST['precio'],  
		$cantidadVenta,  
		 $_POST['iva'], 
		$_POST['costo'],  
		$cantidadCompra, 
		 $_POST['descuento'], 
		 $portada,  	
		 $_POST['proveedores'],		 	
		$_POST['categorias'],  
		$_FILES['portada']	);
		
	   
		
		$res=$obj->agregar($datos);
		
	
	//echo camposVacios($datos);
	echo $res;
	
 ?>