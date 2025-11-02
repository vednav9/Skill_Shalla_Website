<?php  

include "dbconn.php";

$sql = "SELECT * FROM admins ORDER BY id DESC";
$result = mysqli_query($conn, $sql);