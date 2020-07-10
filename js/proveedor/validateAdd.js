function formatoFormulario(){
   //ruc
   var idruc = document.getElementById("ruc").value;
   if($("#ruc").val().length != 13){
    //add efect of file formulario.css
      $("#ruc").addClass('green-border');
      return false;
    }else{
      $("#ruc").removeClass('green-border');
    }
  //telefono
  //var telefono = document.getElementById("telefono").value;
  if( $('#telefono').val().length != 7){
      $("#telefono").addClass('green-border');
      return false;
  }else{
      
      $("#telefono").removeClass('green-border');
  }

  //sitio web
      //el valor no es obligatorio
      if($("#sitio").val() == ""){
        $("#sitio").val('sin portal web');
      }
  //celular
  var cel = document.getElementById("celular").value.toString();
  
  if(cel.substr(2).length==8 && cel.substr(0,2)=="09" ){
    $("#celular").removeClass('green-border');
     
  }else{  
    $("#celular").addClass('green-border');
    return false;
  }

  var cor = document.getElementById("email").value;
  
  var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/;
  //
  if(cor.indexOf("@")>3){

    $("#email").removeClass('green-border');
    }else{
      $("#email").addClass('green-border');
      return false;
      
    }
  return true;
}


function validarFormulario(){
        // Informacion general
        //nombre
      if($("#nombre").val() == ""){
         $("#nombre").addClass('green-border');
          return false;
      }else{
         $("#nombre").removeClass('green-border');
      }

 
       //ruc
      if($("#ruc").val() == ""){
      //add efect of file formulario.css
        $("#ruc").addClass('green-border');
        return false;
      }else{
        $("#ruc").removeClass('green-border');
      }


      //direccion
      if($("#direccion").val() == ""){
     
        $("#direccion").addClass('green-border');
        return false;
      }else{
       $("#direccion").removeClass('green-border');
      }
      //sitio web
      //el valor no es obligatorio
      if($("#sitio").val() == ""){
        $("#sitio").val('sin portal web');
      }
      // Contacto
      //representante
      if($("#nombreR").val() == ""){
        $("#nombreR").addClass('green-border');
        return false;
      }else{ 
        $("#nombreR").removeClass('green-border');
      }
      //telefono
      
      if($("#telefono").val() == "" ){
      $("#telefono").addClass('green-border');
      return false;
      }else{
      $("#telefono").removeClass('green-border');
      }
 
      // celular
      if($("#celular").val() == ""){
        $("#celular").addClass('green-border');
        return false;
      }else{
        
        $("#celular").removeClass('green-border');
      }
  
  
      //correo electronico
      if($("#email").val() == ""){
       $("#email").addClass('green-border');
      return false;
      }else{
      $("#email").removeClass('green-border');
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
      alertify.error("El campo RUC esta mal ingresado");
      $("#ruc").val('');
      //console.log(this);
    }                          // callback cuando la cédula es incorrecta.
  };
  $("#ruc").validarCedulaEC(opciones);