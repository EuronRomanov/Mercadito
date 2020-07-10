 
  
<?php 

      
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

  


<div id="smartwizardU">
            <ul class="">
                <li><a href="#step-1">Paso 1<br /><small>Información general</small></a></li>
                <li><a href="#step-2">Paso 2<br /><small>Contacto</small></a></li>
                <li><a href="#step-3">Paso 3<br /><small>Contrato</small></a></li>
                
            </ul>

            <div>
                <div id="step-1" class="">
            <!-- Informacion general   !-->
                  <label class="control-label">Nombres y apellidos:</label>
                    <input type="text" class="form-control input-sm " id="nombreM" name="nombreM" onkeypress="return val(event)" required placeholder="nombres y apellidos del repartidor"  />
                  <label class="control-label">Cedula</label>
                    <input type="text" name="cedulaM" id="cedulaM"  onkeypress="return valN(event);" class="form-control" required placeholder="Cédula del proveedor" />
                  <label class="control-label">Medio de transporte:</label>
                     <select class="form-control"  id="transporteM" name="transporteM" >
                        <?php for($x = 0; $x < count($transporte); $x++) { ?>
                          <label ><?php echo "<option value=".$x.">$transporte[$x]</option>"; ?>
                        <?php } ?>
                      </select>
                  <label class="control-label">Repartidor disponible:</label>
                  <select class="form-control"  id="habilitadoM" name="habilitadoM" >
                          <option value="1">SI</option>
                          <option value="0">NO</option>
                  </select>
                  <label for="passM">Contraseña:</label>
                    <input type="password" class="form-control" id="passM" name="passM" placeholder="Contaseña" required>
                    <label for="portadaM">Foto:</label>
                    <div class="row">
                    <div class="col">
                      
                      <input type="file" class="form-control-file" name="portadaM" id="portadaM" required accept="image/*">
                    </div>
                    <div class="col">
                      <img id="imagenUpdate"   width="150" height="200"/>
                    </div>
                    </div>
                </div>
             <!-- fin  Informacion general   !-->
                <div id="step-2" class="">
             <!--  contacto   -->      
                    <label class="control-label">Celular</label>
                      <input type="text" name="celularM" id="celularM"  onkeypress="return valN(event)" class="form-control input-sm"  placeholder="Ejemplo: 091111111"/>
                    <label class="control-label">Email</label>
                      <input type="text" name="emailM" id="emailM"   class="form-control input-sm"  placeholder="Ejemplo: repartidor@gmail.com"/>
                    <label for="direccionM">Dirección:</label>
  					          <textarea class="form-control" id="direccionM" name="direccionM" rows="7"  placeholder="Dirección domiciliaria del repartidor" required  ></textarea>
                 </div>
                 <!--fin  contacto  !-->  
                <div id="step-3" class="">
                   <!--  contrato !-->
                   <label class="control-label">RUC</label>
                      <input type="text" name="rucM" id="rucM"  onkeypress="return valN(event)" class="form-control" required placeholder="RUC del repartidor" />
                   <label class="control-label">Contrato</label>
                     <select class="form-control"  id="contratoM" name="contratoM" >
                        <?php for($x = 0; $x < count($contrato); $x++) { ?>
                        <label ><?php echo "<option value='".$x."'>$contrato[$x]</option>"; ?>
                        <?php } ?>
                      </select>
                      <label class="control-label">Grupo</label>
                    <!--input type="text" name="grupoM" id="grupoM"  onkeypress="return valN(event)" class="form-control input-sm"  placeholder="Ejemplo: 1"/-->
                    <select class="form-control"  id="grupoM" name="grupoM" >
                        <?php for($x = 0; $x < count($grupo); $x++) { ?>
                        <label ><?php echo "<option value='".$x."'>$grupo[$x]</option>"; ?>
                        <?php } ?>
                      </select> 
                      <input type="hidden" id="idRepartidor" name="idRepartidor"/>
                </div>
                <!-- fin contrato  -->
                
            </div>
        </div>

          

      

<script type="text/javascript">
   
  
$(document).ready(function(){
 
    $('#smartwizardU').smartWizard();
    
});
</script>