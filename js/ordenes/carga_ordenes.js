

  
  //cargar fromulario actualizar
  function agregaFrmActualizar(idal){
       
 
    $.ajax({
      type:"POST",
      data:'idOrden='+idal,
      url:"../../controlador/ordenes/mostrar.php",
      success:function(r){
       datos=jQuery.parseJSON(r);
       //datos=r;
        $('#listaRepartidores').val(datos['repartidor']);
        $('#listaFacturas').val(datos['factura']);
        $('#devuelto').val(datos['devuelto']);
        $('#pagado').val(datos['pagado']);
        $('#observacion').val(datos['descripcion']);
        $('#idFactura').val(datos['idOrden']);
       
        
      }

      
    });
  }