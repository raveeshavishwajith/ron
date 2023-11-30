<?php include "../../php/queries.php";
if (isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
	$sql = "SELECT * FROM admin_details WHERE email = '$username'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result);
} else {
	header('location: ../../loginpage/login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="../../src/favicon/favicon1.png" />
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css?=<?php echo time(); ?>">
	<!-- swipper css -->
	<link rel="stylesheet" href="swiper-bundle.min.css">
	<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<title>Admin Hub</title>
</head>

<body>
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<div class="logo">
				<img src="../../src/logo/logo.png" alt="Logo here">
				<h2> Admin</h2>
			</div>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="#managerlist">
					<i class='bx bxs-group'></i>
					<span class="text">Event Managers</span>
				</a>
			</li>
			<li>
				<a href="#voluntlist">
					<i class='bx bx-group'></i>
					<span class="text">Volunteers</span>
				</a>
			</li>
			<li>
				<a href="#orgcode">
					<i class='bx bxs-buildings'></i>
					<span class="text">Organisations</span>
				</a>
			</li>
			<li>
				<a href="#contact">
					<i class='bx bxs-buildings'></i>
					<span class="text">Contact</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="?logout" class="logout">
					<i class='bx bxs-log-out-circle'></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu'></i>
			<a href="#" class="nav-link">Home</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="profile">
				<img src="<?php echo $row['profile_pic'] ?>" alt="dp here">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download" id="print-button">
					<i class='bx bxs-cloud-download'></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<section id="interface">
				<div class="slide-container swiper">
					<h1 style="font-size:40px; text-align: center"> Events</h1>
					<div class="slide-content">
						<div class="card-wrapper swiper-wrapper">
							<?php
							$sql = "SELECT * FROM events";
							$result2 = mysqli_query($con, $sql);
							while ($row = mysqli_fetch_assoc($result2)) {
							?>
								<div class="card swiper-slide">
									<div class="image-content">
										<span class="overlay"> </span>
										<div class="card-image">
											<img src="<?php echo $row['flyer'] ?>" alt="Banner here" class="card-img">
										</div>
									</div>
									<div class="card-content">
										<h2 class="name"><?php echo $row['title'] ?></h2>
										<p class="description"><?php echo $row['organization'] ?></p>

										<a href="index.php?display=<?php echo $row['id'] ?>"><button class="btnMore"> View More</button></a>
									</div>
								</div>

							<?php
							}
							?>
						</div>
					</div>
					<br>
					<div class="swiper-pagination"></div>
				</div>
			</section>

			<div class="table-data">
				<div class="order" id="managerlist">
					<div class="head">
						<h3>Event Managers' List </h3>
					</div>

					<table>
						<thead>
							<tr>
								<th>Name</th>
								<th>Organisation </th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$sql = "SELECT * FROM managers_details ";
							$result = mysqli_query($con, $sql);
							while ($row = mysqli_fetch_assoc($result)) {
							?>
								<tr>
									<td>
										<img src="<?php echo $row['prof_location'] ?>" alt="profile picture">
										<?php echo $row['first_name'] . " " . $row['last_name'] ?>
									</td>
									<td><?php echo $row['membership'] ?></td>
									<td><a href="?removeManager=<?php echo $row['email']?>"><button class="btn" style="background: var(--orange);">Remove</button></a></td>

								</tr>
							<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>


			<div class="table-data">
				<div class="order" id="voluntlist">
					<div class="head">
						<h3>Volunteers' List </h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>Name</th>
								<th>Level </th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$sql = "SELECT * FROM members_details ";
							$result = mysqli_query($con, $sql);
							while ($row = mysqli_fetch_assoc($result)) {
							?>
								<tr>
									<td>
										<img src="<?php echo $row['prof_location'] ?>" alt="profile picture">
										<?php echo $row['first_name'] . " " . $row['last_name'] ?>
									</td>
									<td><?php echo $row['yos'] ?></td>
									<td><a href="?removeMember=<?php echo $row['email']?>"><button class="btn" style="background: var(--orange);">Remove</button></a></td>
								</tr>
							<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="table-data">
				<div class="todo" id="orgcode">
					<div class="head">
						<h3>Organisation Code </h3>
					</div>
					<ul class="todo-list">
						<?php
						$sql = "SELECT * FROM organization ";
						$result = mysqli_query($con, $sql);
						while ($row = mysqli_fetch_assoc($result)) {
						?>
							<li class="not-completed">
								<p><?php echo $row['organization'] ?></p>
								<i class='bx bx-dots-vertical-rounded'></i>
								<p><?php echo $row['confirm_code'] ?></p>

							</li>
						<?php
						}
						?>
					</ul>
				</div>
			</div>
			<div class="table-data">
				<div class="order" id="contact">
					<div class="head">
						<h3>Contact Us Details </h3>
					</div>

					<table>
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Description</th>
								<th>Action</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
							$sql = "SELECT * FROM contact_us ";
							$result = mysqli_query($con, $sql);
							while ($row = mysqli_fetch_assoc($result)) {
							?>
								<tr>
									<td><?php echo $row['name'] ?></td>
									<td><?php echo $row['email'] ?></td>
									<td><?php echo $row['message'] ?></td>
									<td><a href="?removeContactus=<?php echo $row['id']?>"><button class="btn" style="background: var(--orange);">Remove</button></a></td>

								</tr>
							<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
			<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->



	<!-- Swiper js!-->
	<script src="swiper-bundle.min.js"></script>

	<!-- JavaScript -->
	<script src="script.js"></script>

	<script>
		const printButton = document.getElementById('print-button');

		printButton.addEventListener('click', () => {
			// Open the browser's print dialog when the link is clicked
			window.print();
		});
	</script>

</body>

</html>