

$(document).ready(function(){
 
 
  $('#btnAgregarnuevo').click(function(){
    // datos=$('#frmnuevo').serialize();
  
    
      var datos=new FormData($('#frmnuevo')[0]);
      if(validarFormulario() ){
          $.ajax({
       type:"POST",
       data:datos,
       url:"../../controlador/mercaderia/agregar.php",
       cache: false,
        contentType: false,
         processData: false,
       success:function(r){
         if(r==1){
           $('#frmnuevo')[0].reset();
           $('#tablaDatatable').load('tabla.php');
           alertify.success("agregado con exito ");
         }else {
          alertify.error(r);
          //alertify.error("El nombre o ruc del proveedor ya existe");
         }
          
       }
     });
    }else {
      
        alertify.error("Se detecto campos vacios");
     
      
    }
});



    $('#btnActualizar').click(function(){
     // datos=$('#frmnuevoU').serialize();

     var datos=new FormData($('#frmnuevoU')[0]);
     if(validarFormularioU() && formatoFormularioU()){
      $.ajax({
        type:"POST",
        data:datos,
        url:"../../controlador/proveedor/actualizar.php",
        cache: false,
         contentType: false,
          processData: false,
        success:function(r){
          if(r==1){
             $('#frmnuevoU')[0].reset();
            $('#tablaDatatable').load('tabla.php');
            alertify.success("Actualizado con exito ");
          }else{
            alertify.error(r);
          }
        }
      });
    }else {
      if(!validarFormularioU()){
        alertify.error("Se detecto campos vacios");
      }else if(!formatoFormularioU()){
        alertify.error("Formatos incorrectos");
      }
      
    }
    });

    
    $("#listaProductos").change(function()
    {    
     var id = $(this).find(":selected").val();
   
     //var dataString = 'idProducto='+ id;
       
     $.ajax
     ({
      type:"POST",
      data: "idProducto="+ id,
      url: "select/proveedor.php",
      success: function(r)
      {
       $("#listaProveedores").html(r);
      } 
     });
    })

   


  });