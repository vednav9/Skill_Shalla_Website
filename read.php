<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
 ?>
<?php include "php/read.php"; ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Display</title>
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
					<a href="read.php" class="list-group-item list-group-item-action active" aria-current="true">
						Display User
					</a>
					<a href="read_admin.php" class="list-group-item list-group-item-action">Display Admin</a>
					<a href="admin.php" class="list-group-item list-group-item-action">Create User</a>
					<a href="admin-register.php" class="list-group-item list-group-item-action">Create Admin</a>
					<a href="AdContactus.php" class="list-group-item list-group-item-action">Contact Us</a>
					<a href="logout.php" class="list-group-item list-group-item-action">Log out</a>

				</div>
			</nav>

		</div>
	</div>


	<div class="container-{breakpoint}">

		<div class="box">

			<table class="table  table-hover vw-100 vh-50">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">FullName</th>
						<th scope="col">Username</th>
						<th scope="col">Phone Number</th>
						<th scope="col">Email</th>
						<th scope="col">Python Programming</th>
						<th scope="col">Digital Marketing</th>
						<th scope="col">Java Programming</th>
						<th scope="col">BSC</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<?php if (mysqli_num_rows($result)) { ?>
					<tbody>
						<?php
						$i = 0;
						while ($rows = mysqli_fetch_assoc($result)) {
							$i++;
							?>
							<tr>
								<th scope="row">
									<?= $i ?>
								</th>
								<td>
									<?= $rows['fname'] ?>
								</td>
								<td>
									<?php echo $rows['username']; ?>
								</td>
								<td>
									<?php echo $rows['mobileno']; ?>
								</td>
								<td>
									<?php echo $rows['email']; ?>
								</td>
								<td>
									<?php echo $rows['pynum']; ?>/3
								</td>
								<td>
									<?php echo $rows['dmnum']; ?>/3
								</td>
								<td>
									<?php echo $rows['jnum']; ?>/6
								</td>
								<td>
									<?php echo $rows['bscnum']; ?>/5
								</td>
								<td><a href="update.php?id=<?= $rows['id'] ?>" class="btn btn-success">Update</a>

									<a href="php/delete.php?id=<?= $rows['id'] ?>" class="btn btn-primary">Delete</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			<?php } ?>
		</div>
	</div>




	<!-- custom js file link  -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
		integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
		crossorigin="anonymous"></script>


</body>

</html>

<?php }else {
	header("Location: login.php");
	exit;
} ?>