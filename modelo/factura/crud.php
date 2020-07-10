<?php 
       
 
	class Factura{
		
        private $mbd ;
      
        
        public function setconection($conectar){
			$this->mbd = $conectar->openConnection();
        }
        
        function selectAll(){
            $sql="SELECT cod_factura FROM factura";

            $stmt = $this->mbd->prepare($sql);

            $stmt->execute();
            $proveedores = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $proveedores;
         } 
         
         





    }