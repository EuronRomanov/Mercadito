<?php 
  
 
	class crud{
		
		private $mbd ;
		private $unidad=array(
			'Unidad(es)',
			'Kilogramo(s)',
			'Hectogramo(s)',
			'Decagramo(s)',
			'Gramo(s)',
			'Decigramo(s)',
			'Centigramo(s)',
			'Miligramo(s)',
			'Arroba',
			'Quintal',
			'Caja(s)',
			'Litro(s)',
			'Sobre(s)',
			'Libra(s)',
			'Mililitro(s)',
			'Onza(s)',
			'Funda(s)', 
			'Botella',
			'Botella (retornable)',
			'El saco',
			'Galon'
			
		);  
		public function setconection($conectar){
			$this->mbd = $conectar->openConnection();
		}

		public function agregar($datos){
	
              try {

              
		        
					 
					
					$stmt = $this->mbd ->prepare("INSERT INTO producto( nombre, descripcion, id_descuento, cantidad, precio, unidad_venta, iva, costo, unidad_compra, descuento_compra, imagen, id_proveedor, id_categoria) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");

					$stmt->bindParam(1, $datos[0]);  //nombre
					$stmt->bindParam(2, $datos[1]); // descripcion
					 $stmt->bindParam(3, $datos[2]); // id_descuento
					$stmt->bindParam(4, $datos[3]);  // cantidad
					 $stmt->bindParam(5, $datos[4]);  //precio
					$stmt->bindParam(6, $datos[5]);   // unidad_venta
					 $stmt->bindParam(7, $datos[6]); 	//iva
					$stmt->bindParam(8,$datos[7]);   //costo
					$stmt->bindParam(9, $datos[8]);	// unidad_compra	
					 $stmt->bindParam(10, $datos[9]);   // descuento_comp
					 $portada=time()."_".$datos[10]; 
					 $stmt->bindParam(11,$portada);   // imagen	
					$stmt->bindParam(12, $datos[11]);  // id_proveedor
					 $stmt->bindParam(13, $datos[12]); //id_categoria 	
				   // $stmt->execute();
				   
   
					if ($stmt->execute()) {
								if ($datos[13]["error"] > 0){
								 return "Error: ". $datos[13]['error'] ."";
								 }
							   else{
   
									 move_uploaded_file($datos[13]['tmp_name'],"../../vista/producto/imagenesProductos/" .time()."_".$datos[13]['name']);
							   }
   
							return  "1";	
				   
					}
				 } catch (PDOException $e) {
              
              	return  $e->getMessage();
              }
              
             

			
		}



	

		//información mas detallada del producto
		public function obtenDatos($codProducto){
			 
            $sql="SELECT producto.nombre as nombre, 
			producto.descripcion as descripcion, 
			categoria.nombre as categoria,
			 imagen, costo, unidad_compra, descuento_compra, 
			 proveedor.nombre as proveedor, 
			 precio,unidad_venta, iva, 
			 promocion.nombre as nombre_descuento, 
			 proveedor.telefono as telefono,
			 promocion.detalle as detalle, 
			 promocion.descuento as descuento 
			 FROM producto,categoria,proveedor,promocion 
			 WHERE producto.id_categoria=categoria.cod_categoria 
			 AND producto.id_proveedor=proveedor.cod_proveedor 
			 AND promocion.cod_promocion=producto.id_descuento 
			 AND producto.cod_producto= ?";
             $stmt2 = $this->mbd->prepare($sql);
             //$d=$codalumno;
            $stmt2->bindParam(1, $codProducto);
                // Ejecutamos
                $stmt2->execute();
                    // Ahora vamos a indicar el fetch mode cuando llamamos a fetch:
                $productos = $stmt2->fetchAll(PDO::FETCH_ASSOC);

				$proceso=new crud();
			 foreach($productos as $producto){
                   
            $datos=array(
                 'nombrep' => $producto['nombre'],
                'descripcion' => $producto['descripcion'],
                'categoria' => $producto['categoria'],
                'imagen' => $producto['imagen'], 
                'costo' => $proceso->converDouble($producto['costo']),
                'unidadCompra' => $proceso->convertUnidad($producto['unidad_compra']),
                'descuentoCompra' => $producto['descuento_compra'],
				'proveedor' =>$producto['proveedor'], 
				'telefono' =>$producto['telefono'],
                'precio' => $proceso->converDouble($producto['precio']),
                'unidadVenta' => $proceso->convertUnidad($producto['unidad_venta']),
                'iva' => $proceso->tieneIva($producto['iva']),
				'nombreDescuento' => $producto['nombre_descuento'],
				'detalle' => $producto['detalle'],
				'descuento' => $producto['descuento']
                );

           }

			return $datos;
		}


		//información producto para formulario actualización
		public function obtenDatosUpdate($codProducto){
			 
            $sql="SELECT cod_producto, 
				 nombre, 
				 descripcion, 
				 id_descuento, 
				 cantidad, 
				 precio, 
				 unidad_venta, 
				 iva, 
				 costo, 
				 unidad_compra, 
				 descuento_compra, 
				 imagen, 
				 id_proveedor, 
				 id_categoria
				 FROM producto
				 WHERE  cod_producto= ?";	
             $stmt2 = $this->mbd->prepare($sql);
             //$d=$codalumno;
            $stmt2->bindParam(1, $codProducto);
                // Ejecutamos
                $stmt2->execute();
                    // Ahora vamos a indicar el fetch mode cuando llamamos a fetch:
                $productos = $stmt2->fetchAll(PDO::FETCH_ASSOC);

				$proceso=new crud();
			 foreach($productos as $producto){
                   
            $datos=array(
                'codProducto' => $codProducto,
                'nombre' => $producto['nombre'],
				'descripcion' => $producto['descripcion'],
				'bodega'=> $producto['cantidad'],
                'categoria' => $producto['id_categoria'],
                'imagen' => $producto['imagen'], 
                'costo' => $proceso->converDouble($producto['costo']),
                'cantidadCompra' => $proceso->getCantidad($producto['unidad_compra']),
				'unidadCompra' => $proceso->getMedida($producto['unidad_compra']),
				'proveedor' =>$producto['id_proveedor'],
				'descuentoCompra' => $producto['descuento_compra'],
				'precio' => $proceso->converDouble($producto['precio']),
                'cantidadVenta' => $proceso->getCantidad($producto['unidad_venta']),
				'unidadVenta' => $proceso->getMedida($producto['unidad_venta']),
				'iva' => $producto['iva'],
				'codPromo' => $producto['id_descuento']
				);

           }

			return $datos;
		}


		public function actualizar($datos){
                $portada=null;

				if (strlen($datos[10])>3) {
					$sql="UPDATE producto SET  nombre=?, descripcion=?, id_descuento=?,  precio=?, unidad_venta=?, iva=?, costo=?, unidad_compra=?, descuento_compra=?, imagen=?, id_proveedor=?, id_categoria=? WHERE cod_producto=?";
				} else {
					$sql="UPDATE producto SET  nombre=?, descripcion=?, id_descuento=?,  precio=?, unidad_venta=?, iva=?, costo=?, unidad_compra=?, descuento_compra=?, id_proveedor=?, id_categoria=? WHERE cod_producto=?";
				}
				
			



			$stmt = $this->mbd->prepare($sql);
			$stmt->bindParam(1, $datos[1]);  //nombre=?,
			$stmt->bindParam(2, $datos[2]); // descripcion=?,
			$stmt->bindParam(3, $datos[3]); // id_descuento=?,
			$stmt->bindParam(4, $datos[4]); //precio=?, 
			$stmt->bindParam(5, $datos[5]);  // unidad_venta=?,
			$stmt->bindParam(6, $datos[6]); //iva=?,
			$stmt->bindParam(7,$datos[7]);   //costo=?,
			$stmt->bindParam(8, $datos[8]);	// unidad_compra=?, 
			$stmt->bindParam(9, $datos[9]);   // descuento_compra=?, 
				
			 if (strlen($datos[10])>3) {
				$portada=time()."_".$datos[10]; 
				$stmt->bindParam(10,$portada);   // imagen  $portada, 
				$stmt->bindParam(11, $datos[11]);  // id_proveedor 	 $_POST['proveedoresM'],
			    $stmt->bindParam(12, $datos[12]); //id_categoria   $_POST['categoriasM'],
				$stmt->bindParam(13, $datos[0]);   //$_POST['idProducto'],
            }else{
            	$stmt->bindParam(10, $datos[11]);  // id_proveedor
				$stmt->bindParam(11, $datos[12]); //id_categoria
				$stmt->bindParam(12, $datos[0]);   // $_POST['idProducto'],
            }

//$stmt->execute();

			if ($stmt->execute() ) {
                 			if ($datos[13]["error"] > 0 && isset($datos[10])){
  							//echo "Error: " . $datos[14]['error'] . "<br>";
  						    }
							else{

 		 						move_uploaded_file($datos[13]['tmp_name'],"../../vista/producto/imagenesProductos/".$portada);
							}

							
				echo "1";
                 }
			

		}

		
		public function eliminar($codalumno){
				  
					
    				$sql="DELETE FROM producto WHERE cod_producto=?";
					$stmt2 = $this->mbd->prepare($sql);
            		 $stmt2->bindParam(1, $codalumno);
                // Ejecutamos
               // $stmt2->execute();
			
			if ($stmt2->execute()) {
                 	/*$stmt4 = $dbh->prepare("SELECT images FROM galery WHERE codHospedje= ?");
				    $stmt4->bindParam(1, $codalumno);
				    $stmt4->execute();
					// Ahora vamos a indicar el fetch mode cuando llamamos a fetch:
				$productos = $stmt4->fetchAll(PDO::FETCH_ASSOC);

				foreach($productos as $producto){
					$codi="../subidas/".$producto['images'];
					unlink($codi);
				}	*/	
				
                 }

              	return  "1";
		}

		public  function selectGalery($value){

	 $dbname='viajes';
  $user='administrador';
  $password='administrador';

    $dsn = "mysql:host=localhost;dbname=$dbname";
    $dbh = new PDO($dsn, $user, $password);


 $stmt2 = $dbh->prepare("SELECT  idImages,images FROM galeryE WHERE idExperience=?");
				  $stmt2->bindParam(1, $value);
				// Ejecutamos
				$stmt2->execute();
					// Ahora vamos a indicar el fetch mode cuando llamamos a fetch:
				$productos = $stmt2->fetchAll(PDO::FETCH_ASSOC);

                  $res.="<table class=table table-hover table-condensed table-bordered>";
				foreach($productos as $producto){
					//$cod=$producto['codHospedaje'];
							$fe="subidas/".$producto['images'];
						    $idf=$producto['idImages'];
					$res.="<tr><td><img src='".$fe."' width=200 height=100></td><td>
 		<span class='btn btn-danger btn-sm' onclick='eliminarG(".$idf.");'>
							<span class='fa fa-trash'></span>
						</span></td></tr>";
				}
				 $res.="</table>";

				 return $res;

				// <td><a onclick='eliminar(".$idf.")'>eliminar</a></td></tr>";
	
}


	          function selectAll(){
				$sql="SELECT cod_producto,
				producto.nombre as nombre,
				proveedor.nombre as proveedor,
				precio,
				producto.descripcion as descripcion,
				promocion.nombre as descuento,
				categoria.nombre as categoria,
				iva 
				FROM producto,categoria,proveedor,promocion 
				WHERE producto.id_categoria=categoria.cod_categoria 
				AND producto.id_proveedor=proveedor.cod_proveedor
				AND promocion.cod_promocion=producto.id_descuento";

				$stmt = $this->mbd->prepare($sql);

				$stmt->execute();
				$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

				return $productos;
			}

             public function getSelectProductos(){
				$sql="SELECT cod_producto,
				nombre
				FROM producto";

				$stmt = $this->mbd->prepare($sql);

				$stmt->execute();
				$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

				return $productos;
			 }

		public 	function tieneIva($ans){
				if ($ans==1) {
					return 'si';
				} else {
					return 'no';
				}
				
			}
		public	function converDouble($numero){
				
				return number_format($numero,2);
			}


	    public function convertUnidad($palabra){
			$respuesta="";
			$claves = preg_split("/[\s]+/", $palabra);
			$respuesta = $claves[0]." ".$this->unidad[$claves[1]];
			return $respuesta;
		}

		public function getUnidad(){
			return $this->unidad;
		}

		public function getMedida($palabra){
			$respuesta="";
			$claves = preg_split("/[\s]+/", $palabra);
			$respuesta =$claves[1];
			return $respuesta;
		}

		public function getCantidad($palabra){
			$respuesta="";
			$claves = preg_split("/[\s]+/", $palabra);
			$respuesta = $claves[0];
			return $respuesta;
		}
	}
   

     


	


 ?>

 
 		
 		
 	


