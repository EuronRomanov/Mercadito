<?php session_start();?>
<?php 



require_once "../../database/db.php";
require_once "../../modelo/repartidor/crud.php";

$obj= new Repartidor(); 
$obj->setconection($newConection);
$repartidores = $obj->selectAll();
?>


<div>
	<table class="table table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>
				<td>Nombre</td>
				<td>Cédula</td>
				<td>RUC</td>
				<td>Grupo</td>
				<td>Email</td>
				<td>Transporte</td>
				<td>Celular</td>
				<td>Más.Info</td>
				<td>Eliminar</td>
				<td>Editar</td>
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
				<td>Nombre</td>
				<td>Cédula</td>
				<td>RUC</td>
				<td>Grupo</td>
				<td>Email</td>
				<td>Transporte</td>
				<td>Celular</td>
				<td>Más info</td>
				<td>Eliminar</td>
				<td>Editar</td>
			</tr>
		</tfoot>
		<tbody >
			<?php 
			foreach($repartidores as $repartidor){
				?>
				<tr >
					<td><?php echo $repartidor['nombre_apellidos']; ?></td>
					<td><?php echo $repartidor['cedula'];?></td>
					<td><?php echo $repartidor['ruc'];?></td>
					<td><?php echo $obj->setGrupo($repartidor['grupo']); ?></td>
					<td><?php echo $repartidor['correo'];?></td>
					<td><?php echo $obj->setTransporte($repartidor['transporte']); ?></td>
					<td><?php echo $repartidor['celular']; ?></td>
					
					<td style="text-align: center;">
						<span class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalInformacion"   onclick="agregaFrmInformacion('<?php echo $repartidor['cod_repartidor'] ?>')">
							<span class="fa fa-search"></span>
						</span>
					</td>
					<td style="text-align: center;">
						<span class="btn btn-danger btn-sm" onclick="eliminarDatos('<?php echo $repartidor['cod_repartidor'] ?>')">
							<span class="fa fa-trash"></span>
						</span>
					</td>
					<td style="text-align: center;">
						<span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $repartidor['cod_repartidor']?>');">
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