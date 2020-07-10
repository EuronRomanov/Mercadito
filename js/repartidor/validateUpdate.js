function formatoFormularioU(){
   //ruc
   //var idruc = document.getElementById("ruc").value;
   if($("#rucM").val().length != 13){
    //add efect of file formulario.css
      $("#rucM").addClass('green-border');
      return false;
    }else{
      $("#rucM").removeClass('green-border');
    }
    //cedula
    if($("#cedulaM").val().length != 10){
      //add efect of file formulario.css
        $("#cedulaM").addClass('green-border');
        return false;
      }else{
        $("#cedulaM").removeClass('green-border');
      }
  
  //celular
  var celU = document.getElementById("celularM").value.toString();
  
  if(celU.substr(2).length==8 && celU.substr(0,2)=="09" ){
    $("#celularM").removeClass('green-border');
     
  }else{  
    $("#celularM").addClass('green-border');
    return false;
  }
  //portada
  var allowedExtensions = /(.jpg|.jpeg|.png)$/i;
  if (!allowedExtensions.exec($("#portadaM").val()) && $("#portadaM").val()!="" ) {
    $("#portadaM").val('');
    
    alertify.error("Solo se permiten imagenes");
    return false;
  }


  //email
  var cor = document.getElementById("emailM").value;
  
  var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/;
  //
  if(cor.indexOf("@")>3){

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
      
      // Contacto
      //representante
      if($("#passM").val() == ""){
        $("#passM").addClass('green-border');
        return false;
      }else{ 
        $("#passM").removeClass('green-border');
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
  

  var opcionesU = {
    //strict: true,              // va a validar siempre, aunque la cantidad de caracteres no sea 10 ni 13
    //events: "change",          // evento que va a disparar la validación
   // the_classes: "invalid",    // clase que se va a agregar al nodo en el que se realiza la validación
    //onValid: function () {},   // callback cuando la cédula es correcta.
    onInvalid: function () {
      //window.alert("cédula inválida.");
      alertify.error("El campo RUC esta mal ingresado");
      $("#rucM").val('');
      //console.log(this);
    }                          // callback cuando la cédula es incorrecta.
  };
  var opcionescU = {
    //strict: true,              // va a validar siempre, aunque la cantidad de caracteres no sea 10 ni 13
    //events: "change",          // evento que va a disparar la validación
   // the_classes: "invalid",    // clase que se va a agregar al nodo en el que se realiza la validación
    //onValid: function () {},   // callback cuando la cédula es correcta.
    onInvalid: function () {
      //window.alert("cédula inválida.");
      alertify.error("El campo cedula esta mal ingresado");
      $("#cedulaM").val('');
      //console.log(this);
    }                          // callback cuando la cédula es incorrecta.
  };
  $("#rucM").validarCedulaEC(opcionesU);
  $("#cedulaM").validarCedulaEC(opcionescU);
  var inputU=  document.getElementById('cedulaM');
  var input2U=  document.getElementById('rucM');
  var input3U=  document.getElementById('celularM');
  inputU.addEventListener('input',function(){
    if (this.value.length > 10) 
       this.value = this.value.slice(0,10); 
  })
  input2U.addEventListener('input',function(){
    if (this.value.length > 13) 
       this.value = this.value.slice(0,13); 
  })
  input3U.addEventListener('input',function(){
    if (this.value.length > 10) 
       this.value = this.value.slice(0,10); 
  })