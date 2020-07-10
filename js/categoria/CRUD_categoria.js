

$(document).ready(function(){
 
 
  $('#btnAgregarnuevo').click(function(){
    // datos=$('#frmnuevo').serialize();
  
    
      var datos=new FormData($('#frmnuevo')[0]);
      if(validarFormulario() ){
          $.ajax({
       type:"POST",
       data:datos,
       url:"../../controlador/categoria/agregar.php",
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
     if(validarFormularioU()){
      $.ajax({
        type:"POST",
        data:datos,
        url:"../../controlador/categoria/actualizar.php",
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
     
        alertify.error("Se detecto campos vacios");
     
    }
    });


    

   


  });