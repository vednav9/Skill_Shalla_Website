<?php  

if(isset($_GET['id'])){
   include "../dbconn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "DELETE FROM admins
	        WHERE id=$id";
   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location: ../read_admin.php?success=successfully deleted");
   }else {
      header("Location: ../read_admin.php?error=unknown error occurred&$user_data");
   }

}else {
	header("Location: ../read_admin.php");
}