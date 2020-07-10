

  
  //cargar fromulario actualizar
  function agregaFrmActualizar(idal){
       
 
    $.ajax({
      type:"POST",
      data:'idPromocion='+idal,
      url:"../../controlador/promocion/mostrar.php",
      success:function(r){
       datos=jQuery.parseJSON(r);
       //datos=r;
        $('#nombreM').val(datos['nombre']);
        $('#detalleM').val(datos['detalle']);
        $('#descuentoM').val(datos['descuento']);
        $('#idPromocion').val(datos['idPromocion']);
       
        
      }

      
    });
  }