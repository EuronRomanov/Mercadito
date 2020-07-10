
function validarFormulario(){
        // Informacion general
        //nombre
      if($("#nombre").val() == ""){
         $("#nombre").addClass('green-border');
          return false;
      }else{
         $("#nombre").removeClass('green-border');
      }

 
       //descripcion
      if($("#descripcion").val() == ""){
      //add efect of file formulario.css
        $("#descripcion").addClass('green-border');
        return false;
      }else{
        $("#descripcion").removeClass('green-border');
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


 //descripcion
if($("#descripcionM").val() == ""){
//add efect of file formulario.css
  $("#descripcionM").addClass('green-border');
  return false;
}else{
  $("#descripcionM").removeClass('green-border');
}



     return true;
}
  

  