 
  

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
 


<div id="smartwizardU">
            <ul class="">
                <li><a href="#step-1">Paso 1<br /><small>Información de nueva  mercaderia</small></a></li>
                
                
             </ul>

            <div>
                <div id="step-1" class="">
               <!-- Informacion general   !-->
                    <label class="control-label">Repartidor:</label>
                       <select class="form-control chosen" id="listaRepartidores"  name="listaRepartidores">
                        </select>
                    <label class="control-label">Factura:</label>
                        <select class="form-control chosen" id="listaFacturas"  name="listaFacturas">
                        </select>
                     <label class="control-label">Devuelto:</label>
                        <select class="form-control"  id="devuelto"  name="devuelto">
                        <option value="1">SI</option>
                        <option value="0">NO</option>
                        </select>
                    <label class="control-label">Pagado:</label>
                       <select class="form-control"  id="pagado"  name="pagado">
                        <option value="1">SI</option>
                        <option value="0">NO</option>
                       </select>
                    <label class="control-label">Observaciones:</label>
                    <textarea class="form-control" id="observacion" name="observacion" rows="7"  placeholder="Observaciones entrega" required  ></textarea>
                    <input type="hidden" id="idFactura" name="idFactura">
                  
                  
               </div>
                <!-- fin  Informacion general   !-->
                 
            </div>
                
            
</div>

          

      

<script type="text/javascript">
    
  
$(document).ready(function(){
    
    $('#smartwizardU').smartWizard();
   // $('#listaProductos').chosen();
    cargarRepartidores();
    cargarFacturas();
    
});
</script>