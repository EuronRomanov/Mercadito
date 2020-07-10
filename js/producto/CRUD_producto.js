

$(document).ready(function(){
 
 
  $('#btnAgregarnuevo').click(function(){
    // datos=$('#frmnuevo').serialize();
  
    
      var datos=new FormData($('#frmnuevo')[0]);
      if(validarFormulario()){
          $.ajax({
       type:"POST",
       data:datos,
       url:"../../controlador/producto/agregar.php",
       cache: false,
        contentType: false,
         processData: false,
       success:function(r){
         if(r==1){
           $('#frmnuevo')[0].reset();
           $('#tablaDatatable').load('tabla.php');
           alertify.success("agregado con exito :D");
         }else if(r==2){
          alertify.error("Se detecto campos vacios");
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
      $.ajax({
        type:"POST",
        data:datos,
        url:"../../controlador/producto/actualizar.php",
        cache: false,
         contentType: false,
          processData: false,
        success:function(r){
          if(r==1){
             $('#frmnuevoU')[0].reset();
            $('#tablaDatatable').load('tabla.php');
            alertify.success("Actualizado con exito :D");
          }else{
            alertify.error("Fallo al actualizar :(");
          }
        }
      });
    });


     $('#btnActualizarG').click(function(){
     // datos=$('#frmnuevoU').serialize();
     var datos=new FormData($('#frmnuevoG')[0]);
      $.ajax({
        type:"POST",
        data:datos,
        url:"procesos/actualizarG.php",
        cache: false,
         contentType: false,
          processData: false,
        success:function(r){
          if(r==1){
             $('#frmnuevoG')[0].reset();
              $("#book").load(" #book");
            $('#tablaDatatable').load('tabla.php');
            alertify.success("Actualizado con exito :D");
          }else{
            alertify.error("Fallo al actualizar :(");
          }
        }
      });
    });

   


  });