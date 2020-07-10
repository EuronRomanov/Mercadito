<?php session_start();?>
<?php 



require_once "../../database/db.php";
require_once "../../modelo/ordenes/crud.php";

$obj= new Orden(); 
$obj->setconection($newConection);
$ordenes = $obj->selectAll();
?>


<div>
	<table class="table table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>
				<td>Repartidor</td>
				<td>Cedula</td>
				<td>Factura</td>
				<td>Pagado</td>
				<td>Observación</td>
				<td>Fecha</td>
				<td>Eliminar</td>
				<td>Editar</td>
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
			    <td>Repartidor</td>
				<td>Cedula</td>
				<td>Factura</td>
				<td>Pagado</td>
				<td>Observación</td>
				<td>Fecha</td>
				<td>Eliminar</td>
				<td>Editar</td>
			</tr>
		</tfoot>
		<tbody >
			<?php 
			foreach($ordenes as $orden){
				?>
				<tr >
					<td><?php echo $orden['repartidor']; ?></td>
					<td><?php echo $orden['cedula'];?></td>
					<td><?php echo $orden['id_factura']; ?></td>
					<td><?php echo $obj->flag($orden['pagado']);?></td>
					<td><?php echo $orden['observaciones']; ?></td>
					<td><?php echo $orden['fecha_salida'];?></td>
					
					
					
					
					<td style="text-align: center;">
						<span class="btn btn-danger btn-sm" onclick="eliminarDatos('<?php echo $orden['cod_envio'] ?>')">
							<span class="fa fa-trash"></span>
						</span>
					</td>
					<td style="text-align: center;">
						<span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $orden['cod_envio']?>');">
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