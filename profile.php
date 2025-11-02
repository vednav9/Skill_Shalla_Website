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
   <title>profile</title>

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
      <a href="profile.php" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="home.php"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="about.php"><i class="fas fa-question"></i><span>About</span></a>
      <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>Courses</span></a>
      <a href="contact.php"><i class="fas fa-headset"></i><span>Contact Us</span></a>
   </nav>

</div>

<section class="user-profile">

   <h1 class="heading">your profile</h1>

   <div class="info">

      <div class="user">
         <img src="upload/<?=$_SESSION['pp']?>" alt="">
         <h3><?=$_SESSION['fname']?></h3>
         <a href="logout.php" class="inline-btn"><i class="fas fa-sign-out"></i> Log out</a>
      </div>
   
      <div class="box-container">

         <div class="box">
            <div class="flex">
               <i class="fas fa-user-alt"></i>
               <div>
                  <span><?=$_SESSION['fname']?></span><br>
                  <span><?=$_SESSION['mobileno']?></span><br>
                  <span><?=$_SESSION['email']?></span>

               </div>
            </div>
            <a href="update-profile.php" class="inline-btn" style="margin-left: 5rem">Update Profile</a>
         </div>
   
   
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