

  
  //cargar fromulario actualizar
  function agregaFrmActualizar(idal){
       
 
    $.ajax({
      type:"POST",
      data:'idPromocion='+idal,
      url:"../../controlador/categoria/mostrar.php",
      success:function(r){
       datos=jQuery.parseJSON(r);
       //datos=r;
        $('#nombreM').val(datos['nombre']);
        $('#detallenM').val(datos['detalle']);
        $('#descuentonM').val(datos['descuento']);
        $('#idPromocion').val(datos['idPromocion']);
       
        
      }

      
    });
  }