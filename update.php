<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
	<div class="container">
		<form action="php/update.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Update</h4><hr><br>
		   
		   <div class="form-group">
		     <label for="name">Full Name</label>
		     <input type="name" 
		           class="form-control" 
		           id="name" 
		           name="fname" 
		           value="<?=$row['fname'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="name">Username</label>
		     <input type="name" 
		           class="form-control" 
		           id="name" 
		           name="username" 
		           value="<?=$row['username'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="name">Phone Number</label>
		     <input type="name" 
		           class="form-control" 
		           id="name" 
		           name="mobileno" 
		           value="<?=$row['mobileno'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="email">Email</label>
		     <input type="email" 
		           class="form-control" 
		           id="email" 
		           name="email" 
		           value="<?=$row['email'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="password">New Password</label>
		     <input type="password" 
		           class="form-control" 
		           id="password" 
		           name="pass">
		   </div>
		   <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >

		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Update</button>
		    <a href="read.php" class="link-primary">View</a>
	    </form>
	</div>
</body>
</html>