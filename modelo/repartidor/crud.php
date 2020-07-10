<?php 
       
       
	class Repartidor{
		
        private $mbd ;
        private $close;
        private $transporte=array("carro","bicicleta","moto","camion","ninguno");
        private $contrato=array("Temporal","Fijo","Prueba");
        private $grupo=array("mañana","tarde","noche");
        private $flag=array("no","si");
        public function setconection($conectar){
            $this->mbd = $conectar->openConnection();
         
        }

        function selectAll(){
            $sql="SELECT cod_repartidor, 
            nombre_apellidos, 
            cedula,
            ruc,
            celular,
            correo,
            transporte, 
            grupo,
            contrato 
            FROM repartidor";

            $stmt = $this->mbd->prepare($sql);

            $stmt->execute();
            $proveedores = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $proveedores;
        } 

        public function agregar($datos){
	
            try {

               
           
                  $stmt = $this->mbd->prepare("INSERT INTO repartidor( nombre_apellidos,  cedula, ruc, direccion, celular, correo, transporte, foto, contrato, grupo, password) VALUES (?,?,?,?,?,?,?,?,?,?,?)");

                  $stmt->bindParam(1, $datos[0]);  //nombre
                  $stmt->bindParam(2, $datos[1]); //  cedula
                   $stmt->bindParam(3, $datos[2]); // ruc
                  $stmt->bindParam(4, $datos[3]);  // direccion
                   $stmt->bindParam(5, $datos[4]);  //celular
                  $stmt->bindParam(6, $datos[5]);   //   correo
                   $stmt->bindParam(7, $datos[6]); 	//transporte
                   $portada=time()."_".$datos[7]; 
                  $stmt->bindParam(8,$portada);   //foto 
                  $stmt->bindParam(9, $datos[8]);	// contrato	
                   $stmt->bindParam(10, $datos[9]);   // grupo
                   $stmt->bindParam(11,$datos[10]);   //  password	
                 	
                 // $stmt->execute();
                 
 
                  if ($stmt->execute()) {
                              if ($datos[11]["error"] > 0){
                               return "Error: ". $datos[11]['error'] ."";
                               }
                             else{
                                move_uploaded_file($datos[11]['tmp_name'],"../../vista/repartidor/imagenesRepartidores/" .time()."_".$datos[11]['name']);
                             }
 
                          return  "1";	
                   }
               } catch (PDOException $e) {
                  
                $control=$e->getMessage();
                if(strpos($control,"Integrity constraint violation")>-1){
                    return "La  cedula, nombre o ruc  ya existe";
                }else{
                    return  "Error".$control;
                }
                
            }
            
           

          
        }

        public function eliminar($codalumno){
				  
            try{	
                $sql="DELETE FROM repartidor WHERE  cod_repartidor=?";
                $stmt2 = $this->mbd->prepare($sql);
                $stmt2->bindParam(1, $codalumno);
            

                if ($stmt2->execute()) {
                    return  "1";	
                }
            } catch (PDOException $e) {
                $control=$e->getMessage();
                return  "Error".$control;
            }
    
        }

        //información mas detallada del repartidor
		public function obtenDatos($codrepartidor){
			 
            $sql="SELECT nombre_apellidos,  
            cedula, 
            ruc,
            direccion, 
            celular, 
            correo, 
            transporte, 
            foto, 
            contrato, 
            grupo,  
            habilitado 
            FROM repartidor 
            WHERE cod_repartidor=?";
             $stmt2 = $this->mbd->prepare($sql);
             //$d=$codalumno;
            $stmt2->bindParam(1, $codrepartidor);
                // Ejecutamos
                $stmt2->execute();
                    // Ahora vamos a indicar el fetch mode cuando llamamos a fetch:
                $repartidores = $stmt2->fetchAll(PDO::FETCH_ASSOC);

				
			 foreach($repartidores as $repartidor){
                   
            $datos=array(
                 'nombre' => $repartidor['nombre_apellidos'],
                'cedula' => $repartidor['cedula'],
                'ruc' => $repartidor['ruc'],
                'imagen' => $repartidor['foto'], 
                'direccion' => $repartidor['direccion'],
                'celular' => $repartidor['celular'],
                'correo' => $repartidor['correo'],
				'transporte' => $this->setTransporte($repartidor['transporte']), 
				'contrato' => $this->setContrato($repartidor['contrato']),
                'grupo' => $this->setGrupo($repartidor['grupo']),
                'habilitado' => $this->setHabilitado($repartidor['habilitado'])
				);

           }

			return $datos;
        }
        
         //información para actualizar
		public function obtenDatosUpdate($codrepartidor){
			 
            $sql="SELECT nombre_apellidos,  
            cedula, 
            ruc,
            direccion, 
            celular, 
            correo, 
            transporte, 
            foto, 
            contrato, 
            grupo, 
            password, 
            habilitado 
            FROM repartidor 
            WHERE cod_repartidor=?";
             $stmt2 = $this->mbd->prepare($sql);
             //$d=$codalumno;
            $stmt2->bindParam(1, $codrepartidor);
                // Ejecutamos
                $stmt2->execute();
                    // Ahora vamos a indicar el fetch mode cuando llamamos a fetch:
                $repartidores = $stmt2->fetchAll(PDO::FETCH_ASSOC);

				
			 foreach($repartidores as $repartidor){
                   
            $datos=array(
                 'idRepartidor'=> $codrepartidor,
                 'nombre' => $repartidor['nombre_apellidos'],
                'cedula' => $repartidor['cedula'],
                'ruc' => $repartidor['ruc'],
                'imagen' => $repartidor['foto'], 
                'direccion' => $repartidor['direccion'],
                'celular' => $repartidor['celular'],
                'correo' => $repartidor['correo'],
				'transporte' => $repartidor['transporte'], 
				'contrato' => $repartidor['contrato'],
                'grupo' => $repartidor['grupo'],
                'habilitado' =>$repartidor['habilitado'],
                 'password'=>$repartidor['password']
                );

           }

			return $datos;
        }
        // actualizar
        public function actualizar($datos){
          
            try {
                $portada=null;
                $sql="";
                if (strlen($datos[7])>3) {
                    
                    $sql="UPDATE repartidor SET nombre_apellidos=?,  cedula=?, ruc=?, direccion=?, celular=?, correo=?, transporte=?, foto=?, contrato=?, grupo=?, password=?, habilitado=? WHERE cod_repartidor=?";
                } else {
                   // $sql="";
                    $sql="UPDATE repartidor SET nombre_apellidos=?,  cedula=?, ruc=?, direccion=?, celular=?, correo=?, transporte=?, contrato=?, grupo=?, password=?, habilitado=? WHERE cod_repartidor=?";
                }
                
                $stmt4 = $this->mbd->prepare($sql);
           
                $stmt4->bindParam(1, $datos[0]);  //nombre
                $stmt4->bindParam(2, $datos[1]); //  cedula
                 $stmt4->bindParam(3, $datos[2]); // ruc
                $stmt4->bindParam(4, $datos[3]);  // direccion
                 $stmt4->bindParam(5, $datos[4]);  //celular
                $stmt4->bindParam(6, $datos[5]);   //   correo
                 $stmt4->bindParam(7, $datos[6]); 	//transporte
                      
                   if (strlen($datos[7])>3) {
                    $portada=time()."_".$datos[7]; 
                    $stmt4->bindParam(8,$portada);   //foto 
                    $stmt4->bindParam(9,$datos[8]);	// contrato	
                     $stmt4->bindParam(10,$datos[9]);   // grupo
                     $stmt4->bindParam(11,$datos[10]);   //  password
                     $stmt4->bindParam(12,$datos[11]);   //  habilitado
                     $stmt4->bindParam(13,$datos[12]);   //  codigo
                   
                   } else {
                    $stmt4->bindParam(8,$datos[8]);	// contrato	
                    $stmt4->bindParam(9,$datos[9]);   // grupo
                    $stmt4->bindParam(10,$datos[10]);   //  password
                    $stmt4->bindParam(11,$datos[11]);   //  habilitado
                    $stmt4->bindParam(12,$datos[12]);   //  codigo
                   }
                   

                   	
                  if ($stmt4->execute()) {
                              if ($datos[13]["error"] > 0  && strlen($datos[7])>3){
                               return "Error: ". $datos[13]['error'] ."";
                               }
                             else{
                                move_uploaded_file($datos[13]['tmp_name'],"../../vista/repartidor/imagenesRepartidores/" .$portada);
                             }
 
                          return  "1";	
                   }

                   
               } catch (PDOException $e) {
                  
                $control=$e->getMessage();
                if(strpos($control,"Integrity constraint violation")>-1){
                    return "La  cedula, nombre o ruc  ya existe";
                }else{
                    if ($control != "4") {
                        return   $stmt4->errorInfo();
                    }else if ($stmt4->errorInfo()=="4"){
                        return "1";
                    }
                    
                }
                
            }
            
           

          
        }

        //metodos get y set
        public function getTransporte(){
            return $this->transporte;
        }
        public function setTransporte($id){
            return $this->transporte[$id];
        }
        public function getContrato(){
            return $this->contrato;
        }
        public function setContrato($id){
            return $this->contrato[$id];
        }
        public function getGrupo(){
            return $this->grupo;
        }
        public function setGrupo($id){
            return $this->grupo[$id];
        }
        public function setHabilitado($id){
            return $this->flag[$id];
        }
    }

     