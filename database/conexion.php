<?php


class Connection {

    private  $dbhost;
    
    private  $dbuser;
    
    private  $dbpass;

    private $dbname;

    private $location;
    
    private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
    
    protected $con;



    public function __construct($Host, $DBName, $DBUser, $DBPassword)
	{
		
		$this->dbhost = $Host;
        $this->dbname = $DBName;
        $this->dbuser = $DBUser;
        $this->dbpass = $DBPassword; 
        $this->location="mysql:host=$Host;dbname=$DBName";       
	}
	

     
     public function openConnection(){
    
    try {
    
     $this->con = new PDO($this->location, $this->dbuser ,$this->dbpass);
     $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
     return $this->con;
    
    }catch (PDOException $e) {
    
        echo "There is some problem in connection: " . $e->getMessage();
    
    }
    
                   }
    
    public function closeConnection() {
    
           $this->con = null;
    }
    
    }
?>