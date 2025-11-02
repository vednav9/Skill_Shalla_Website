<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Create</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
  <link rel="stylesheet" href="css/read.css">
</head>

<body>
		<!--Navbar-->
		<nav class="navbar bg-body-tertiary">
		<div class="container-fluid i1">

			<a class="navbar-brand" href="#">
				<img src="images/title.PNG" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
				Skill Shala Admin
			</a>

			<div class="icons">
				<!-- Open sidebar / offcanvas -->
				<a href="#sidebar" data-bs-toggle="offcanvas" role="button" aria-controls="sidebar">
					<div id="menu-btn" class="fas fa-bars"></div>
				</a>

			</div>

		</div>
	</nav>

	<!--Offcanvas-->
	<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="sidebar"
		aria-labelledby="offcanvasScrollingLabel">
		<div class="offcanvas-header">
			<h5 class="offcanvas-title" id="offcanvasScrollingLabel">Skill Shala</h5>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>

		<div class="offcanvas-body">
			<nav class="sidebar-nav">
				<div class="list-group">
				<a href="read.php" class="list-group-item list-group-item-action" aria-current="true">
						Display User
					</a>
					<a href="read_admin.php" class="list-group-item list-group-item-action">Display Admin</a>
					<a href="admin.php" class="list-group-item list-group-item-action active">Create User</a>
					<a href="admin-register.php" class="list-group-item list-group-item-action">Create Admin</a>
					<a href="AdContactus.php" class="list-group-item list-group-item-action">Contact Us</a>
					<a href="logout.php" class="list-group-item list-group-item-action">Log out</a>

				</div>
			</nav>

		</div>
	</div>

	<div class="container login-form">
<div class="row mt-4 justify-content-center">
<div class="col-md-4">
<div class="card">
<div class="card-body">
<div class="offest-md-4">

    	<form class="form-login" 
    	      action="php/create_user.php" 
    	      method="post"
    	      enctype="multipart/form-data">

    		<h4 class="display-4  fs-1">Create User</h4><br>
    		<?php if(isset($_GET['error'])){ ?>
    		<div class="alert alert-primary" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>

		    <?php if(isset($_GET['success'])){ ?>
    		<div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
			</div>
		    <?php } ?>
		  <div class="mb-3">
		    <label class="form-label">Full Name</label>
		    <input type="text" 
		           class="form-control"
		           name="fname"
		           value="<?php echo (isset($_GET['fname']))?$_GET['fname']:"" ?>">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">User name</label>
		    <input type="text" 
		           class="form-control"
		           name="uname"
		           value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Email id</label>
		    <input type="email" 
		           class="form-control"
		           name="email"
		           value="<?php echo (isset($_GET['email']))?$_GET['email']:"" ?>">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Phone Number</label>
		    <input type="number" 
		           class="form-control"
		           name="mobileno"
		           value="<?php echo (isset($_GET['mobileno']))?$_GET['mobileno']:"" ?>">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Password</label>
		    <input type="password" 
		           class="form-control"
		           name="pass">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Confirm Password</label>
		    <input type="password" 
		           class="form-control"
		           name="cpass">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Profile Picture</label>
		    <input type="file" 
		           class="form-control"
		           name="pp">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Sign Up</button>
		  <a href="login.php" class="link-secondary">Login</a>
		</form>
</div>
</div>
</div>
</div>
</div>
</div>

	<script src="js\script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
</body>
</html>