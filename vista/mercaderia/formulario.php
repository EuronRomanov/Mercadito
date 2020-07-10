 
  

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
                <li><a href="#step-1">Paso 1<br /><small>Información de nueva  mercaderia</small></a></li>
                
                
             </ul>

            <div>
                <div id="step-1" class="">
               <!-- Informacion general   !-->
                  <label class="control-label">Buen estado:</label>
                    <input type="text" class="form-control input-sm " id="bien" name="bien" onkeypress="return valN(event)" required placeholder="mercaderia en buen estado"  />
                  <label class="control-label">Mal estado:</label>
                    <input type="text" class="form-control input-sm " id="mal" name="mal" onkeypress="return valN(event)" required placeholder="mercaderia en mal estado"  />
                  <label class="control-label">Producto:</label>
                    <select class="form-control chosen" id="listaProductos"  name="listaProductos">
                    </select>
                  <label class="control-label">Proveedor:</label>
                    <select class="form-control"  id="listaProveedores"  name="listaProveedores">
                    <option value="">Seleccione un proveedor</option>
                    </select>
                  
                  
               </div>
                <!-- fin  Informacion general   !-->
                 
            </div>
                
            
</div>

          

      

<script type="text/javascript">
    
  
$(document).ready(function(){
    
    $('#smartwizard').smartWizard();
   // $('#listaProductos').chosen();
    cargarProductos();
   
    
});
</script>