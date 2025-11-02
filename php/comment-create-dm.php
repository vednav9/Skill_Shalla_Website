<?php 

session_start();
if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {

if (isset($_POST['commentpost'])) {
	include "../dbconn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}
	
	$comments = validate($_POST['comments']);
	$comment_name = validate($_POST['comment_name']);
	$comment_pp = validate($_POST['comment_pp']);
	$comment_id = validate($_POST['comment_id']);
	$dm1 = $_POST['dm1'];
	$dm2 = $_POST['dm2'];
	$dm3 = $_POST['dm3'];

	$user_data = 'comments='.$comments. '&comment_name='.$comment_name. '&comment_pp='.$comment_pp. '&comment_id='.$comment_id;

	if (empty($comments)) {
		header("Location: ../index.php?error=Name is required&$user_data");
	}else {
		
		
       $sql = "INSERT INTO comment_dm(comment_name, comment_pp, comments, dm1, dm2, dm3) 
               VALUES('$comment_name', '$comment_pp', '$comments', '$dm1', '$dm2', '$dm3')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
		header('Location: ' . $_SERVER['HTTP_REFERER']);
       }else {
          header('Location: ' . $_SERVER['HTTP_REFERER']);
       }
	}

}

}else {
	header("Location: login.php");
	exit;
}
?>