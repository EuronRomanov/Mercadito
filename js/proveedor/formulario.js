

function eliminarDatos(idalum){
   alertify.confirm('Eliminar registro', '¿Seguro de eliminar este registro ', function(){ 

     $.ajax({
       type:"POST",
       data:"idProveedor=" + idalum,
       url:"../../controlador/proveedor/eliminar.php",
       success:function(r){
         if(r==1){
           $('#tablaDatatable').load('tabla.php');
           alertify.success("Eliminado con exito !");
         }else{
           alertify.error("No se pudo eliminar...");
         }
       }
     });

   }
   , function(){

   });
 }



 