
function validarFormulario(){
        // Informacion general
        //nombre
      if($("#nombre").val() == ""){
         $("#nombre").addClass('green-border');
          return false;
      }else{
         $("#nombre").removeClass('green-border');
      }

 
       //detalle
      if($("#detalle").val() == ""){
      //add efect of file formulario.css
        $("#detalle").addClass('green-border');
        return false;
      }else{
        $("#detalle").removeClass('green-border');
      }

      //descuento
      if($("#descuento").val() == ""){
        //add efect of file formulario.css
          $("#descuento").addClass('green-border');
          return false;
        }else{
          $("#descuento").removeClass('green-border');
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


 //detalle
if($("#detalleM").val() == ""){
//add efect of file formulario.css
  $("#detalleM").addClass('green-border');
  return false;
}else{
  $("#detalleM").removeClass('green-border');
}

 //detalle
 if($("#descuentoM").val() == ""){
  //add efect of file formulario.css
    $("#descuentoM").addClass('green-border');
    return false;
  }else{
    $("#descuentoM").removeClass('green-border');
  }

     return true;
}
  

  