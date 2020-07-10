<?php session_start();?>
<?php 



require_once "../../database/db.php";
require_once "../../modelo/mercaderia/crud.php";

$obj= new Mercaderia(); 
$obj->setconection($newConection);
$mercaderias = $obj->selectAll();
?>


<div>
	<table class="table table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>
				<td>Producto</td>
				<td>Llegada</td>
				<td>Mal estado</td>
				<td>Buen estado</td>
				<td>Proveedor</td>
				<td>Eliminar</td>
				
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
				<td>Producto</td>
				<td>Llegada</td>
				<td>Mal estado</td>
				<td>Buen estado</td>
				<td>Proveedor</td>
				<td>Eliminar</td>
				
			</tr>
		</tfoot>
		<tbody >
			<?php 
			foreach($mercaderias as $mercaderia){
				?>
				<tr >
					<td><?php echo $mercaderia['producto']; ?></td>
					<td><?php echo $mercaderia['fecha'];?></td>
					<td><?php echo $mercaderia['mal']; ?></td>
					<td><?php echo $mercaderia['bien'];?></td>
					<td><?php echo $mercaderia['proveedor'];?></td>
					
					<td style="text-align: center;">
						<span class="btn btn-danger btn-sm" onclick="eliminarDatos('<?php echo $mercaderia['cod_prov_prod'] ?>')">
							<span class="fa fa-trash"></span>
						</span>
					</td>
					
					
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
</div>

<script type="text/javascript">
	
	$(document).ready(function() {
		$('#iddatatable').DataTable();
	} );
</script>