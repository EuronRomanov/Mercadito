

<?php 
require_once "../../database/db.php";
require_once "../../database/getConection.php";


$sql="SELECT cod_promocion,nombre,descuento FROM promocion";

$stmt = $mbd->prepare($sql);

$stmt->execute();
$promociones = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

   
<?php 
foreach($promociones as $promocion){
    ?>  
   
<?php echo "<option value='".$promocion['cod_promocion']."'>".$promocion['nombre']." -     ".$promocion['descuento']  ."% de descuento</option>"; ?>

<?php 
	}
?>





