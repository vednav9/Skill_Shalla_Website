<?php  

include "dbconn.php";

$sql = "SELECT * FROM contact ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>