<?php 
session_start();
@include "dbconn.php";

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {

//DM
$id = $_SESSION["id"];
$sql = "SELECT * FROM users WHERE id = $id AND dmnum >= '4'";
$result_dm = mysqli_query($conn, $sql);

// Check if the query returned any results
if (mysqli_num_rows($result_dm) > 0) {
    // Set a session variable to indicate that 2 is present in the database
    $_SESSION['is_present_dm'] = true;
}
else
{
   $_SESSION['is_present_dm'] = false;
}

//PY
$sql = "SELECT * FROM users WHERE id = $id AND pynum >= '4'";
$result_py = mysqli_query($conn, $sql);

// Check if the query returned any results
if (mysqli_num_rows($result_py) > 0) {
    // Set a session variable to indicate that 2 is present in the database
    $_SESSION['is_present_py'] = true;
}
else
{
   $_SESSION['is_present_py'] = false;
}

//J
$sql = "SELECT * FROM users WHERE id = $id AND jnum >= '7'";
$result_j = mysqli_query($conn, $sql);

// Check if the query returned any results
if (mysqli_num_rows($result_j) > 0) {
    // Set a session variable to indicate that 2 is present in the database
    $_SESSION['is_present_j'] = true;
}
else
{
   $_SESSION['is_present_j'] = false;
}

//BSC
$sql = "SELECT * FROM users WHERE id = $id AND bscnum >= '6'";
$result_j = mysqli_query($conn, $sql);

// Check if the query returned any results
if (mysqli_num_rows($result_j) > 0) {
    // Set a session variable to indicate that 2 is present in the database
    $_SESSION['is_present_bsc'] = true;
}
else
{
   $_SESSION['is_present_bsc'] = false;
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>courses</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/courses.css">
   <link rel="icon" href="images/title.PNG" type="image/x-icon">
</head>
<body>

<header class="header">
   
   <section class="flex">

      <a class="logo" href="home.php">
        <img src="images/title.PNG">
      </a>

      <form action="search.php" method="post" class="search-form">
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

<section class="courses">

      <h1 class="heading">our courses</h1>

      <div class="box-container">

         <div class="box">
            <div class="thumb">
               <img src="images/python.jpg" alt="">
               <span>3 videos</span>
            </div>
            <h3 class="title">Python Programming <?php if (isset($_SESSION['is_present_py']) && $_SESSION['is_present_py']){ ?>
               <i class="fa-solid fa-circle-check fa-beat-fade" style="color: #099a26;"></i>
            <?php } ?> </h3>
            <a href="py-playlist.php" class="inline-btn">view playlist</a>
            <?php if (isset($_SESSION['is_present_py']) && $_SESSION['is_present_py']){ ?>
               <a href="certificate/py_certificate.php" class="inline-btn"><i class="fas fa-award"></i> Certificate</a>
            <?php } ?>
         </div>

         <div class="box">
            <div class="thumb">
               <img src="images/DGM.jpg" alt="">
               <span>3 videos</span>
            </div>

            <h3 class="title">Digital Marketing <?php if (isset($_SESSION['is_present_dm']) && $_SESSION['is_present_dm']){ ?>
               <i class="fa-solid fa-circle-check fa-beat-fade" style="color: #099a26;"></i>
            <?php } ?> </h3>
            <a href="DM-playlist.php" class="inline-btn">view playlist</a>
            <?php if (isset($_SESSION['is_present_dm']) && $_SESSION['is_present_dm']){ ?>
               <a href="certificate/dm_certificate.php" class="inline-btn"><i class="fas fa-award"></i> Certificate</a>
            <?php } ?>
         </div>

         <div class="box">
            <div class="thumb">
               <img src="images/java.jpg" alt="">
               <span>6 videos</span>
            </div>
            <h3 class="title">Java Programming <?php if (isset($_SESSION['is_present_j']) && $_SESSION['is_present_j']){ ?>
               <i class="fa-solid fa-circle-check fa-beat-fade" style="color: #099a26;"></i>
            <?php } ?> </h3>
            <a href="java-playlist.php" class="inline-btn">view playlist</a>
            <?php if (isset($_SESSION['is_present_j']) && $_SESSION['is_present_j']){ ?>
               <a href="certificate/java_certificate.php" class="inline-btn"><i class="fas fa-award"></i> Certificate</a>
            <?php } ?>
         </div>
         
         <div class="box">
            <div class="thumb">
               <img src="images/js.jpg" alt="">
               <span>5 videos</span>
            </div>
            <h3 class="title">Introduction to Coding <?php if (isset($_SESSION['is_present_bsc']) && $_SESSION['is_present_bsc']){ ?>
               <i class="fa-solid fa-circle-check fa-beat-fade" style="color: #099a26;"></i>
            <?php } ?> </h3>
            <a href="bsc-playlist.php" class="inline-btn">view playlist</a>
            <?php if (isset($_SESSION['is_present_bsc']) && $_SESSION['is_present_bsc']){ ?>
               <a href="certificate/bsc_certificate.php" class="inline-btn"><i class="fas fa-award"></i> Certificate</a>
            <?php } ?>
         </div>

         <div class="box">
            <div class="thumb">
               <img src="images/HTML.png" alt="">
               <span>0 videos</span>
            </div>
            <h3 class="title">HTML</h3>
            <a href="#" class="inline-btn">view playlist</a>
         </div>

         <div class="box">
            <div class="thumb">
               <img src="images/CSS.png" alt="">
               <span>0 videos</span>
            </div>
            <h3 class="title">CSS</h3>
            <a href="#" class="inline-btn">view playlist</a>
         </div>

      </div>

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