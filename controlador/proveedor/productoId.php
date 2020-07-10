<?php

require_once "../../database/db.php";
require_once "../../modelo/proveedor/crud.php";
include_once "../../modelo/producto/crud.php";
$obj= new Proveedor(); 
$obj->setconection($newConection);
$productos=(array)$obj->selectProductosId($_POST['idProveedor']);
//echo json_encode($obj->selectProductosId($_POST['idProveedor']));
$proceso=new crud();

?>

<thead>
  <tr>
    <th scope="col">Producto</th>
    <th scope="col">Costo</th>
    <th scope="col">Unidad</th>
    <th scope="col">Descuento(%)</th>
  </tr>
</thead>
<tbody>

<?php
foreach($productos as $producto )
{
	
 
    
       
        echo "<tr>".
        "<th>".$producto['nombre']."</th>".
        "<td>".$producto['costo']."</td>".
        "<td>".$proceso->convertUnidad($producto['unidad'])."</td>".
        "<td>".$producto['descuento']."</td>".
        "</tr>";
	
}
?>

</tbody>