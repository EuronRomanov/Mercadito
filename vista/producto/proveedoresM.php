
<!--script src="../../js/tail.select-full.min.js"></script-->
<?php 
require_once "../../database/db.php";
require_once "../../database/getConection.php";


$sql="SELECT cod_proveedor,nombre FROM proveedor";

$stmt = $mbd->prepare($sql);

$stmt->execute();
$proveedores = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>
 <!--select class="form-control"  id="proveedores" name="proveedores" -->
<?php 
foreach($proveedores as $proveedor){
    ?>  
   
<?php echo "<option value='".$proveedor['cod_proveedor']."'>".$proveedor['nombre']."</option>"; ?>

<?php 
	}
?>
<!--/select-->

<script>
   /* tail.select("#proveedores", {
    search: true,
    width: 400
}); */

</script>
