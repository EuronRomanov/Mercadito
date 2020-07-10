function agregaFrmInformacion(idal){
       
 
    $.ajax({
      type:"POST",
      data:'idRepartidor='+idal,
      url:"../../controlador/repartidor/mostrar.php",
      success:function(r){
       datos=jQuery.parseJSON(r);
       //datos producto;
        $('#nombreR').text(datos['nombre']);
        $('#direccionI').text(datos['direccion']);
        $('#cedulaI').text(datos['cedula']);
        $('#habilitadoI').text(datos['habilitado']);
        $('#celularI').text(datos['celular']);
        $('#correoI').text(datos['correo']);
        $('#telefonoI').text(datos['telefono']);
         $('#transporteI').text(datos['transporte']);
        $('#rucI').text(datos['ruc']);
        $('#contratoI').text(datos['contrato']);
        $('#grupoI').text(datos['grupo']);
     
       
              

       var df="imagenesRepartidores/"+datos['imagen'];

        $("#my_image").attr('src',df);
      }

      
    });
  }


  //cargar fromulario actualizar
  function agregaFrmActualizar(idal){
       
 
    $.ajax({
      type:"POST",
      data:'idRepartidor='+idal,
      url:"../../controlador/repartidor/mostrarRepartidor.php",
      success:function(r){
       datos=jQuery.parseJSON(r);
       //datos=r;
       $('#nombreM').val(datos['nombre']);
       $('#direccionM').val(datos['direccion']);
       $('#cedulaM').val(datos['cedula']);
       $('#habilitadoM').val(datos['habilitado']);
       $('#celularM').val(datos['celular']);
       $('#emailM').val(datos['correo']);
       $('#telefonoM').val(datos['telefono']);
        $('#transporteM').val(datos['transporte']);
       $('#rucM').val(datos['ruc']);
       $('#contratoM').val(datos['contrato']);
       $('#grupoM').val(datos['grupo']);
       $('#passM').val(datos['password']);
       $('#idRepartidor').val(datos['idRepartidor']);

       var d="imagenesRepartidores/"+datos['imagen'];

        $("#imagenUpdate").attr('src',d);
      }

      
    });
  }