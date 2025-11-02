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
	$bsc1 = $_POST['bsc1'];
	$bsc2 = $_POST['bsc2'];
	$bsc3 = $_POST['bsc3'];
	$bsc4 = $_POST['bsc4'];
	$bsc5 = $_POST['bsc5'];

	$user_data = 'comments='.$comments. '&comment_name='.$comment_name. '&comment_pp='.$comment_pp. '&comment_id='.$comment_id;

	if (empty($comments)) {
		header("Location: ../index.php?error=Name is required&$user_data");
	}else {
		
		
       $sql = "INSERT INTO comment_bsc(comment_name, comment_pp, comments, bsc1, bsc2, bsc3, bsc4, bsc5) 
               VALUES('$comment_name', '$comment_pp', '$comments', '$bsc1', '$bsc2', '$bsc3', '$bsc4', '$bsc5')";
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