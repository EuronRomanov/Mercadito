<?php 
	
	
	
	require_once "../../database/db.php";
	require_once "../../modelo/promocion/crud.php";

    $obj= new Descuento(); 
    $obj->setconection($newConection);

	
	echo json_encode($obj->obtenDatosUpdate($_POST['idPromocion']));

 ?>