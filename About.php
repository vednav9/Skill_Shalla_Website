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

  <link rel="stylesheet" href="css/about.css">
  <link rel="icon" href="images\title.PNG" type="image/x-icon">

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>

<body>
   <!--Header Start-->
   <header>
    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="home.php">
          <h2 class="fw-bold  mb-2 mb-lg-0 mb-sm-0"> <img src="images/title.png"> Skill Shalla</h2>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="bi bi-list mobile-nav-toggle"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto mb-2 mb-lg-0 action">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="home.php">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="About.php">About Us</a>
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

  <section id="home" style="background-image: linear-gradient(rgb(9,5,54,0.3),rgb(5,4,46,0.7)),url('images/right-sider-banner.png');">
    <h2> Welcome to  Skill Shalla...</h2>
    <p style="font-size: 1rem">We are a skill learning website that provides a platform for people to learn new skills and improve existing ones. Our website offers a variety of courses taught by experienced instructors in different areas such as technology, business, arts, and more. We aim to help our users enhance their skills and knowledge to achieve their personal and professional goals. Our mission is to provide affordable and accessible education to everyone, anywhere, anytime. </p>
  </section>

  <!--Team-->
  <section class="our-webcoderskull padding-lg ">
    <div class="container">
      <div class="row heading heading-icon">
        <h2>Our Team</h2>
      </div>
      <ul class="row justify-content-center">
        <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="images/pic.jpg" class="img-responsive" alt=""></figure>
            <h3><a href="#">Vedant Navthale</a></h3>
            <p>3rd BE,Computer Enginneering, Mumbai</p>
            <ul class="foot">
              <a href="https://www.linkedin.com/in/vedantnavthale/" style="margin-right:1rem"><i class="fa-brands fa-linkedin"></i></a>
              <!-- <a href="#" style="margin-right:1rem"><i class="fa-brands fa-instagram"></i></a> -->
            </ul>
          </div>
        </li>
        <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="images/atharava.jpg" class="img-responsive" alt=""></figure>
            <h3><a href="#">Athrava Sarode</a></h3>
            <p>3rd BE,Computer Enginneering, Mumbai</p>
            <ul class="foot">
              <a href="https://www.linkedin.com/in/atharva--sarode/" style="margin-right:1rem"><i class="fa-brands fa-linkedin"></i></a>
              <!-- <a href="#" style="margin-right:1rem"><i class="fa-brands fa-instagram"></i></a> -->
            </ul>
          </div>
        </li>
        <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="images/omik.jpg" class="img-responsive" alt=""></figure>
            <h3><a href="#">Omik Vichare</a></h3>
            <p>3rd BE,Computer Enginneering, Mumbai</p>
            <ul class="foot">
              <!-- <a href="#" style="margin-right:1rem"><i class="fa-brands fa-instagram"></i></a> -->
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <!--Team End-->
  <!--Footer -->
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
  <!--footer End-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>

<?php }else {
	header("Location: login.php");
	exit;
} ?>