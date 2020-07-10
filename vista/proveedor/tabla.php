<?php session_start();?>
<?php 



require_once "../../database/db.php";
require_once "../../modelo/proveedor/crud.php";

$obj= new Proveedor(); 
$obj->setconection($newConection);
$proveedores = $obj->selectAll();
?>


<div>
	<table class="table table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>
				<td>Nombre</td>
				<td>RUC</td>
				<td>Telefono</td>
				<td>Email</td>
				<td>Dirección</td>
				<td>Representante</td>
				<td>Web</td>
				<td>Produtos</td>
				<td>Eliminar</td>
				<td>Editar</td>
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
				<td>Nombre</td>
				<td>RUC</td>
				<td>Telefonos</td>
				<td>Email</td>
				<td>Dirección</td>
				<td>Representante</td>
				<td>Web</td>
				<td>Produtos</td>
				<td>Eliminar</td>
				<td>Editar</td>
			</tr>
		</tfoot>
		<tbody >
			<?php 
			foreach($proveedores as $proveedor){
				?>
				<tr >
					<td><?php echo $proveedor['nombre']; ?></td>
					<td><?php echo $proveedor['ruc'];?></td>
					<td><?php echo "0".$proveedor['telefono']."--".$proveedor['celular'];?></td>
					<td><?php echo $proveedor['correo']; ?></td>
					<td><?php echo $proveedor['direccion'];?></td>
					<td><?php echo $proveedor['representante']; ?></td>
					<td><?php echo $proveedor['sitioWeb']; ?></td>
					
					<td style="text-align: center;">
						<span class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalInformacion"   onclick="agregaFrmInformacion('<?php echo $proveedor['cod_proveedor'] ?>')">
							<span class="fa fa-search"></span>
						</span>
					</td>
					<td style="text-align: center;">
						<span class="btn btn-danger btn-sm" onclick="eliminarDatos('<?php echo $proveedor['cod_proveedor'] ?>')">
							<span class="fa fa-trash"></span>
						</span>
					</td>
					<td style="text-align: center;">
						<span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $proveedor['cod_proveedor']?>');">
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