<?php 
session_start();
@include "dbconn.php";
if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {

if (isset($_POST["update-button"])) {
$id = $_SESSION["id"];

$sql = "SELECT bscnum FROM users WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$current_number = $row["bscnum"];
if($current_number >= 5)
{
   echo "";
}
else
{
   $new_number = 5;
   
   $sql = "UPDATE users SET bscnum = $new_number WHERE id = $id";
   if (mysqli_query($conn, $sql)) {
     echo "";
   } else {
     echo "Error updating number: " . mysqli_error($conn);
   }
}
header("Location: bsc-playlist.php");
}

$id = $_SESSION["id"];
$sql = "SELECT * FROM users WHERE id = $id AND bscnum >= '5'";
$result = mysqli_query($conn, $sql);

// Check if the query returned any results
if (mysqli_num_rows($result) > 0) {
    // Set a session variable to indicate that 2 is present in the database
    $_SESSION['is_present'] = true;
}
else
{
   $_SESSION['is_present'] = false;
}

$sql = "SELECT * FROM comment_bsc WHERE bsc5 = 1 ORDER BY comment_id DESC";
$resultcomment = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>watch</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/courses.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a class="logo" href="home.php">
      <img src="images/title.png">
       </a>

      <form action="#" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
            <img src="upload/<?=$_SESSION['pp']?>" class="image" alt="">
            <h3 class="name"><?=$_SESSION['fname']?></h3>
            <a href="profile.php" class="btn">view profile</a>
            <div class="flex-btn">
               <a href="logout.php" class="option-btn"><i class="fas fa-sign-out"></i> log out</a>
            </div>
         </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
         <img src="upload/<?=$_SESSION['pp']?>" class="image" alt="">
         <h3 class="name"><?=$_SESSION['fname']?></h3>
         <a href="profile.php" class="btn">View profile</a>
      </div>

   <nav class="navbar">
      <a href="home.php"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="about.php"><i class="fas fa-question"></i><span>About</span></a>
      <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>Courses</span></a>
      <a href="contact.php"><i class="fas fa-headset"></i><span>Contact Us</span></a>
   </nav>

</div>

<section class="watch-video">

   <div class="video-container">
      <div class="video">
         <video src="images/Basic/bsc-vid-5.avi" controls poster="images/js.jpg" id="video"></video>
      </div>
      <h3 class="title">Introduction to Programming and Coding (part 05)</h3>
      <div class="info">
      <?php if (isset($_SESSION['is_present']) && $_SESSION['is_present']){ ?>
              <p class="title"> <i class="fa-sharp fa-solid fa-circle-check fa-fade" style="color: #00c200;"> </i> Watched</p>
            <?php } ?>
      </div>

      <form action="" method="post" class="flex" enctype="multipart/form-data">
         <a href="bsc-playlist.php" class="inline-btn">view playlist</a>
         <a class= "inline-btn" id="update-button" href="bsc-playlist.php" name="update-button">Save and Finish</a>
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
      <p class="description">
         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque labore ratione, hic exercitationem mollitia obcaecati culpa dolor placeat provident porro.
         Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid iure autem non fugit sint. A, sequi rerum architecto dolor fugiat illo, iure velit nihil laboriosam cupiditate voluptatum facere cumque nemo!
      </p>
   </div>

</section>

<section class="comments">

   <h1 class="heading">Comments</h1>

   <form action="php/comment-create-bsc.php" 
		   method="post" class="add-comment">
      <h3>add comments</h3>
      <textarea type="name" name="comments" value="<?php if(isset($_GET['comments'])) echo($_GET['comments']); ?>" placeholder="post any comment" required maxlength="1000" cols="30" rows="10"></textarea>
      <input type="hidden" value="<?=$_SESSION['fname']?>" class="inline-btn" name="comment_name">
      <input type="hidden" value="<?=$_SESSION['pp']?>" class="inline-btn" name="comment_pp">
      <input type="hidden" value="0" class="inline-btn" name="bsc1">
      <input type="hidden" value="0" class="inline-btn" name="bsc2">
      <input type="hidden" value="0" class="inline-btn" name="bsc3">
      <input type="hidden" value="0" class="inline-btn" name="bsc4">
      <input type="hidden" value="1" class="inline-btn" name="bsc5">
      <input type="submit" value="add comment" class="inline-btn" name="commentpost">
   </form>

   <h1 class="heading">user comments</h1>

   <?php if (mysqli_num_rows($resultcomment)) { 
   while($rows = mysqli_fetch_assoc($resultcomment)){
      
   ?>
   <div class="box-container">

      <div class="box">
         <div class="user">
            <img src="upload/<?=$rows['comment_pp']?>" alt="">
            <div>
               <h3><?=$rows['comment_name']?></h3>
            </div>
         </div>
         <div class="comment-box"><?php echo $rows['comments']; ?></div>
      </div>

   </div>
   <?php } } ?>

</section>


<footer class="footer">

   &copy; copyright @ 2022 by <span>Skill Shalla</span> | all rights reserved!

</footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>

<?php }else {
	header("Location: login.php");
	exit;
} ?>