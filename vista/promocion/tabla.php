<?php session_start();?>
<?php 



require_once "../../database/db.php";
require_once "../../modelo/promocion/crud.php";

$obj= new Descuento(); 
$obj->setconection($newConection);
$descuentos = $obj->selectAll();
?>


<div>
	<table class="table table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>
				<td>Nombre</td>
				<td>Descripción</td>
				<td>Descuento</td>
				<td>Eliminar</td>
				<td>Editar</td>
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
				<td>Nombre</td>
				<td>Descripción</td>
				<td>Descuenton</td>
				<td>Eliminar</td>
				<td>Editar</td>
			</tr>
		</tfoot>
		<tbody >
			<?php 
			foreach($descuentos as $descuento){
				?>
				<tr >
					<td><?php echo $descuento['nombre']; ?></td>
					<td><?php echo $descuento['detalle'];?></td>
					<td><?php echo $descuento['descuento']." %";?></td>
					
					
					<td style="text-align: center;">
						<span class="btn btn-danger btn-sm" onclick="eliminarDatos('<?php echo $descuento['cod_promocion'] ?>')">
							<span class="fa fa-trash"></span>
						</span>
					</td>
					<td style="text-align: center;">
						<span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $descuento['cod_promocion']?>');">
							<span class="fa fa-pencil-square-o"></span>
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