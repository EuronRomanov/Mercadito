 
  
<?php $servicios=array(
    'Unidad(es)',
    'Kilogramo(s)',
    'Hectogramo(s)',
    'Decagramo(s)',
    'Gramo(s)',
    'Decigramo(s)',
    'Centigramo(s)',
    'Miligramo(s)',
    'Arroba',
    'Quintal',
    'Caja(s)',
    'Litro(s)',
    'Sobre(s)',
    'Libra(s)',
    'Mililitro(s)',
    'Onza(s)',
    'Funda(s)', 
    'Botella',
    'Botella (retornable)',
    'El saco',
    'Galon'
    
);  
?>
 <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
       
        <link href="dist/css/smart_wizard.css" rel="stylesheet" type="text/css" />
        <link href="dist/css/smart_wizard_theme_arrows.css" rel="stylesheet" type="text/css" />
      <!--   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
        <script type="text/javascript" src="dist/js/jquery.smartWizard.min.js"></script>
      
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

  <link rel="stylesheet" href="../../css/tail.select-default.css">
<script src="../../js/tail.select-full.min.js"></script>
<script src="../../js/producto/formulario.js"></script>
<div id="smartwizard">
            <ul class="">
                <li><a href="#step-1">Paso 1<br /><small>Información general</small></a></li>
                <li><a href="#step-2">Paso 2<br /><small>Compra</small></a></li>
                <li><a href="#step-3">Paso 3<br /><small>Venta</small></a></li>
                <li><a href="#step-4">Paso 4<br /><small>Descuentos</small></a></li>
            </ul>

            <div>
                <div id="step-1" class="">
            <!-- Informacion general   !-->
              <label class="control-label">Nombre:</label>
                <input type="text" class="form-control input-sm " id="nombre" name="nombre" onkeypress="return val(event)" required placeholder="nombre del producto"  />
               <label for="descripcion">Descripción:</label>
  					    <textarea class="form-control " id="descripcion" name="descripcion" rows="7"  placeholder="Informacion extra del producto" required  ></textarea>
                <label class="control-label">Categorias:</label>
                <div id="listaCategorias">
               </div>
               <label class="control-label">En bodega:</label>
                <input type="text" class="form-control input-sm" id="cantidad" name="cantidad" onkeypress="return valN(event)"  placeholder="0"  />
              <label for="portada">Portada:</label>
                <input type="file" class="form-control-file" name="portada" id="portada" required accept="image/*">
                </div>
             <!-- fin  Informacion general   !-->
                <div id="step-2" class="">
             <!--  compra   -->      
                    <label class="control-label">Costo</label>
                      <input type="text"  class="form-control input-sm"  id="costo" name="costo"  onkeypress="return filterFloat(event,this);" placeholder="00.00" />
                    <label class="control-label">Cantidad</label>
                    <div class='row'>
                      <div class='col'>
                      <input type="text" name="cantidadCompra" id="cantidadCompra"  onkeypress="return valN(event)" class="form-control" required  />
                      </div>
                      <div class='col'>
                      <select class="combo"  id="unidadesCompra" name="unidadesCompra" >
                      <?php for($x = 0; $x < count($servicios); $x++) { ?>
                        <label ><?php echo "<option value=".$x.">$servicios[$x]</option>"; ?>
                        <?php } ?>
                       </select>
                      </div>
                    </div>
                    <label class="control-label">Proveedor</label>
                    <div id="listaProveedores"></div>
                    <label>Descuento</label>
                    <div class="row"><div class="col-11">
                      <input type="text" class="form-control input-sm" id="descuento" name="descuento" onkeypress="return filterFloat(event,this);"  placeholder="Ingrese porcentaje de descuento" />
                     </div>
                     <div class="col-1"><label>%</label></div>
                     </div> 
                </div>
                 <!--fin  compra   !-->  
                <div id="step-3" class="">
                   <!--  venta !-->
                   <label>Precio</label>
                      <input type="text"  class="form-control input-sm"  id="precio" name="precio"  onkeypress="return filterFloat(event,this);" required placeholder="00.00">
                      <label>Cantidad</label>
                    <div class='row'>
                      <div class='col'>
                      <input type="text" name="cantidadVenta" id="cantidadVenta"  onkeypress="return valN(event)" class="form-control"/>
                      </div>
                      <div class='col'>
                      <select class="combo"  id="unidadesVenta" name="unidadesVenta" >
                      <?php for($x = 0; $x < count($servicios); $x++) { ?>
                        <label ><?php echo "<option value='".$x."'>$servicios[$x]</option>"; ?>
                        <?php } ?>
                       </select>
                      </div>
                    </div>
                    <label>Incluye IVA?</label>
                    <select class="form-control"  id="iva" name="iva" >
                      <option value="1">si</option>
                      <option value="0">no</option>
                      </select>
                
   

                </div>
                <!-- fin venta  -->
                <div id="step-4" class="">
                
                    <div id="listaPromociones"></div>
                
                </div>
            </div>
        </div>

          

      

<script type="text/javascript">
    tail.select(".combo", {
    search: true
}); 
  
$(document).ready(function(){
 
    $('#smartwizard').smartWizard();
    cargarCategorias();
    cargarProveedores();
    cargarPromociones();
});
</script>