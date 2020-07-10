
<!--combobox productos para formulario-->
<?php 
require_once "../../../database/db.php";
require_once "../../../modelo/producto/crud.php";

$obj= new crud(); 
$obj->setconection($newConection);
$productos = $obj->getSelectProductos();


?>
 <!--select productos -->
<?php 
foreach($productos as $producto){
    ?>  
   
<?php echo "<option value='".$producto['cod_producto']."'>".$producto['nombre']."</option>"; ?>

<?php 
	}
?>
<!-- fin select-->
<script type="text/javascript">
    
  
$(document).ready(function(){
    
   
    $('#listaProductos').chosen();
   
   
    
});
</script>


