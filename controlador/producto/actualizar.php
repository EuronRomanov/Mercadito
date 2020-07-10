<?php
    require_once "../../database/db.php";
	require_once "../../modelo/producto/crud.php";

	$obj= new crud();
    $obj->setconection($newConection);
    
    $portada=$_FILES['portadaM']['name'];
    $cantidadVenta=$_POST['cantidadVentaM']." ". $_POST['unidadesVentaM'];
    $cantidadCompra=$_POST['cantidadCompraM']." ".$_POST['unidadesCompraM'];


	$datos=array(
        $_POST['idProducto'],
		$_POST['nombreM'],   
        $_POST['descripcionM'], 
        $_POST['promocionesM'],  
		$_POST['precioM'],  
		$cantidadVenta,  
		 $_POST['ivaM'], 
		$_POST['costoM'],  
		$cantidadCompra, 
		 $_POST['descuentoM'], 
		 $portada,  	
		 $_POST['proveedoresM'],		 	
		$_POST['categoriasM'],  
		$_FILES['portadaM']	);

	$dato=$obj->actualizar($datos);
     echo $dato;


?>