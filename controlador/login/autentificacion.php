<?php
  	require_once "../../database/db.php";
    require_once "../../session/logeo.php";
    
    $logearse= new Login($_POST['user'],$_POST['pass']); 
    $logearse->setconection($newConection);
    $logearse->login();

?>