
<!--combobox productos para formulario-->
<?php 
require_once "../../../database/db.php";
require_once "../../../modelo/factura/crud.php";

$obj= new Factura(); 
$obj->setconection($newConection);
$facturas = $obj->selectAll();


?>
 <!--select productos -->
<?php 
foreach($facturas as $factura){
    ?>  
   
<?php echo "<option value='".$factura['cod_factura']."'>".$factura['cod_factura']."</option>"; ?>

<?php 
	}
?>
<!-- fin select-->
<script type="text/javascript">
    
  
$(document).ready(function(){
    
   
    $('#listaFacturas').chosen();
   
   
    
});
</script>


