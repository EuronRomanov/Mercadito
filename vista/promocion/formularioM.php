 
  

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
                
                
             </ul>

            <div>
                <div id="step-1" class="">
               <!-- Informacion general   !-->
                  <label class="control-label">Nombre:</label>
                    <input type="text" class="form-control input-sm " id="nombreM" name="nombreM" onkeypress="return val(event)" required placeholder="nombre de la categoria"  />
                  
                  <label for="detalleM">Descripción:</label>
                    <textarea class="form-control " id="detalleM" name="detalleM" rows="7"  placeholder="descripción de la promoción" required  ></textarea>
                    <label>Descuento</label>
                    <div class="row"><div class="col-11">
                      <input type="text" class="form-control input-sm" id="descuentoM" name="descuentoM" onkeypress="return filterFloat(event,this);"  placeholder="Ingrese porcentaje de descuento" />
                     </div>
                     <div class="col-1"><label>%</label></div>
                     </div> 
                  <input type="hidden" id="idPromocion" name="idPromocion" />
               </div>
                <!-- fin  Informacion general   !-->
                 
            </div>
                
            
</div>

          

      

<script type="text/javascript">
    
  
$(document).ready(function(){
    
    $('#smartwizardU').smartWizard();
    
    
});
</script>