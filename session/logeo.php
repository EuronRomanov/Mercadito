<?php
  class Login{
	public $usuario;
	public $password;
	public $error1="Por favor ingrese un usuario o una contraseña";
	public $error2="Usuario o Contraseña incorrecta.";
	private $mbd;
      
        
	  public function setconection($conectar){
		  $this->mbd = $conectar->openConnection();
	  }
	    //Constructor de la clase
		public function __construct()
		{
			
				$a = func_get_args();
				$i = func_num_args();
				if (method_exists($this,$f='__construct'.$i)) {
					call_user_func_array(array($this,$f),$a);
				} 
		}

        public function __construct1(){}

		//Segundo contructor vacio
		function __construct2($usuario,$password)
		{
			$this->usuario=$usuario;
			$this->password=$password;
		} 

	
		//Funcion para validar usuarios
		public function login()
		{
			$usuario="";
			$password="";

            $consulta = "SELECT * FROM administradores  WHERE email='".$this->usuario."' AND password='".$this->password."'";
			$resultado = $this->mbd->query($consulta);
            foreach($resultado as $registro) {
                $usuario=$registro[4]; 
                $password=$registro[5];
            }
            //$consulta=mysql_query("select login('$usuario','$password');");
			//$rel=mysql_fetch_array($consulta);
			if(strlen($usuario)>3)
			{
				session_start();
				$_SESSION["user"] = $usuario;
                $_SESSION["codUser"] = $password;
                echo "1";
    		//header("Location: index.php");
			}else
			if(empty($usuario) or empty($password))
			{
				//echo  $this->error1;	
				echo "Datos:".$usuario." ".$password;
			}
			else
			{
				echo $this->error2;				
		    }
		}	
		//Funcion para cerrar la session
		public function cerrar_session()
		{
			session_start();
			session_unset();
			session_destroy();
			header("Location: ../../index.php");
		}
		//Funcion comprobar  session existen
		public function existe_session()
		{
			session_start();
			if (isset($_SESSION["user"])) {
			header("location:../cuenta/cuenta.php");
			}
		}
		public function isAdministrador()
		{
			session_start();
			if ($_SESSION["cargo"]!="administrador") {
			header("location:../../index.php");
			}
		}
		public function isRepartidor()
		{
			session_start();
			if ($_SESSION["cargo"]!="repartidor") {
			header("location:../../index.php");
			}
		}

}
?>
