function formatoFormularioU(){
   //ruc
   var idrucM = document.getElementById("rucM").value;
   if($("#rucM").val().length != 13){
    //add efect of file formulario.css
      $("#rucM").addClass('green-border');
      return false;
    }else{
      $("#rucM").removeClass('green-border');
    }
  //telefono
  //var telefono = document.getElementById("telefono").value;
  if( $('#telefonoM').val().length != 7){
      $("#telefonoM").addClass('green-border');
      return false;
  }else{
      
      $("#telefonoM").removeClass('green-border');
  }

  //celular
  var celM = document.getElementById("celularM").value.toString();
  
  if(celM.substr(2).length==8 && celM.substr(0,2)=="09" ){
    $("#celularM").removeClass('green-border');
     
  }else{  
    $("#celularM").addClass('green-border');
    return false;
  }

  var corM = document.getElementById("emailM").value;
  
  var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/;
  //
  if(corM.indexOf("@")>3){

    $("#emailM").removeClass('green-border');
    }else{
      $("#emailM").addClass('green-border');
      return false;
      
    }
  return true;
}


function validarFormularioU(){
        // Informacion general
        //nombre
      if($("#nombreM").val() == ""){
         $("#nombreM").addClass('green-border');
          return false;
      }else{
         $("#nombreM").removeClass('green-border');
      }

 
       //ruc
      if($("#rucM").val() == ""){
      //add efect of file formulario.css
        $("#rucM").addClass('green-border');
        return false;
      }else{
        $("#rucM").removeClass('green-border');
      }


      //direccion
      if($("#direccionM").val() == ""){
     
        $("#direccionM").addClass('green-border');
        return false;
      }else{
       $("#direccionM").removeClass('green-border');
      }
      //sitio web
      //el valor no es obligatorio
      if($("#sitioM").val() == ""){
        $("#sitioM").val('sin portal web');
      }
      // Contacto
      //representante
      if($("#nombreRM").val() == ""){
        $("#nombreRM").addClass('green-border');
        return false;
      }else{ 
        $("#nombreRM").removeClass('green-border');
      }
      //telefono
      
      if($("#telefonoM").val() == "" ){
      $("#telefonoM").addClass('green-border');
      return false;
      }else{
      $("#telefonoM").removeClass('green-border');
      }
 
      // celular
      if($("#celularM").val() == ""){
        $("#celularM").addClass('green-border');
        return false;
      }else{
        
        $("#celularM").removeClass('green-border');
      }
  
  
      //correo electronico
      if($("#emailM").val() == ""){
       $("#emailM").addClass('green-border');
      return false;
      }else{
      $("#emailM").removeClass('green-border');
      }
           return true;
}
  

  var opciones = {
    //strict: true,              // va a validar siempre, aunque la cantidad de caracteres no sea 10 ni 13
    //events: "change",          // evento que va a disparar la validación
   // the_classes: "invalid",    // clase que se va a agregar al nodo en el que se realiza la validación
    //onValid: function () {},   // callback cuando la cédula es correcta.
    onInvalid: function () {
      //window.alert("cédula inválida.");
      alertify.error("El formato RUC incorrecto ");
      $("#rucM").val('');
      //console.log(this);
    }                          // callback cuando la cédula es incorrecta.
  };
  $("#rucM").validarCedulaEC(opciones);