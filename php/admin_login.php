<?php 
session_start();

if(isset($_POST['aname']) && 
   isset($_POST['pass'])){

    include "../db_conn.php";

    $aname = $_POST['aname'];
    $pass = $_POST['pass'];

    $data = "aname=".$aname;
    
    if(empty($aname)){
    	$em = "User name is required";
    	header("Location: ../admin_login.php?error=$em&$data");
	    exit;
    }else if(empty($pass)){
    	$em = "Password is required";
    	header("Location: ../admin_login.php?error=$em&$data");
	    exit;
    }else {

    	$sql = "SELECT * FROM admins WHERE adminname = ?";
    	$stmt = $conn->prepare($sql);
    	$stmt->execute([$aname]);

      if($stmt->rowCount() == 1){
          $admin = $stmt->fetch();

          $id =  $admin['id'];
          $fname =  $admin['fname'];
          $adminname =  $admin['adminname'];
          $password =  $admin['password'];
          $pp =  $admin['pp'];
          $mobileno =  $admin['mobileno'];
          $email =  $admin['email'];

          if($adminname === $aname){
             if(password_verify($pass, $password)){
                 $_SESSION['id'] = $id;
                 $_SESSION['fname'] = $fname;
                 $_SESSION['adminname'] = $adminname;
                 $_SESSION['pp'] = $pp;
                 $_SESSION['mobileno'] = $mobileno;
                 $_SESSION['email'] = $email;

                 header("Location: ../read.php");
                 exit;
             }else {
               $em = "Incorect Admin name or password";
               header("Location: ../admin_login.php?error=$em&$data");
               exit;
            }

          }else {
            $em = "Incorect Admin name or password";
            header("Location: ../admin_login.php?error=$em&$data");
            exit;
         }

      }else {
         $em = "Incorect Admin name or password";
         header("Location: ../admin_login.php?error=$em&$data");
         exit;
      }
    }


}else {
	header("Location: ../admin_login.php?error=error");
	exit;
}
?>