<!doctype html>
<html lang="en">
</html>
<title>
Skill Shalla
</title>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
    <!-- End Bootstrap CSS -->

        <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--Custom Css-->
    <link rel="stylesheet" href="./CSS/style.css">
    <!--End Custom Css-->
    <link rel = "icon" href ="images/title.PNG" type = "image/x-icon">
</head>

<body>
<div class="d-flex justify-content-center align-items-center vh-100">
    	
    	<form class="shadow w-450 p-3" 
    	      action="php/admin_login.php" 
    	      method="post">

    		<h4 class="display-4  fs-1">ADMIN LOGIN</h4><br>
    		<?php if(isset($_GET['error'])){ ?>
    		<div class="alert alert-primary" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>

			

		<div class="mb-3">
		    <label class="form-label">Admin name</label>
		    <input type="text" 
		           class="form-control"
		           name="aname"
		           value="<?php echo (isset($_GET['aname']))?$_GET['aname']:"" ?>">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Password</label>
		    <input type="password" 
		           class="form-control"
		           name="pass">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Login</button>
		  <br>
		  <br>
		  Login as <a href="login.php">User</a>
		</form>
    </div>
</body>
</html>