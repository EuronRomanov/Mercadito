<?php 
       
 
	class Descuento{
		
        private $mbd ;
      
        
        public function setconection($conectar){
			$this->mbd = $conectar->openConnection();
        }
        
        function selectAll(){
            $sql="SELECT cod_categoria,
             nombre, 
             descripcion 
             FROM categoria";

            $stmt = $this->mbd->prepare($sql);

            $stmt->execute();
            $proveedores = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $proveedores;
         } 
         
         



         public function agregar($datos){
	
            try {

               
                 $sql="INSERT INTO categoria( nombre, descripcion ) VALUES (?,?)";
               
                $stmt =$this->mbd->prepare($sql);
                  $stmt->bindParam(1, $datos[0]);  //nombre
                  $stmt->bindParam(2, $datos[1]); // descripcion
                  

                  if ($stmt->execute()) {
                              
 
                          return  "1";	
                 
                  }
               } catch (PDOException $e) {
                 $control=$e->getMessage();
                if(strpos($control,"Integrity constraint violation")>-1){
                    return "El nombre o ruc del proveedor ya existe";
                }else{
                    return  "Error".$control;
                }
                
            }
        }

        public function eliminar($codalumno){
				  
				try{	
            $sql="DELETE FROM categoria WHERE  cod_categoria=?";
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
			 
            $sql="SELECT cod_categoria,
            nombre, 
            descripcion 
            FROM categoria
			WHERE  cod_categoria= ?";	
             $stmt2 = $this->mbd->prepare($sql);
             
            $stmt2->bindParam(1, $codCategoria);
                // Ejecutamos
                $stmt2->execute();
                    // Ahora vamos a indicar el fetch mode cuando llamamos a fetch:
                $productos = $stmt2->fetchAll(PDO::FETCH_ASSOC);

			
			 foreach($productos as $producto){
                   
            $datos=array(
                'idCategoria' => $codCategoria,
                'nombre' => $producto['nombre'],
				'descripcion' => $producto['descripcion']
                
				);

           }

			return $datos;
		}
        

        public function actualizar($datos){
            
            try{
            $sql="UPDATE categoria SET  nombre=?, descripcion=? WHERE cod_categoria=?";
                
            $stmt = $this->mbd->prepare($sql);
            $stmt->bindParam(1, $datos[0]);  //nombre
            $stmt->bindParam(2, $datos[1]); // descripcion
            $stmt->bindParam(3, $datos[2]); // codigo catagoria
            	
            
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