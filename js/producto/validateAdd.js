function validarFormulario(){
    // Informacion general
    //nombre
    if($("#nombre").val() == ""){
      //alert("El campo Nombre no puede estar vacío.");
      //$("#nombre").focus();      
       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
      //add efect of file formulario.css
          $("#nombre").addClass('green-border');
          return false;
  }else{
    $("#nombre").removeClass('green-border');
  }
    //descripcion
  if($("#descripcion").val() == ""){
     // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
    //add efect of file formulario.css
        $("#descripcion").addClass('green-border');
        return false;
  }else{
       $("#descripcion").removeClass('green-border');
  }
  //cantidad
  //el valor no es obligatorio
  if($("#cantidad").val() == ""){
    $("#cantidad").val('0');
  }
  //portada
  var allowedExtensions = /(.jpg|.jpeg|.png)$/i;
  
  if($("#portada").val() == null ){
    $("#portada").addClass('green-border');
    return false;
  }else{
    $("#portada").removeClass('green-border');
    if (!allowedExtensions.exec($("#portada").val())) {
      $("#portada").val('');
      alertify.error("Solo se permiten imagenes");
      return false;
    }
  }
  // Compra
  //costo
  if($("#costo").val() == ""){
    $("#costo").addClass('green-border');
    return false;
  }else{ 
    $("#costo").removeClass('green-border');
  }
  //cantidad compra
  if($("#cantidadCompra").val() == ""){
      $("#cantidadCompra").addClass('green-border');
      return false;
  }else{
    
    $("#cantidadCompra").removeClass('green-border');
  }
  // descuento
  if($("#descuento").val() == ""){
    $("#descuento").val('0');
  }
  //venta
  //precio
  if($("#precio").val() == ""){
    $("#precio").addClass('green-border');
    return false;
  }else{
      var x=($("#precio").val())*(1.00);
      $("#precio").val(x);
  $("#precio").removeClass('green-border');
  }
  //cantidad venta
  if($("#cantidadVenta").val() == ""){
    $("#cantidadVenta").addClass('green-border');
    return false;
  }else{
    $("#cantidadVenta").removeClass('green-border');
  }
  return true;
  }