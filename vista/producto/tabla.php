<?php session_start();?>
<?php 



require_once "../../database/db.php";
require_once "../../modelo/producto/crud.php";

$obj= new crud(); 
$obj->setconection($newConection);
$productos = $obj->selectAll();
?>


<div>
	<table class="table table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>
				<td>Nombre</td>
				<td>Proveedor</td>
				<td>Precio</td>
				<td>Descripción</td>
				<td>Descuento</td>
				<td>Categoría</td>
				<td>IVA</td>
				<td>Más.Info</td>
				<td>Eliminar</td>
				<td>Editar</td>
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
				<td>Nombre</td>
				<td>Proveedor</td>
				<td>Precio</td>
				<td>Descripción</td>
				<td>Descuento</td>
				<td>Categoría</td>
				<td>IVA</td>
				<td>Más info</td>
				<td>Eliminar</td>
				<td>Editar</td>
			</tr>
		</tfoot>
		<tbody >
			<?php 
			foreach($productos as $producto){
				?>
				<tr >
					<td><?php echo $producto['nombre']; ?></td>
					<td><?php echo $producto['proveedor'];?></td>
					<td><?php echo $obj->converDouble($producto['precio']);?></td>
					<td><?php echo $producto['descripcion']; ?></td>
					<td><?php echo $producto['descuento'];?></td>
					<td><?php echo $producto['categoria']; ?></td>
					<td><?php echo $obj->tieneIva($producto['iva']); ?></td>
					
					<td style="text-align: center;">
						<span class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalInformacion"   onclick="agregaFrmInformacion('<?php echo $producto['cod_producto'] ?>')">
							<span class="fa fa-search"></span>
						</span>
					</td>
					<td style="text-align: center;">
						<span class="btn btn-danger btn-sm" onclick="eliminarDatos('<?php echo $producto['cod_producto'] ?>')">
							<span class="fa fa-trash"></span>
						</span>
					</td>
					<td style="text-align: center;">
						<span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $producto['cod_producto']?>');">
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