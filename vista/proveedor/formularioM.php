 
  
<?php 
//require_once "../../modelo/proveedor/crud.php";
//$formulario= new Proveedor();
$directorioM=$formulario->codigotelf();
?>
 <meta charset="UTF-8">
      
<div id="smartwizardM">
            <ul class="">
                <li><a href="#step-1">Paso 1<br /><small>Información general</small></a></li>
                <li><a href="#step-2">Paso 2<br /><small>Contacto</small></a></li>
                
             </ul>

            <div>
                <div id="step-1" class="">
               <!-- Informacion general   !-->
                  <label class="control-label">Nombre:</label>
                    <input type="text" class="form-control input-sm " id="nombreM" name="nombreM" onkeypress="return val(event)" required placeholder="nombre del producto"  />
                  <label class="control-label">RUC</label>
                    <input type="text" name="rucM" id="rucM"  onkeypress="return valN(event)" class="form-control" required placeholder="RUC del proveedor" />
                  <label for="direccion">Dirección:</label>
                    <textarea class="form-control " id="direccionM" name="direccionM" rows="7"  placeholder="dirección de proveedor incluida referencia" required  ></textarea>
                  <label class="control-label">Sitio web:</label>
                  <input type="text" class="form-control input-sm " id="sitioM" name="sitioM"  placeholder="pagina web del proveedor"  />
                  <input type="hidden"  id="idProveedor" name="idProveedor" />
               </div>
                <!-- fin  Informacion general   !-->
                <div id="step-2" class="">
                    <!--  contacto   -->      
                    <label class="control-label">Nombre y apellidos del representante</label>
                    <input type="text" class="form-control input-sm " id="nombreRM" name="nombreRM" onkeypress="return val(event)" required placeholder=""  />
                    <label class="control-label">Telefono fijo</label>
                    <div class='row'>
                        <div class='col'>
                          <select class="form-control chosen"  id="areaM" name="areaM" >
                          <?php 
                            foreach($directorioM as $clave=>$valor):
                           
                            ?>
                            <label ><?php echo "<option value=".$clave.">".$valor."-0".$clave."</option>"; ?>
                            <?php endforeach; ?>
                          </select>
                        </div>
                        <div class='col'>
                          <input type="text" name="telefonoM" id="telefonoM"  onkeypress="return valN(event)" class="form-control" required placeholder="Ejemplo: 1234567" />
                        </div>
                        
                    </div>
                    <label class="control-label">Celular</label>
                    <input type="text" name="celularM" id="celularM"  onkeypress="return valN(event)" class="form-control input-sm"  placeholder="Ejemplo: 091111111"/>
                    <label class="control-label">Email</label>
                    <input type="text" name="emailM" id="emailM"   class="form-control input-sm"  placeholder="Ejemplo: representante@proveddor.com"/>
                    
                </div>
                 <!--fin  contacto   !-->  
            </div>
                
            
</div>

          

      

<script type="text/javascript">
    
  
$(document).ready(function(){
    
    $('#smartwizardM').smartWizard();
    $('#areaM').chosen();
    
});
</script>