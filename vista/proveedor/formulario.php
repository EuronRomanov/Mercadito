 
  
<?php 
require_once "../../modelo/proveedor/crud.php";
$formulario= new Proveedor();
$directorio=$formulario->codigotelf();
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js" integrity="sha256-c4gVE6fn+JRKMRvqjoDp+tlG4laudNYrXI1GncbfAYY=" crossorigin="anonymous"></script>


<div id="smartwizard">
            <ul class="">
                <li><a href="#step-1">Paso 1<br /><small>Información general</small></a></li>
                <li><a href="#step-2">Paso 2<br /><small>Contacto</small></a></li>
                
             </ul>

            <div>
                <div id="step-1" class="">
               <!-- Informacion general   !-->
                  <label class="control-label">Nombre:</label>
                    <input type="text" class="form-control input-sm " id="nombre" name="nombre" onkeypress="return val(event)" required placeholder="nombre del producto"  />
                  <label class="control-label">RUC</label>
                    <input type="text" name="ruc" id="ruc"  onkeypress="return valN(event)" class="form-control" required placeholder="RUC del proveedor" />
                  <label for="direccion">Dirección:</label>
                    <textarea class="form-control " id="direccion" name="direccion" rows="7"  placeholder="dirección de proveedor incluida referencia" required  ></textarea>
                  <label class="control-label">Sitio web:</label>
                  <input type="text" class="form-control input-sm " id="sitio" name="sitio"  placeholder="pagina web del proveedor"  />
               </div>
                <!-- fin  Informacion general   !-->
                <div id="step-2" class="">
                    <!--  contacto   -->      
                    <label class="control-label">Nombre y apellidos del representante</label>
                    <input type="text" class="form-control input-sm " id="nombreR" name="nombreR" onkeypress="return val(event)" required placeholder=""  />
                    <label class="control-label">Telefono fijo</label>
                    <div class='row'>
                        <div class='col'>
                          <select class="form-control chosen"  id="area" name="area" >
                          <?php 
                            foreach($directorio as $clave=>$valor):
                           
                            ?>
                            <label ><?php echo "<option value=".$clave.">".$valor."-0".$clave."</option>"; ?>
                            <?php endforeach; ?>
                          </select>
                        </div>
                        <div class='col'>
                          <input type="text" name="telefono" id="telefono"  onkeypress="return valN(event)" class="form-control" required placeholder="Ejemplo: 1234567" />
                        </div>
                        
                    </div>
                    <label class="control-label">Celular</label>
                    <input type="text" name="celular" id="celular"  onkeypress="return valN(event)" class="form-control input-sm"  placeholder="Ejemplo: 091111111"/>
                    <label class="control-label">Email</label>
                    <input type="text" name="email" id="email"   class="form-control input-sm"  placeholder="Ejemplo: representante@proveddor.com"/>
                    
                </div>
                 <!--fin  contacto   !-->  
            </div>
                
            
</div>

          

      

<script type="text/javascript">
    
  
$(document).ready(function(){
    
    $('#smartwizard').smartWizard();
    $('#area').chosen();
    
});
</script>