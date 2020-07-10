<?php 
       
 
	class Proveedor{
		
        private $mbd ;
        private $codigoTelefono= array(
        2=>
           " Pichincha,
            Sto. Domingo",
        3=>
           " Tungurahua,
            Cotopaxi,
            Chimborazo,
            Bolívar,
            Pastaza",
        6=>
          "  Esmeraldas,
            Carchi,
            Imbabura,
            Sucumbíos,
            Orellana,
            Napo",
        4=>
            "Guayas,
            Sta. Elena",
        5=>
           " Galápagos,
            Manabí,
            Los Ríos",
        7=>
            "El Oro,
            Azuay,
            Cañar,
            Loja,
            Morona Santiago,
            Zamora"
    
        );
        
        public function setconection($conectar){
			$this->mbd = $conectar->openConnection();
        }
        
        function selectAll(){
            $sql="SELECT cod_proveedor, 
            nombre,
            ruc,
            telefono,
            celular, 
            correo, 
            direccion, 
            representante, 
            sitioWeb, 
            habilitada, 
            fecha_inicio, 
            fecha_fin 
            FROM proveedor";

            $stmt = $this->mbd->prepare($sql);

            $stmt->execute();
            $proveedores = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $proveedores;
         } 
         
         public function selectProductosId($proveedor){
            $sql="SELECT producto.nombre as nombre,
             producto.costo as costo,
             producto.unidad_compra as unidad,
             producto.descuento_compra  as descuento
             FROM producto 
             WHERE producto.id_proveedor=?";
           
            $stmt = $this->mbd->prepare($sql);
            $stmt->bindParam(1, $proveedor);
            $stmt->execute();
            $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
           


            return $productos;
         }



         public function agregar($datos){
	
            try {

               
                 $sql="INSERT INTO proveedor( nombre, ruc, telefono, celular, correo, direccion, representante, sitioWeb) VALUES (?,?,?,?,?,?,?,?)";
               
                $stmt =$this->mbd->prepare($sql);
                  $stmt->bindParam(1, $datos[0]);  //nombre
                  $stmt->bindParam(2, $datos[1]); // ruc
                   $stmt->bindParam(3, $datos[2]); // telefono
                  $stmt->bindParam(4, $datos[3]);  //celular
                  $stmt->bindParam(5, $datos[4]);   // correo
                   $stmt->bindParam(6, $datos[5]); 	//direccion
                  $stmt->bindParam(7,$datos[6]);   //representante
                  $stmt->bindParam(8, $datos[7]);	// sitioWeb	

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
            $sql="DELETE FROM proveedor WHERE  cod_proveedor=?";
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
		public function obtenDatosUpdate($codProveedor){
			 
            $sql="SELECT cod_proveedor, 
            nombre,
            ruc,
            telefono,
            celular, 
            correo, 
            direccion, 
            representante, 
            sitioWeb, 
            habilitada, 
            fecha_inicio, 
            fecha_fin 
            FROM proveedor
			WHERE  cod_proveedor= ?";	
             $stmt2 = $this->mbd->prepare($sql);
             
            $stmt2->bindParam(1, $codProveedor);
                // Ejecutamos
                $stmt2->execute();
                    // Ahora vamos a indicar el fetch mode cuando llamamos a fetch:
                $productos = $stmt2->fetchAll(PDO::FETCH_ASSOC);

			
			 foreach($productos as $producto){
                   
            $datos=array(
                'codProveedor' => $codProveedor,
                'nombre' => $producto['nombre'],
				'ruc' => $producto['ruc'],
                'area'=> $this->getArea($producto['telefono']),
                'telefono'=>$producto['telefono'],
                'celular' => $producto['celular'],
                'correo' => $producto['correo'], 
                'direccion' => $producto['direccion'], 
                'representante' => $producto['representante'], 
                'sitio' => $producto['sitioWeb']
				);

           }

			return $datos;
		}
        

        public function actualizar($datos){
            
            try{
            $sql="UPDATE proveedor SET  nombre=?, ruc=?, telefono=?, celular=?, correo=?, direccion=?, representante=?, sitioWeb=? WHERE cod_proveedor=?";
                
            $stmt = $this->mbd->prepare($sql);
            $stmt->bindParam(1, $datos[0]);  //nombre
            $stmt->bindParam(2, $datos[1]); // ruc
            $stmt->bindParam(3, $datos[2]); // telefono
            $stmt->bindParam(4, $datos[3]);  //celular
            $stmt->bindParam(5, $datos[4]);   // correo
            $stmt->bindParam(6, $datos[5]); 	//direccion
            $stmt->bindParam(7,$datos[6]);   //representante
            $stmt->bindParam(8, $datos[7]);	// sitioWeb	
            $stmt->bindParam(9, $datos[8]);	// codigo proveedor	
            
            if ($stmt->execute() ) {
                echo "1";
           
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

        //llenar select del formulario de mercaderia
       public function getSelectProveedorId($idProveedor){
        $sql="SELECT proveedor.nombre as nombre, 
        proveedor.cod_proveedor as cod_proveedor
        FROM proveedor,producto 
        WHERE proveedor.cod_proveedor=producto.id_proveedor 
        AND producto.cod_producto=?";
      
       $stmt = $this->mbd->prepare($sql);
       $stmt->bindParam(1, $idProveedor);

        $stmt->execute();
        $proveedores = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $proveedores;
       }

        

        //devuelve codigo de area telefono fijo
         public function codigotelf(){
             return $this->codigoTelefono;
         }

         //get code area

         public function getArea($telefono){
           return  substr($telefono, 0, 1);
         }

    }