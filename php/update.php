<?php 

if (isset($_GET['id'])) {
	include "dbconn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: read.php");
    }


}else if(isset($_POST['update'])){
    include "../dbconn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

        if(!empty($_POST['fname']))
       {
                $fname = validate($_POST['fname']);
                $id = validate($_POST['id']);
        
                $sql = "UPDATE users
                       SET fname='$fname'
                       WHERE id=$id ";
               $result = mysqli_query($conn, $sql);
               if ($result) {
                         header("Location: ../read.php?success=successfully updated");
               }else {
                  header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
               }
       }

       if(!empty($_POST['username']))
       {
                $username = validate($_POST['username']);
                $id = validate($_POST['id']);
        
                $sql = "UPDATE users
                       SET username='$username'
                       WHERE id=$id ";
               $result = mysqli_query($conn, $sql);
               if ($result) {
                         header("Location: ../read.php?success=successfully updated");
               }else {
                  header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
               }
       }

       if(!empty($_POST['mobileno']))
       {
                $mobileno = validate($_POST['mobileno']);
                $id = validate($_POST['id']);
        
                $sql = "UPDATE users
                       SET mobileno='$mobileno'
                       WHERE id=$id ";
               $result = mysqli_query($conn, $sql);
               if ($result) {
                         header("Location: ../read.php?success=successfully updated");
               }else {
                  header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
               }
       }

       if(!empty($_POST['email']))
       {
                $email = validate($_POST['email']);
                $id = validate($_POST['id']);
        
                $sql = "UPDATE users
                       SET email='$email'
                       WHERE id=$id ";
               $result = mysqli_query($conn, $sql);
               if ($result) {
                         header("Location: ../read.php?success=successfully updated");
               }else {
                  header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
               }
       }
        
       if(!empty($_POST['pass']))
       {
                $pass = validate($_POST['pass']);
                $id = validate($_POST['id']);

                $pass = password_hash($pass, PASSWORD_DEFAULT);
        
                $sql = "UPDATE users
                       SET password='$pass'
                       WHERE id=$id ";
               $result = mysqli_query($conn, $sql);
               if ($result) {
                         header("Location: ../read.php?success=successfully updated");
               }else {
                  header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
               }
       }

       else
       {
        header("Location: ../read.php?id=$id&error=nothing updated&$user_data");
       }
	
}else {
	header("Location: read.php");
}
?>