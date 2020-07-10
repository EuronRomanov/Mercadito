
<script src="../../js/tail.select-full.min.js"></script>
<?php 
require_once "../../database/db.php";
require_once "../../database/getConection.php";


$sql="SELECT cod_promocion,nombre,descuento FROM promocion";

$stmt = $mbd->prepare($sql);

$stmt->execute();
$promociones = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>
 <select   id="promociones" name="promociones">
   
<?php 
foreach($promociones as $promocion){
    ?>  
   
<?php echo "<option value='".sinPromocion($promocion['cod_promocion']).">".$promocion['nombre']." -     ".$promocion['descuento']  ."% de descuento</option>"; ?>

<?php 
	}
?>
</select>

<script>
    tail.select("#promociones", {
    search: true,
    width: 400
}); 
</script>
<?php 
function sinPromocion($codigo){
    if ($codigo == 3) {
        return "$codigo"."' selected";
    } else {
        return "$codigo"."'";
    }
    
}
?>

