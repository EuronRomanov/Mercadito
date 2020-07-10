<?php 
//include_once 'db.php';
//echo DB_NAME;DB_HOST
$dbhost=DB_HOST;
$dbname=DB_NAME;
$dbuser=DB_USER;
$dbpass=DB_PASS;
try{
$mbd = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser ,$dbpass);
$mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
} catch (PDOException $e) {
    echo "¡Error!: " . $e->getMessage();
    die();
}


?>