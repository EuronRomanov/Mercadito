 
  
<?php 
require_once "../../modelo/repartidor/crud.php";
$formulario= new Repartidor();
$transporte=$formulario->getTransporte();
$contrato=$formulario->getContrato();
$grupo=$formulario->getGrupo();      
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

  


<div id="smartwizard">
            <ul class="">
                <li><a href="#step-1">Paso 1<br /><small>Información general</small></a></li>
                <li><a href="#step-2">Paso 2<br /><small>Contacto</small></a></li>
                <li><a href="#step-3">Paso 3<br /><small>Contrato</small></a></li>
                
            </ul>

            <div>
                <div id="step-1" class="">
            <!-- Informacion general   !-->
                  <label class="control-label">Nombres y apellidos:</label>
                    <input type="text" class="form-control input-sm " id="nombre" name="nombre" onkeypress="return val(event)" required placeholder="nombres y apellidos del repartidor"  />
                  <label class="control-label">Cedula</label>
                    <input type="text" name="cedula" id="cedula"  onkeypress="return valN(event);" class="form-control" required placeholder="Cédula del proveedor" />
                  <label class="control-label">Medio de transporte:</label>
                     <select class="form-control"  id="transporte" name="transporte" >
                        <?php for($x = 0; $x < count($transporte); $x++) { ?>
                          <label ><?php echo "<option value=".$x.">$transporte[$x]</option>"; ?>
                        <?php } ?>
                      </select>
                  <label for="password">Contraseña:</label>
                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Contaseña" required>
                  <label for="portada">Foto:</label>
                   <input type="file" class="form-control-file" name="portada" id="portada" required accept="image/*">
                 
                </div>
             <!-- fin  Informacion general   !-->
                <div id="step-2" class="">
             <!--  contacto   -->      
                    <label class="control-label">Celular</label>
                      <input type="text" name="celular" id="celular"  onkeypress="return valN(event)" class="form-control input-sm"  placeholder="Ejemplo: 091111111"/>
                    <label class="control-label">Email</label>
                      <input type="text" name="email" id="email"   class="form-control input-sm"  placeholder="Ejemplo: repartidor@gmail.com"/>
                    <label for="descripcion">Dirección:</label>
  					          <textarea class="form-control" id="direccion" name="direccion" rows="7"  placeholder="Dirección domiciliaria del repartidor" required  ></textarea>
                 </div>
                 <!--fin  contacto  !-->  
                <div id="step-3" class="">
                   <!--  contrato !-->
                   <label class="control-label">RUC</label>
                      <input type="text" name="ruc" id="ruc"  onkeypress="return valN(event)" class="form-control" required placeholder="RUC del repartidor" />
                   <label class="control-label">Contrato</label>
                     <select class="form-control"  id="contrato" name="contrato" >
                        <?php for($x = 0; $x < count($contrato); $x++) { ?>
                        <label ><?php echo "<option value='".$x."'>$contrato[$x]</option>"; ?>
                        <?php } ?>
                      </select>
                   <label class="control-label">Grupo</label>
                    <!--input type="text" name="grupo" id="grupo"  onkeypress="return valN(event)" class="form-control input-sm"  placeholder="Ejemplo: 1"/-->
                    <select class="form-control"  id="grupo" name="grupo" >
                        <?php for($x = 0; $x < count($grupo); $x++) { ?>
                        <label ><?php echo "<option value='".$x."'>$grupo[$x]</option>"; ?>
                        <?php } ?>
                      </select>  
                  </div>
                <!-- fin contrato  -->
                
            </div>
        </div>

          

      

<script type="text/javascript">
   
  
$(document).ready(function(){
 
    $('#smartwizard').smartWizard();
    
});
</script>