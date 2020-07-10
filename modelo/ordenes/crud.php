<?php 
       
 
	class Orden{
		
        private $mbd ;
      
        
        public function setconection($conectar){
			$this->mbd = $conectar->openConnection();
        }
        
        function selectAll(){
           $sql="SELECT cod_envio, 
            repartidor.nombre_apellidos as repartidor, 
            repartidor.cedula as cedula, 
            id_factura,
            factura.pagado as pagado, 
            observaciones, 
            fecha_salida 
            FROM envio, repartidor,factura 
            WHERE envio.id_repartidor=repartidor.cod_repartidor
            AND envio.id_factura=factura.cod_factura 
            AND factura.pagado=0
            AND envio.devuelto=1";
           // $sql="SELECT cod_repartidor,nombre_apellidos FROM repartidor WHERE NOT EXISTS(SELECT * FROM envio,factura WHERE envio.id_factura=factura.cod_factura AND envio.id_repartidor=repartidor.cod_repartidor AND DAY(factura.fecha_compra)=DAY(NOW())AND envio.entregado=2 )";
            $stmt = $this->mbd->prepare($sql);

            $stmt->execute();
            $proveedores = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $proveedores;
         } 
         
         


        public function eliminar($codOrden){
				  
				try{	
            $sql="DELETE FROM envio WHERE cod_envio=?";
            $stmt2 = $this->mbd->prepare($sql);
             $stmt2->bindParam(1, $codOrden);
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
		public function obtenDatosUpdate($codOrden){
			 
            $sql="SELECT  id_repartidor, 
            id_factura, 
            devuelto,
            factura.pagado as pagado, 
            observaciones 
            FROM envio,factura
            WHERE envio.id_factura=factura.cod_factura
            AND envio.cod_envio=?";	
             $stmt2 = $this->mbd->prepare($sql);
             
            $stmt2->bindParam(1, $codOrden);
                // Ejecutamos
                $stmt2->execute();
                    // Ahora vamos a indicar el fetch mode cuando llamamos a fetch:
                $ordenes= $stmt2->fetchAll(PDO::FETCH_ASSOC);

			
			 foreach($ordenes as $orden){
                   
            $datos=array(
                'idOrden' => $codOrden,
                'repartidor' => $orden['id_repartidor'],
                'factura' => $orden['id_factura'],
                'devuelto' => $orden['devuelto'],
                'pagado' => $orden['pagado'],
				'descripcion' => $orden['observaciones']
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
        
        public function flag($value){
             if ($value=1) {
                return "SI";
             } else {
                return "NO";
             }
             
        }


    }