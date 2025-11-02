<?php 

$sName = "sql307.infinityfree.com";
$uName = "if0_38606148";
$pass = "MLJ63GlIQ8";
$db_name = "if0_38606148_auth_db";


try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}