<?php

/*information of conection to DB*/
define('DB_HOST', 'localhost');// "127.0.0.1"
define('DB_USER', 'root');//User of base de datos
define('DB_PASS', 'root');//Pasword of user in the data base
define('DB_NAME', 'mercadito');//name of data base
$filecon="../../database/conexion.php";
if (file_exists($filecon)) {
    require_once "../../database/conexion.php";
} else {
    require_once "../../../database/conexion.php";
}


$newConection=new Connection(DB_HOST, DB_NAME, DB_USER, DB_PASS); 