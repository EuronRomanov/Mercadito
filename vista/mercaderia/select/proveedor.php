
<!--combobox productos para formulario-->
<?php 
require_once "../../../database/db.php";
require_once "../../../modelo/proveedor/crud.php";

$obj= new Proveedor(); 
$obj->setconection($newConection);

//if(isset($_POST['idProducto']) && !empty($_POST['idProducto'])){
    $proveedores = $obj->getSelectProveedorId($_POST['idProducto']);


foreach($proveedores as $proveedor){
 echo "<option value='".$proveedor['cod_proveedor']."'>".$proveedor['nombre']."</option>"; 
}
//}
?>



