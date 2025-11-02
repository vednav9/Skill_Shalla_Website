<?php 

if(isset($_POST['fname']) && 
   isset($_POST['aname']) &&  
   isset($_POST['email']) &&  
   isset($_POST['mobileno']) &&  
   isset($_POST['pass']) &&
   isset($_POST['cpass'])){

    include "../db_conn.php";

    $fname = $_POST['fname'];
    $aname = $_POST['aname'];
    $email = $_POST['email'];
    $mobileno = $_POST['mobileno'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];

    $data = "fname=".$fname."&aname=".$aname."&email=".$email."&mobileno=".$mobileno;
    
    if (empty($fname)) {
    	$em = "Full name is required";
    	header("Location: ../admin-register.php?error=$em&$data");
	    exit;
    }else if(empty($aname)){
    	$em = "Admin name is required";
    	header("Location: ../admin-register.php?error=$em&$data");
	    exit;
    }else if(empty($email)){
    	$em = "Email id is required";
    	header("Location: ../admin-register.php?error=$em&$data");
	    exit;
    }else if(empty($mobileno)){
    	$em = "Phone Number is required";
    	header("Location: ../admin-register.php?error=$em&$data");
	    exit;
    }else if(empty($pass)){
    	$em = "Password is required";
    	header("Location: ../admin-register.php?error=$em&$data");
	    exit;
    }else if(empty($cpass)){
    	$em = "Confirm your password";
    	header("Location: ../admin-register.php?error=$em&$data");
	    exit;
    }else if($pass != $cpass){
    	$em = "Password not matched";
    	header("Location: ../admin-register.php?error=$em&$data");
	    exit;
    }else {
      // hashing the password
      $pass = password_hash($pass, PASSWORD_DEFAULT);

       	$sql = "INSERT INTO admins(fname, adminname, email, mobileno, password) 
       	        VALUES(?,?,?,?,?)";
       	$stmt = $conn->prepare($sql);
       	$stmt->execute([$fname, $aname, $email, $mobileno, $pass]);

       	header("Location: ../admin-register.php?success=Your account has been created successfully");
   	    exit;
    }


}else {
	header("Location: ../admin-register.php?error=error");
	exit;
}
?>