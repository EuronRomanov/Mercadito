
function cargarProveedores() {
             $.ajax({
                type:"POST",
                url:"proveedores.php",
                success:function (r) {
                $("#listaProveedores").html(r);
                }
            });
       }

 function cargarPromociones() {
        $.ajax({
           type:"POST",
           url:"promociones.php",
           success:function (r) {
           $("#listaPromociones").html(r);
           }
       });
  }
  function cargarCategorias() {
    $.ajax({
       type:"POST",
       url:"categorias.php",
       success:function (r) {
       $("#listaCategorias").html(r);
       }
   });
}
function cargarCategoriasM() {
   $.ajax({
      type:"POST",
      url:"categoriasM.php",
      success:function (r) {
      $("#listaCategoriasM").html(r);
      }
  });
 
}
function  cargarPromocionesM() {
  $.ajax({
     type:"POST",
     url:"promocionesM.php",
     success:function (r) {
     $("#promocionesM").html(r);
     }
 });

}
function cargarProveedoresM() {
  $.ajax({
     type:"POST",
     url:"proveedoresM.php",
     success:function (r) {
     $("#proveedoresM").html(r);
     }
 });

}

function eliminarDatos(idalum){
   alertify.confirm('Eliminar registro', '¿Seguro de eliminar este registro :(?', function(){ 

     $.ajax({
       type:"POST",
       data:"idProducto=" + idalum,
       url:"../../controlador/producto/eliminar.php",
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



 