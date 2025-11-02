<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
if(isset($_POST['submit'])){
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
                $id = validate($_SESSION['id']);
        
                $sql = "UPDATE users
                       SET fname='$fname'
                       WHERE id=$id ";
               $result = mysqli_query($conn, $sql);
               if ($result) {
                         echo "";
               }else {
                  header("Location: ../update-profile.php?id=$id&error=unknown error occurred&$user_data");
               }
       }

       if(!empty($_POST['username']))
       {
                $username = validate($_POST['username']);
                $id = validate($_SESSION['id']);
        
                $sql = "UPDATE users
                       SET username='$username'
                       WHERE id=$id ";
               $result = mysqli_query($conn, $sql);
               if ($result) {
                         echo "";
               }else {
                  header("Location: ../update-profile.php?id=$id&error=unknown error occurred&$user_data");
               }
       }

       if(!empty($_POST['mobileno']))
       {
                $mobileno = validate($_POST['mobileno']);
                $id = validate($_SESSION['id']);
        
                $sql = "UPDATE users
                       SET mobileno='$mobileno'
                       WHERE id=$id ";
               $result = mysqli_query($conn, $sql);
               if ($result) {
                         echo "";
               }else {
                  header("Location: ../update-profile.php?id=$id&error=unknown error occurred&$user_data");
               }
       }

       if(!empty($_POST['email']))
       {
                $email = validate($_POST['email']);
                $id = validate($_SESSION['id']);
        
                $sql = "UPDATE users
                       SET email='$email'
                       WHERE id=$id ";
               $result = mysqli_query($conn, $sql);
               if ($result) {
                         echo "";
               }else {
                  header("Location: ../update-profile.php?id=$id&error=unknown error occurred&$user_data");
               }
       }
        
       if(!empty($_POST['pass']))
       {
                $pass = validate($_POST['pass']);
                $id = validate($_SESSION['id']);
                $pass = password_hash($pass, PASSWORD_DEFAULT);
                $sql = "UPDATE users
                          SET password='$pass'
                          WHERE id=$id ";
                  $result = mysqli_query($conn, $sql);
                  if ($result) {
                            echo "";
                  }else {
                     header("Location: ../update-profile.php?id=$id&error=unknown error occurred&$user_data");
                  }

       }

        header("Location: ../logout.php");
	
}else {
	header("Location: profile.php");
}
}else {
	header("Location: login.php");
	exit;
}
?>