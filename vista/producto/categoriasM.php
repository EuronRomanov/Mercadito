
<!--script src="../../js/tail.select-full.min.js"></script-->

<?php 
require_once "../../database/db.php";
require_once "../../database/getConection.php";


$sql="SELECT cod_categoria, nombre FROM categoria";

$stmt = $mbd->prepare($sql);

$stmt->execute();
$categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>
 <select class="form-control chosen"   id="categoriasM" name="categoriasM">
<?php 
foreach($categorias as  $categoria){
    ?>  
   
<?php echo "<option value='". $categoria['cod_categoria']."'>". $categoria['nombre']."</option>"; ?>

<?php 
	}
?>
</select >


<script>

   /* tail.select("#categoriasM", {
    search: true,
    width: 400
}); */
//$("#categoriasM").chosen();
$(document).ready(function(){
            $("#categoriasM").chosen();
       });
</script>
