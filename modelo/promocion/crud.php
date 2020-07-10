<?php 
       
 
	class Descuento{
		
        private $mbd ;
      
        
        public function setconection($conectar){
			$this->mbd = $conectar->openConnection();
        }
        
        function selectAll(){
            $sql="SELECT nombre, 
            detalle,
             descuento,
             cod_promocion
             FROM promocion";

            $stmt = $this->mbd->prepare($sql);

            $stmt->execute();
            $promociones = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $promociones;
         } 
         
         



         public function agregar($datos){
	
            try {

               
                 $sql="INSERT INTO promocion(nombre, detalle, descuento) VALUES (?,?,?)";
               
                $stmt =$this->mbd->prepare($sql);
                  $stmt->bindParam(1, $datos[0]);  //nombre
                  $stmt->bindParam(2, $datos[1]); // detalle
                  $stmt->bindParam(3, $datos[2]); // detalle

                  if ($stmt->execute()) {
                              
 
                          return  "1";	
                 
                  }
               } catch (PDOException $e) {
                 $control=$e->getMessage();
                if(strpos($control,"Integrity constraint violation")>-1){
                    return "El nombre de promocion ya existe";
                }else{
                    return  "Error".$control;
                }
                
            }
        }

        public function eliminar($codalumno){
				  
				try{	
            $sql="DELETE FROM promocion WHERE cod_promocion=?";
            $stmt2 = $this->mbd->prepare($sql);
             $stmt2->bindParam(1, $codalumno);
        // Ejecutamos
       // $stmt2->execute();
    
            if ($stmt2->execute()) {
                return  "1";	
                
                }
        } catch (PDOException $e) {
            $control=$e->getMessage();
            return  "Error".$control;
        }
        
        }

        //información producto para formulario actualización
		public function obtenDatosUpdate($codCategoria){
			 
            $sql="SELECT  nombre, 
            detalle, 
            descuento 
            FROM promocion
             WHERE cod_promocion=?";	
             $stmt2 = $this->mbd->prepare($sql);
             
            $stmt2->bindParam(1, $codCategoria);
                // Ejecutamos
                $stmt2->execute();
                    // Ahora vamos a indicar el fetch mode cuando llamamos a fetch:
                $productos = $stmt2->fetchAll(PDO::FETCH_ASSOC);

			
			 foreach($productos as $producto){
                   
            $datos=array(
                'idPromocion' => $codCategoria,
                'nombre' => $producto['nombre'],
				'detalle' => $producto['detalle'],
                'descuento' => $producto['descuento']
				);

           }

			return $datos;
		}
        

        public function actualizar($datos){
            
            try{
            $sql="UPDATE promocion SET nombre=?, detalle=?, descuento=? WHERE cod_promocion=?";
                
            $stmt = $this->mbd->prepare($sql);
            $stmt->bindParam(1, $datos[0]);  //nombre
            $stmt->bindParam(2, $datos[1]); // descripcion
            $stmt->bindParam(3, $datos[2]); // descuento
            $stmt->bindParam(4, $datos[3]); // codigo promocion
            	
            
            if ($stmt->execute() ) {
                echo "1";
           
            }
            } catch (PDOException $e) {
                $control=$e->getMessage();
                if(strpos($control,"Integrity constraint violation")>-1){
                    return "Categoria ya existe";
                }else{
                    return  "Error".$control;
                }
            }
        }



    }