
             function val(e){
                tecla=(document.all) ? e.keyCode : e.which;
                if(tecla==8) return true;
                patron=/[A-Za-z\s\á\ó\Ñ\ñ\r\´]/;
                te=String.fromCharCode(tecla);
                return patron.test(te);
             }
              function valN(e){
                 tecla = (document.all) ? e.keyCode : e.which;
          
              if (tecla==8) return true;
              patron =/[0-9]/;
              tecla_final = String.fromCharCode(tecla);
              return patron.test(tecla_final);
          }
          
          function validarE(e) { // 1
              tecla = (document.all) ? e.keyCode : e.which; // 2
              if (tecla==8) return true; // 3
             if (tecla==9) return true; // 3
             //if (tecla==11) return true; // 3
              patron = /[a-zA-Z0-9\r\ñ\Ñ\á\ó\-]/; // 4
           
              te = String.fromCharCode(tecla); // 5
              return patron.test(te); // 6
          } 
        



          function contador(){
            cuenta = 0;
            var miCadena=document.getElementById("costoEntera").value;
            posicion = miCadena.indexOf(".");
            while ( posicion != -1 ) {
               cuenta++;
               posicion = miCadena.indexOf(".",posicion+1);
            }
            
            return cuenta;
         }
          ///validacion del campo de dinero
          function contadorCedula(){
            cuenta = 0;
            var cadena=document.getElementById("cedula").value;
            if (cadena.lenght>10) {
                return false;
            }
            
            return true;
         }
     
     function filterFloat(evt,input){
        // Backspace = 8, Enter = 13, ‘0′ = 48, ‘9′ = 57, ‘.’ = 46, ‘-’ = 43
        var key = window.Event ? evt.which : evt.keyCode;    
        var chark = String.fromCharCode(key);
        var tempValue = input.value+chark;
        if(key >= 48 && key <= 57){
            if(filter(tempValue)=== false){
                return false;
            }else{       
                return true;
            }
        }else{
              if(key == 8 || key == 13 || key == 0) {     
                  return true;              
              }else if(key == 46){
                    if(filter(tempValue)=== false){
                        return false;
                    }else{       
                        return true;
                    }
              }else{
                  return false;
              }
        }
    }
    function filter(__val__){
        var preg = /^([0-9]+\.?[0-9]{0,2})$/; 
        if(preg.test(__val__) === true){
            return true;
        }else{
           return false;
        }
        
    }