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

	$sql = "DELETE FROM contact
	        WHERE id=$id";
   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location: ../AdContactus.php?success=successfully deleted");
   }else {
      header("Location: ../AdContactus.php?error=unknown error occurred&$user_data");
   }

}else {
	header("Location: ../AdContactus.php");
}