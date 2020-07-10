<?php 
       
 
	class Mercaderia{
		
        private $mbd ;
      
        
        public function setconection($conectar){
			$this->mbd = $conectar->openConnection();
        }
        
        function selectAll(){
            $sql="SELECT cod_prov_prod,
             fecha_entrega as fecha,
             mal_estado as mal, 
             buen_estado as bien, 
             producto.nombre as producto, 
             proveedor.nombre as proveedor 
             FROM proveedor_producto,producto, proveedor
             WHERE proveedor_producto.id_producto=producto.cod_producto 
             AND proveedor_producto.id_proveedor=proveedor.cod_proveedor";

            $stmt = $this->mbd->prepare($sql);

            $stmt->execute();
            $proveedores = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
            return $proveedores;
         } 
         
         



         public function agregar($datos){
	
            try {
                
                $pdo=$this->mbd;
                $pdo->beginTransaction();
               
                 $sql="INSERT INTO proveedor_producto(mal_estado, buen_estado, id_proveedor, id_producto) VALUES (?,?,?,?)";
               
                $stmt =$pdo->prepare($sql);
                  $stmt->bindParam(1, $datos[1]);  //estado estado
                  $stmt->bindParam(2, $datos[0]); // buen estado
                  $stmt->bindParam(3, $datos[2]);  //proveedor
                  $stmt->bindParam(4, $datos[3]); // producto
                  $stmt->execute();
                  //agregar cantida d a producto
                  $producto="UPDATE producto SET cantidad=cantidad+? WHERE cod_producto=?";
                  $stmt =$pdo->prepare($producto);
                  $stmt->bindParam(1, $datos[0]);  //buen estado
                  $stmt->bindParam(2, $datos[3]); // producto
                  $stmt->execute();

                  if ($pdo->commit()) {
                     return  "1";	
                  }

                 
               } catch (PDOException $e) {
                 $control=$e->getMessage();
                 $pdo->rollBack();
                    return  "Error".$control;
                
                
            }
        }

        public function eliminar($codMercaderia){
				  
            try{	
                $pdo=$this->mbd;
                $pdo->beginTransaction();
                // Getting the cantidad based on id
                $stmt = $pdo->prepare("SELECT buen_estado, id_producto FROM proveedor_producto WHERE cod_prov_prod=?");
                
                $stmt->bindParam(1, $codMercaderia);
                $stmt->execute();
                $mercaderia = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach( $mercaderia as  $merc){
                $producto = $merc['id_producto'];
                $cantidad = $merc['buen_estado'];
                }
                //quitar cantidad a producto
                $prod="UPDATE producto SET cantidad=cantidad-? WHERE cod_producto=?";
                $stmt =$pdo->prepare($prod);
                $stmt->bindParam(1, $cantidad);  //buen estado
                $stmt->bindParam(2, $producto); // producto
                $stmt->execute();


                $sql="DELETE FROM proveedor_producto WHERE cod_prov_prod=?";
                $stmt2 = $pdo->prepare($sql);
                $stmt2->bindParam(1, $codMercaderia);
                // Ejecutamos
                $stmt2->execute();


        
                if ($pdo->commit()) {
                    return  "1";	
                    
                }
            } catch (PDOException $e) {
                $control=$e->getMessage();
                $pdo->rollBack();
                return  "Error".$control;
            }
        
        }

       
        

        



    }