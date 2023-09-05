<?php include "../../php/queries.php";
if (isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
	$sql = "SELECT * FROM managers_details WHERE email = '$username'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result);
	$organization = $_SESSION['organization'];
	$sql = "SELECT * FROM events WHERE organization = '$organization'";
	$result2 = mysqli_query($con, $sql);
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
	<title>VolunteerHub</title>
</head>

<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<div class="logo">
				<img src="ron_logo.jpeg" alt="Logo here">
				<h2> Event Manager</h2>
			</div>
		</a>
		<ul class="side-menu top">
			<?php if (!isset($_GET['id'])) {
				echo "<li class='active'>";
			} else {
				echo "<li>";
			}
			?>
			<a href="index.php">
				<i class='bx bxs-dashboard'></i>
				<span class="text">Dashboard</span>
			</a>
			</li>
			<?php if (isset($_GET['id'])) {
				if ($_GET['id'] == "profile") {
					echo "<li class='active'>";
				} else {
					echo "<li>";
				}
			} else {
				echo "<li>";
			}
			?>
			<a href="?id=profile">
				<i class='bx bxs-user-circle'></i>
				<span class="text">Profile</span>
			</a>
			</li>
			<?php if (isset($_GET['id'])) {
				if ($_GET['id'] == "todo") {
					echo "<li class='active'>";
				} else {
					echo "<li>";
				}
			} else {
				echo "<li>";
			}
			?>
			<a href="index.php#todo">
				<i class='bx bxs-calendar-alt'></i>
				<span class="text">TODO List</span>
			</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="../../php/queries.php?logout" class="logout">
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
			<a href="#" class="notification">
				<i class='bx bxs-bell'></i>

			</a>


			<a href="#" class="profile">
				<img src="profile_image.jpg" alt="dp here">
			</a>
		</nav>
		<!-- NAVBAR -->

		<?php
		if (isset($_GET['id'])) {
			if ($_GET['id'] == "profile") {
				displayprofile($row);
			} elseif ($_GET['id'] == "todo") {
				displayhome($row);
			} elseif ($_GET['id'] == "edit") {
				displayedit($row);
			} elseif ($_GET['id'] == "addevent") {
				displayaddevent();
			}
		} elseif (isset($_GET['display'])) {
			$id = $_GET['display'];
			displayevent($con, $id);
		} elseif (isset($_GET['addTODO'])) {
			displayaddTODO();
		} elseif (isset($_GET['editTodo'])) {
			$id = $_GET['editTodo'];
			displayeditTODO($con, $id);
		} else {
			displayhome($con, $result2);
		}
		?>
		<?php
		function displayhome($con, $result2)
		{ ?>

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
					<!-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> -->
				</div>

				<section id="interface">


					<div class="slide-container swiper">
						<h1 style="font-size:30px"> Events</h1>
						<div class="slide-content">
							<div class="card-wrapper swiper-wrapper">
								<?php
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


											<!-- <button type="button"  onclick="closePopup('popup1')" >Exit</button> -->
										</div>
									</div>

								<?php
								}
								?>
							</div>
						</div>

						<div class="swiper-button-next swiper-navBtn"> </div>
						<div class="swiper-button-prev swiper-navBtn"> </div>
						<div class="swiper-pagination"></div>
					</div>
				</section>
				<div class="table-data">
					<div class="order" id="myevents">
						<div class="head">
							<h3>Events as Manager </h3>
							<a href="?id=addevent"><i class='bx bx-plus'></i></a>
						</div>
						<table>
							<thead>
								<tr>
									<th>Event Title</th>
									<th>Application Deadline</th>
									<th>Application Status</th>
								</tr>
							</thead>
							<?php
							$email = $_SESSION['username'];
							$organization = $_SESSION['organization'];
							$sql = "SELECT * FROM events WHERE author = '$email' AND organization = '$organization'";
							$result = mysqli_query($con, $sql)
							?>
							<tbody>
								<?php
								while ($row = mysqli_fetch_assoc($result)) {
								?>
									<tr>
										<td>
											<img src="<?php echo $row['flyer'] ?>" alt="event flyer">
											<p><?php echo $row['title'] ?></p>
										</td>
										<td><?php echo $row['deadline'] ?></td>
										<td><span class="status completed"> <a href="applicants_list.php">View Applicants</a></span></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
					<div class="todo" id="todo">
						<div class="head">
							<h3>TODO List </h3>
							<a href="index.php?addTODO"><i class='bx bx-plus'></i></a>
						</div>
						<ul class="todo-list">
							<?php
							$id = $_SESSION['username'];
							$sql = "SELECT * FROM todo WHERE email = '$id'";
							$result = mysqli_query($con, $sql);
							while ($row = mysqli_fetch_assoc($result)) {
							?>
								<li class="completed">
									<p><?php echo $row['title'] ?></p>
									<i class='bx bx-dots-vertical-rounded'></i>
									<p><?php echo $row['date'] ?></p>
									<a href="index.php?editTodo=<?php echo $row['id']?>"><button class="btn">Edit Event</button></a>
								</li>
							<?php
							}
							?>
						</ul>
					</div>
				</div>
				<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

			</main>
			<!-- MAIN -->
	</section>
	<!-- CONTENT -->
<?php }

		function displayprofile($row)
		{

?>
	<main></main>
	</section>
	<div class="wrapper">
		<div class="left" id="profilepage">
			<div class="profilepic">
				<img src="../<?php echo $row['prof_location'] ?>" alt="">
			</div>
			<h2><?php echo $row['first_name'] . " " . $row['last_name'] ?></h2>
			<p>Volunteer</p>
		</div>
		<div class="right">
			<div class="info">
				<h3>Information</h3>
				<div class="info_data">
					<div class="data">
						<h4>Full Name</h4>
						<p><?php echo $row['first_name'] . " " . $row['last_name'] ?></p>
					</div>
					<div class="data">
						<h4>Gender</h4>
						<p><?php echo $row['gender'] ?></p>
					</div>
					<div class="data">
						<h4>Email</h4>
						<p><?php echo $row['email'] ?></p>
					</div>
					<div class="data">
						<h4>Phone</h4>
						<p><?php echo $row['contact_number'] ?></p>
					</div>
				</div>
			</div>

			<div class="social_media">
				<ul>
					<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="#"><i class="fab fa-twitter"></i></a></li>
					<li><a href="#"><i class="fab fa-instagram"></i></a></li>
				</ul>

			</div>
			<br>
			<div class="btnedit">
				<a href="index.php?id=edit"><button>Edit</button> </a>
			</div>
		</div>
	</div>

<?php
		}

		function displayedit($row)
		{
?>
	<main></main>
	</section>
	<div class="wrapperr">
		<form action="" method="post" enctype="multipart/form-data">
			<h1>Edit profile</h1>
			<p>You are editing your profile which already exist.</p>
			<hr>
			<br>
			<label>First Name</label>
			<input type="text" name="first_name" id="first_name" value="<?php echo $row['first_name'] ?>">
			<br><br>
			<label>Last Name</label>
			<input type="text" name="last_name" id="last_name" value="<?php echo $row['last_name'] ?>">
			<br><br>
			<label>Contact Number</label>
			<input type="number" name="contact_number" id="contact_number" value="<?php echo $row['contact_number'] ?>">
			<br>
			<br>
			<label class="label" for="profile_picture"><i class="fa-solid fa-arrow-up-from-bracket"></i> &nbsp;
				Choose a profile Picture
			</label><br>
			<input type="file" name="profile_picture" id="profile_picture">
			<br>
			<br>
			<hr>
			<button type="submit" class="btn" name="edit_member" style="margin-top: 10px;">Save</button>
			<button type="submit" class="btn" name="cancle_edit" style="margin-top: 10px;">Canel</button>
		</form>
	</div>
<?php }

		function displayaddevent()
		{

?>
	<div class="form">
		<form action="" method="post" enctype="multipart/form-data">
			<h2> Add New Event</h2>
			<label for="eventTitle">Title of the Event</label>
			<input type="text" name="eventTitle" id="eventTitle" required>
			<br><br>
			<label for="eventVenue">Venue of the Event</label>
			<input type="text" name="eventVenue" id="eventVenue" required>
			<br><br>
			<label for="volunteerCount">No.of Volunteers required</label>
			<input type="number" name="volunteerCount" id="volunteerCount" required>
			<br><br>
			<label for="moreDetails">More details</label>
			<textarea name="moreDetails" id="moreDetails" rows="10" style="width: 100%; padding: 2%" required></textarea>
			<br><br>
			<label for="deadline">Deadline</label>
			<input type="date" name="deadline" id="deadline" required>
			<br><br>
			<label for="contact">Contact details</label>
			<input type="number" name="contact" id="contact" required>
			<br><br>
			<label for="flyer">Upload flyer</label>
			<input type="file" name="flyer" id="flyer" required>
			<br><br>
			<input type="submit" class="btn" name="submitEvent" value="Submit">
		</form>
	</div>

<?php

		}

		function displayevent($con, $id)
		{
			$sql = "SELECT * FROM events WHERE id = '$id'";
			$result = mysqli_query($con, $sql);
			$row = mysqli_fetch_assoc($result);
?>
	<menu></menu>
	</section>
	<div class="card">
		<img src="<?php echo $row['flyer'] ?>" alt="Event Flyer here">
		<div class="detail">
			<ul>
				<li> Title of Event: <?php echo $row['title'] ?></li>
				<li> Venue: <?php echo $row['venue'] ?></li>
				<li> No. of Volunteers required: <?php echo $row['no_volunteers'] ?></li>
				<li> More Details: <?php echo $row['more_details'] ?></li>
				<li> Deadline: <?php echo $row['deadline'] ?></li>
			</ul>
		</div>
		<a href="index.php"><button class="btnexit">exit</button></a>
		<!-- <a href="eventApplicationForm.php"><button class="btnexit">Apply</button></a> -->
	</div>

<?php
		}

		function displayaddTODO()
		{

?>
	<menu></menu>
	</section>
	<div class="form-container">
		<h2>Manage your Events</h2>
		<form action="" method="POST">
			<div class="form-group">
				<label for="eventtitle">Event Title:</label>
				<input type="text" id="eventtitle" name="eventtitle" required>
			</div>
			<div class="form-group">
				<label for="eventdate">Event Date:</label>
				<input type="date" id="eventdate" name="eventdate" required>
			</div>
			<button type="submit" name="addtodo">ADD TODO List</button>
		</form>
	</div>
<?php
		}

		function displayeditTODO($con, $id)
		{
			$sql = "SELECT * FROM todo WHERE id = '$id'";
			$result = mysqli_query($con, $sql);
			$row = mysqli_fetch_assoc($result);
?>
	<menu></menu>
	</section>
	<div class="form-container">
		<h2>Manage your Events</h2>
		<form action="" method="POST">
			<input type="hidden" name="id" value="<?php echo $id ?>">
			<div class="form-group">
				<label for="eventtitle">Event Title:</label>
				<input type="text" id="eventtitle" name="eventtitle" value="<?php echo $row['title'] ?>" required>
			</div>
			<div class="form-group">
				<label for="eventdate">Event Date:</label>
				<input type="date" id="eventdate" name="eventdate" value="<?php echo $row['date'] ?>" required>
			</div>
			<button type="submit" name="editTodo">Edit TODO List</button>
		</form>
	</div>
<?php
		}
?>
?>

<!-- Swiper js!-->
<script src="swiper-bundle.min.js"></script>

<!-- JavaScript -->
<script src="script.js"></script>

<!-- popup profile
	<script>


	function openPopup(popupId){
		let popup = document.getElementById(popupId);
		popup.classList.add("open-popup");
	}

	function closePopup(popupId){
		let popup = document.getElementById(popupId);
		popup.classList.remove("open-popup");
	}

	</script>  -->

</body>

</html>