

$(document).ready(function(){
 
 

    $('#btnActualizar').click(function(){
     // datos=$('#frmnuevoU').serialize();

     var datos=new FormData($('#frmnuevoU')[0]);
     
      $.ajax({
        type:"POST",
        data:datos,
        url:"../../controlador/ordenes/actualizar.php",
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
   
    });


    

   


  });