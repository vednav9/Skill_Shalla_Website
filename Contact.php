<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
 ?>

<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, intial-scale=1.0">
  <title>Skill Shalla
  </title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" href="images\title.PNG" type="image/x-icon">


</head>

<body>
  <!--Header Start-->
  <header>
    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-lg">
        <a class="navbar-brand" href="home.php">
          <h2 class="fw-bold  mb-2 mb-lg-0 mb-sm-0"> <img src="images/title.png"> Skill Shalla</h2>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="bi bi-list mobile-nav-toggle"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto mb-2 mb-lg-0 action">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="home.php">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="About.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="courses.php">Courses </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="Contact.php">Contact us </a>
            </li>
          </ul>
          <ul class="navbar-nav mb-2 mb-lg-0 action-menu">
            <li class="nav-item">
              <a class="nav-link " href="logout.php">
              <i class="fas fa-sign-out"></i> Logout
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Navbar End-->
  </header>
  <!--Header End-->
  <!-- Contact Us-->
  <div class="k1">
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">CO Dept, New Horizon Institute of Technology and Management</div>
          <div class="text-two">Thane</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+ 91 9004074169</div>
          <div class="text-two">+ 91 8828475075</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">skillshalla4@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from
          here. It's my pleasure to help you.</p>

        <form action="php/contact.php" method="post">
        <?php
            if(isset($error))
            {
                foreach($error as $error)
                {
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
          <div class="input-box">
            <input type="text" name="c_user" required placeholder="Name">
          </div>
          <div class="input-box">
            <input type="email" name="c_email" required placeholder="Email">
          </div>
          <div class="input-box message-box">
            <input type="text" name="c_message" required placeholder="Message">
          </div>
          <div class="button">
            <input type="submit" name="submit" class="btn btn-primary" value="Send Now" style="background:rgb(35,35,85)">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

  <!-- Contact Us End-->
  <section class="footer">
    <div class="social">
      <a href="https://www.instagram.com/skillshalla/"><i class="fa-brands fa-square-instagram"></i></a>
      <a href="https://www.linkedin.com/in/skill-shalla-525a72271/"><i class="fa-brands fa-linkedin"></i></a>
      <a href="https://www.facebook.com/profile.php?id=100091553987341"><i class="fa-brands fa-square-facebook"></i></a>
    </div>
    <ul class="list">
      <li>
        <a href="home.php">Home</a>
      </li>
      <li>
        <a href="About.php">About Us</a>
      </li>
      <li>
        <a href="courses.php">Courses</a>
      </li>
      <li>
        <a href="Contact.php">Contact</a>
      </li>
    </ul>
    <p class="copyright">
      Copyright <i class="fa-regular fa-copyright"></i> 2023 All rights reserved | Skill Shalla
    </p>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>

<?php }else {
	header("Location: login.php");
	exit;
} ?>