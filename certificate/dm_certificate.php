<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <style>
        *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: rgb(210, 210, 240);
}

.close{
  position:absolute;
  margin-top:40rem;
}

.slider{
  position: absolute;
  background: rgb(210, 210, 240);
  width: 800px;
  min-height: 500px;
  margin: 20px;
  overflow: hidden;
  border-radius: 10px;
}

.slider .slide{
  position: absolute;
  width: 100%;
  height: 100%;
}

.slider .slide img{
  position: absolute;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.inline-btn
 {
text-decoration: none;
   border-radius: .5rem;
   color: #fff;
   font-size: 1rem;
   cursor: pointer;
   text-transform: capitalize;
   padding: 1rem 3rem;
   margin-left: 1rem;
}

.inline-btn
 {
   display: inline-block;
}
.inline-btn {
   background-color: rgb(35,35,85);
}

.inline-btn:hover {
   background-color:#FDC93B;
   color: var(--white);
}

@media (max-width: 900px){
  .slider{
    width: 100%;
  }

  .slider .slide .info{
    position: relative;
    width: 80%;
    margin-left: auto;
    margin-right: auto;
  }

  .inline-btn{
    display:flex;
    flex-direction: column;
    margin-top:2rem;
    text-align: center;
  }
}
    </style>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  </head>

  <body>
    <div class="slider">
      <div class="slide">
        <img src="dm_download.php" alt="Digital Marketing Certificate">
      </div>
    </div>
    <div class="close">
    <div>
    <a href="../profile.php" class="inline-btn">View Profile</a>
    <a href="dm_download.php" class="inline-btn">Download Certificate</a>
    </div>
    <br>
    </div>
  </body>
</html>
<?php }else {
	header("Location: ../login.php");
	exit;
} ?>