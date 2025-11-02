<?php 
session_start();
@include "../dbconn.php";
if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {

if (isset($_POST["update-button"])) {
$id = $_SESSION["id"];

$sql = "SELECT dmnum FROM users WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$current_number = $row["dmnum"];
if($current_number >= 4)
{
   echo "";
}
else
{
   $new_number = 4;
   
   $sql = "UPDATE users SET dmnum = $new_number WHERE id = $id";
   if (mysqli_query($conn, $sql)) {
     echo "";
   } else {
     echo "Error updating number: " . mysqli_error($conn);
   }
}
header("Location: ../courses.php");
}
?>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<title>Skill Shalla
</title>
<link rel="stylesheet" href="../css/quiz.css">
</head>
<body>
   
<div class="quiz-container" id="quiz">
    <div class="quiz-header">
      <h2 class="fw-bold  mb-2 mb-lg-0 mb-sm-0"> <img src="../images/title.PNG" class="center"> SKill Shalla</h2>
      <h3 class="fw-bold  mb-2 mb-lg-0 mb-sm-0"> Digital Marketing</h3>
      <h3 class="fw-bold  mb-2 mb-lg-0 mb-sm-0"> Quiz Levels</h3>
      <a id="AnchorChange" href="../quiz/DM_quiz.php">Level-1</a> 
      <a id="AnchorChange" href="../quiz/DM_quiz2.php">Level-2</a>
      <br>
      <form action="" method="post" class="flex" enctype="multipart/form-data">
         <button id="update-button" name="update-button">Completed</button> 
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
               <script>
               $(document).ready(function() {
                  $("#update-button").click(function() {
                     $.ajax({
                     url: "<?php echo $_SERVER['PHP_SELF']; ?>",
                     type: "POST",
                     data: { "update-button": true },
                     success: function(data) {
                        },
                     error: function() {
                     }
                     });
                  });
               });
               </script>
         </form>
    </div>
  </div>
</body>
</html>

<?php }else {
	header("Location: login.php");
	exit;
} ?>