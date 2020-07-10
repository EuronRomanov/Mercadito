
<!--combobox productos para formulario-->
<?php 
require_once "../../../database/db.php";
require_once "../../../modelo/repartidor/crud.php";

$objE= new Repartidor(); 
$objE->setconection($newConection);
$repartidores = $objE->selectAll();


?>
 <!--select productos -->
<?php 
foreach($repartidores as $repartidor){
    ?>  
   
<?php echo "<option value='".$repartidor['cod_repartidor']."'>".$repartidor['nombre_apellidos']."</option>"; ?>

<?php 
	}
?>
<!-- fin select-->
<script type="text/javascript">
    
  
$(document).ready(function(){
    
   
    $('#listaRepartidores').chosen();
   
   
    
});
</script>


