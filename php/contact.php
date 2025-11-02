<?php

if(isset($_POST['c_user']) && 
   isset($_POST['c_email']) &&
   isset($_POST['c_message']))
   {

    include "../db_conn.php";

    $c_user = $_POST['c_user'];
    $c_email = $_POST['c_email'];
    $c_message = $_POST['c_message'];

    $data = "c_user=".$c_user."&c_email=".$c_email."&c_message=".$c_message;
    
    

               // Insert into Database
               $sql = "INSERT INTO contact(c_user, c_email, c_message) 
                 VALUES(?,?,?)";
               $stmt = $conn->prepare($sql);
               $stmt->execute([$c_user, $c_email, $c_message]);

               header("Location: ../Contact.php?success=You have send message successfully");
                exit;
      
  }
else {
	header("Location: ../Contact.php?error=error");
	exit;
}

?>