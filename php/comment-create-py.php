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
	$p1 = $_POST['p1'];
	$p2 = $_POST['p2'];
	$p3 = $_POST['p3'];

	$user_data = 'comments='.$comments. '&comment_name='.$comment_name. '&comment_pp='.$comment_pp. '&comment_id='.$comment_id;

	if (empty($comments)) {
		header("Location: ../index.php?error=Name is required&$user_data");
	}else {
		
		
       $sql = "INSERT INTO comment_py(comment_name, comment_pp, comments, p1, p2, p3) 
               VALUES('$comment_name', '$comment_pp', '$comments', '$p1', '$p2', '$p3')";
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