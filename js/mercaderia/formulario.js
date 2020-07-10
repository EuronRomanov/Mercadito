function cargarProductos() {
  $.ajax({
     type:"POST",
     url:"select/producto.php",
     success:function (r) {
     $("#listaProductos").html(r);
     }
 });
}

function eliminarDatos(idalum){
   alertify.confirm('Eliminar registro', '¿Seguro de eliminar este registro ', function(){ 

     $.ajax({
       type:"POST",
       data:"idMercaderia=" + idalum,
       url:"../../controlador/mercaderia/eliminar.php",
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



 