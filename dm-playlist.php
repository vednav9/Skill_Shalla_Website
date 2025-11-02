<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>video playlist</title>

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
         <a href="contact.php"><i class="fas fa-headset"></i><span>Contact us</span></a>
      </nav>

   </div>


   <section class="playlist-videos">

      <h1 class="heading">Digital Marketing - playlist videos</h1>

      <div class="box-container">

         <a class="box" href="dm-1-watch-video.php">
            <i class="fas fa-play"></i>
            <img src="images/DGM.jpg" alt="">
            <h3>Digital Marketing tutorial (part 01)</h3>
         </a>

         <a class="box" href="dm-2-watch-video.php">
            <i class="fas fa-play"></i>
            <img src="images/DGM.jpg" alt="">
            <h3>Digital Marketing tutorial (part 02)</h3>
         </a>

         <a class="box" href="dm-3-watch-video.php">
            <i class="fas fa-play"></i>
            <img src="images/DGM.jpg" alt="">
            <h3>Digital Marketing tutorial (part 03)</h3>
         </a>

      </div>
      <h3>Now, Attempt the Quiz to get the Certificate 
         <a href="quiz/DM_home.php" class="inline-btn">Quiz</a> 
         <a href="images/Digital-marketing.pptx" class="inline-btn" style="margin-left:2rem" Download>Download PPT</a>
      </h3>


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