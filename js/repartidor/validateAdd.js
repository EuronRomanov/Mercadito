function formatoFormulario(){
   //ruc
   //var idruc = document.getElementById("ruc").value;
   if($("#ruc").val().length != 13){
    //add efect of file formulario.css
      $("#ruc").addClass('green-border');
      return false;
    }else{
      $("#ruc").removeClass('green-border');
    }
    //cedula
    if($("#cedula").val().length != 10){
      //add efect of file formulario.css
        $("#cedula").addClass('green-border');
        return false;
      }else{
        $("#cedula").removeClass('green-border');
      }
  
  //celular
  var cel = document.getElementById("celular").value.toString();
  
  if(cel.substr(2).length==8 && cel.substr(0,2)=="09" ){
    $("#celular").removeClass('green-border');
     
  }else{  
    $("#celular").addClass('green-border');
    return false;
  }
  //portada
  var allowedExtensions = /(.jpg|.jpeg|.png)$/i;
  if (!allowedExtensions.exec($("#portada").val())) {
    $("#portada").val('');
    
    alertify.error("Solo se permiten imagenes");
    return false;
  }


  //email
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
      
      // Contacto
      //representante
      if($("#pass").val() == ""){
        $("#pass").addClass('green-border');
        return false;
      }else{ 
        $("#pass").removeClass('green-border');
      }
      //direccion
      
      if($("#grupo").val() == "" ){
      $("#grupo").addClass('green-border');
      return false;
      }else{
      $("#grupo").removeClass('green-border');
      }
 
      // celular
      if($("#celular").val() == ""){
        $("#celular").addClass('green-border');
        return false;
      }else{
        
        $("#celular").removeClass('green-border');
      }
  
       
       //portada
  
  
  if($("#portada").val() == null ){
    $("#portada").addClass('green-border');
    return false;
  }else{
    $("#portada").removeClass('green-border');
    
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
  var opcionesc = {
    //strict: true,              // va a validar siempre, aunque la cantidad de caracteres no sea 10 ni 13
    //events: "change",          // evento que va a disparar la validación
   // the_classes: "invalid",    // clase que se va a agregar al nodo en el que se realiza la validación
    //onValid: function () {},   // callback cuando la cédula es correcta.
    onInvalid: function () {
      //window.alert("cédula inválida.");
      alertify.error("El campo cedula esta mal ingresado");
      $("#cedula").val('');
      //console.log(this);
    }                          // callback cuando la cédula es incorrecta.
  };
  $("#ruc").validarCedulaEC(opciones);
  $("#cedula").validarCedulaEC(opcionesc);
  var input=  document.getElementById('cedula');
  var input2=  document.getElementById('ruc');
  var input3=  document.getElementById('celular');
  input.addEventListener('input',function(){
    if (this.value.length > 10) 
       this.value = this.value.slice(0,10); 
  })
  input2.addEventListener('input',function(){
    if (this.value.length > 13) 
       this.value = this.value.slice(0,13); 
  })
  input3.addEventListener('input',function(){
    if (this.value.length > 10) 
       this.value = this.value.slice(0,10); 
  })