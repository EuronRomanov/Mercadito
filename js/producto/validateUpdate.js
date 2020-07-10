function validarFormulario(){
    // Informacion general
    //nombre
    if($("#nombreM").val() == ""){
      //alert("El campo Nombre no puede estar vacío.");
      //$("#nombre").focus();      
       // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
      //add efect of file formulario.css
          $("#nombreM").addClass('green-border');
          return false;
  }else{
    $("#nombreM").removeClass('green-border');
  }
    //descripcion
  if($("#descripcionM").val() == ""){
     // Esta función coloca el foco de escritura del usuario en el campo Nombre directamente.
    //add efect of file formulario.css
        $("#descripcionM").addClass('green-border');
        return false;
  }else{
       $("#descripcionM").removeClass('green-border');
  }
  //cantidad
  //el valor no es obligatorio
  if($("#cantidadM").val() == ""){
    $("#cantidadM").val('0');
  }
  //portada
  var allowedExtensions = /(.jpg|.jpeg|.png)$/i;
  
  
    $("#portadaM").removeClass('green-border');
    if (!allowedExtensions.exec($("#portada").val())) {
      $("#portadaM").val('');
      alertify.error("Solo se permiten imagenes");
      return false;
    }
  
  // Compra
  //costo
  if($("#costoM").val() == ""){
    $("#costoM").addClass('green-border');
    return false;
  }else{ 
    $("#costoM").removeClass('green-border');
  }
  //cantidad compra
  if($("#cantidadCompraM").val() == ""){
      $("#cantidadCompraM").addClass('green-border');
      return false;
  }else{
    
    $("#cantidadCompraM").removeClass('green-border');
  }
  // descuento
  if($("#descuentoM").val() == ""){
    $("#descuentoM").val('0');
  }
  //venta
  //precio
  if($("#precioM").val() == ""){
    $("#precioM").addClass('green-border');
    return false;
  }else{
      var x=($("#precioM").val())*(1.00);
      $("#precioM").val(x);
  $("#precio").removeClass('green-border');
  }
  //cantidad venta
  if($("#cantidadVentaM").val() == ""){
    $("#cantidadVentaM").addClass('green-border');
    return false;
  }else{
    $("#cantidadVentaM").removeClass('green-border');
  }
  return true;
  }