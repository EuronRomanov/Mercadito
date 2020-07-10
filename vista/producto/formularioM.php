 
<?php /*$unidadesCompraM=array('TV','Servicio a la Habitación','Armario o cajones','Wifi','Calefacción','Champu','Papel higiénico','Desayuno','Chimenea','Parqueadero'); 
$zonas=array('Piscina','Spa','Cachas deportivas','Biblioteca','Discoteca','Parqueadero','Jardín','Parque','Salon de baile','Salon de uso de multiple'); */
require_once "../../modelo/producto/crud.php";
$obj= new crud();
$unidadesCompraM=$obj->getUnidad();
$unidadesVentaM=$obj->getUnidad();
?>
<meta charset="UTF-8">
      
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js" integrity="sha256-c4gVE6fn+JRKMRvqjoDp+tlG4laudNYrXI1GncbfAYY=" crossorigin="anonymous"></script>
  <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" integrity="sha256-EH/CzgoJbNED+gZgymswsIOrM9XhIbdSJ6Hwro09WE4=" crossorigin="anonymous" /-->

<div id="smartwizardM">
            <ul class="">
                <li><a href="#step-1">Step 1<br /><small>Información general</small></a></li>
                <li><a href="#step-2">Step 2<br /><small>Compra </small></a></li>
                <li><a href="#step-3">Step 3<br /><small>Venta</small></a></li>
                <li><a href="#step-4">Step 4<br /><small>Promociones</small></a></li> 
            </ul>

            <div>
                <!-- Información general --> 
                <div id="step-1" class="">
                    
                    <label class="control-label">Nombre:</label>
                        <input type="text" class="form-control input-sm " id="nombreM" name="nombreM" onkeypress="return val(event)" required placeholder="nombre del producto"  />
                    <label for="descripcion">Descripción:</label>
                        <textarea class="form-control " id="descripcionM" name="descripcionM" rows="7"  placeholder="Informacion extra del producto" required  ></textarea>
                    <label class="control-label">Categorias:</label>
                    <!--select class="chosen"   id="categoriasM" name="categoriasM" >
                    </select-->
                    <div id="listaCategoriasM"></div>
                    <label class="control-label">En bodega:</label>
                        <input type="text"  class="form-control input-sm" readonly id="cantidadM" name="cantidadM" onkeypress="return valN(event)"  placeholder="0"  />
                    <div class="row">
                    <div class="col">
                    <label for="portadaM">Portada:</label>
                    <input type="file" class="form-control-file" name="portadaM" id="portadaM"  accept="image/*">
                    </div>
                    <div class="col">
                    <img id="imagenUpdate"   width="150" height="200"/>
                    </div>
                    </div>
                </div>
                <!-- fin Información general --> 
                <div id="step-2" class="">
                <!-- compra -->
                <label class="control-label">Costo</label>
                      <input type="text"  class="form-control input-sm"  id="costoM" name="costoM"  onkeypress="return filterFloat(event,this);" placeholder="00.00" />
                    <label class="control-label">Cantidad</label>
                    <div class='row'>
                      <div class='col'>
                      <input type="text" name="cantidadCompraM" id="cantidadCompraM"  onkeypress="return valN(event)" class="form-control" required  />
                      </div>
                      <div class='col'>
                      <select class="combo"  id="unidadesCompraM" name="unidadesCompraM" >
                      <?php for($x = 0; $x < count($unidadesCompraM); $x++) { ?>
                        <label ><?php echo "<option value=".$x.">$unidadesCompraM[$x]</option>"; ?>
                        <?php } ?>
                       </select>
                      </div>
                    </div>
                    <label class="control-label">Proveedor</label>
                    <select class="form-control chosen"  id="proveedoresM" name="proveedoresM" >
                    </select>
                    <label>Descuento</label>
                    <div class="row"><div class="col-11">
                      <input type="text" class="form-control input-sm" id="descuentoM" name="descuentoM" onkeypress="return filterFloat(event,this);"  placeholder="Ingrese porcentaje de descuento" />
                     </div>
                     <div class="col-1"><label>%</label></div>
                     </div>
                <!-- fin compra -->
                </div>
                <div id="step-3" class="">
                <!-- venta -->
                <label>Precio</label>
                      <input type="text"  class="form-control input-sm"  id="precioM" name="precioM"  onkeypress="return filterFloat(event,this);" required placeholder="00.00">
                      <label>Cantidad</label>
                    <div class='row'>
                      <div class='col'>
                      <input type="text" name="cantidadVentaM" id="cantidadVentaM"  onkeypress="return valN(event)" class="form-control"/>
                      </div>
                      <div class='col'>
                      <select class="combo"  id="unidadesVentaM" name="unidadesVentaM" >
                      <?php for($x = 0; $x < count($unidadesVentaM); $x++) { ?>
                        <label ><?php echo "<option value='".$x."'>$unidadesVentaM[$x]</option>"; ?>
                        <?php } ?>
                       </select>
                      </div>
                    </div>
                    <label>Incluye IVA?</label>
                    <select class="form-control"  id="ivaM" name="ivaM" >
                      <option value="1">si</option>
                      <option value="0">no</option>
                      </select>
                
                  <!-- fin venta -->
                </div>
                 <div id="step-4" class="">
                  <!-- promociones   -->
                  <select  class="form-control chosen" id="promocionesM" name="promocionesM">
                  </select>
                   <input type="hidden" id="idProducto" name="idProducto"/>
                   <!--- fin promciones --> 
                </div> 
            </div>
        </div>

          


        <script type="text/javascript">


/* $( "#ffinalM" ).datepicker({
     dateFormat: 'yy-mm-dd'
    });*/


$(document).ready(function(){

    $('#smartwizardM').smartWizard();
   
    cargarCategoriasM();
    cargarProveedoresM();
    cargarPromocionesM();
   // $(".chosen").chosen();
   $("#proveedoresM").chosen();
   $("#unidadesCompraM").chosen();
   $("#unidadesVentaM").chosen();
   $("#promocionesM").chosen();
   
});


</script>
