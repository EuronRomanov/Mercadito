
   //cargar fromulario actualizar
   function agregaFrmInformacion(idal){
       
 
    $.ajax({
      type:"POST",
      data:'idProveedor='+idal,
      url:"../../controlador/proveedor/productoId.php",
      success:function(r){
      
    
        $('#tblProducto').html(r);
        
      }

      
    });
  }
  
  //cargar fromulario actualizar
  function agregaFrmActualizar(idal){
       
 
    $.ajax({
      type:"POST",
      data:'idProduct='+idal,
      url:"../../controlador/proveedor/mostrar.php",
      success:function(r){
       datos=jQuery.parseJSON(r);
       //datos=r;
        $('#nombreM').val(datos['nombre']);
        $('#rucM').val(datos['ruc']);
        $('#direccionM').val(datos['direccion']);
        $('#areaM').val(datos['area']).trigger('chosen:updated');
        $('#sitioM').val(datos['sitio']);
        $('#nombreRM').val(datos['representante']);
        $('#telefonoM').val(datos['telefono']);
        $('#celularM').val(datos['celular']);
        $('#emailM').val(datos['correo']);
        $('#idProveedor').val(datos['codProveedor']);
        
      }

      
    });
  }