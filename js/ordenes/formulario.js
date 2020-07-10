function cargarRepartidores() {
  $.ajax({
     type:"POST",
     url:"select/repartidor.php",
     success:function (r) {
     $("#listaRepartidores").html(r);
     }
 });
}

function cargarFacturas() {
  $.ajax({
     type:"POST",
     url:"select/factura.php",
     success:function (r) {
     $("#listaFacturas").html(r);
     }
 });
}

function eliminarDatos(idalum){
   alertify.confirm('Eliminar registro', '¿Seguro de eliminar este registro ', function(){ 

     $.ajax({
       type:"POST",
       data:"idOrden=" + idalum,
       url:"../../controlador/ordenes/eliminar.php",
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



 