<?php include "../../php/queries.php";
if (isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
	$sql = "SELECT * FROM members_details WHERE email = '$username'";
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
	<title>Volunteer Hub</title>
</head>

<body>
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<div class="logo">
				<img src="../../src/logo/logo.png" alt="Logo here">
				<h2>Volunteer</h2>
			</div>
		</a>
		<ul class="side-menu top">
			<?php if (!isset($_GET['id'])) {
				echo "<li class='active'>";
			} else {
				if ($_GET['id'] != "todo") {
					echo "<li class='active'>";
				} else {
					echo "<li>";
				}
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
				<a href=".?logout" class="logout">
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
			<a href="../../index.php" class="nav-link">Home</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="profile">
				<img src="<?php echo $row['prof_location'] ?>" alt="dp here">
			</a>
		</nav>
		<!-- NAVBAR -->

		<?php
		if (isset($_GET['id'])) {
			if ($_GET['id'] == "profile") {
				displayprofile($row);
			} elseif ($_GET['id'] == "todo") {
				displayhome($con);
			} elseif ($_GET['id'] == "edit") {
				displayedit($row);
			}
		} elseif (isset($_GET['apply'])) {
			displayapply($con);
		} elseif (isset($_GET['display'])) {
			$id = $_GET['display'];
			displayevent($con, $id);
		} elseif (isset($_GET['addTODO'])) {
			displayaddTODO();
		} elseif (isset($_GET['editTodo'])) {
			$id = $_GET['editTodo'];
			displayeditTODO($con, $id);
		} elseif (isset($_GET['remove'])) {
			$id = $_GET['remove'];
			$sql = "DELETE FROM events_applications WHERE id = '$id'";
			$result = mysqli_query($con, $sql);
			displayhome($con);
		} elseif (isset($_GET['removeprof'])) {
			if ($row['prof_location'] != "../../src/dummy_profilepic/malepic.png" and $row['prof_location'] != "../../src/dummy_profilepic/femalepic.png") {
				unlink($row['prof_location']);
				if ($row['gender'] == 'male') {
					$prof_location = "../../src/dummy_profilepic/malepic.png";
				} else {
					$prof_location = "../../src/dummy_profilepic/femalepic.png";
				}
				$sql = "UPDATE members_details SET prof_location = '$prof_location'  WHERE email = '$username'";
				$result = mysqli_query($con, $sql);
			}
			header('location: ?id=profile');
		}  else {
			displayhome($con);
		}
		?>
		<?php
		function displayhome($con)
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

											<a href="?display=<?php echo $row['id'] ?>"><button class="btnMore"> View More</button></a>
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
					<div class="order" id="myevents">
						<div class="head">
							<h3>Events as Volunteer </h3>
						</div>
						<table>
							<thead>
								<tr>
									<th>Event Title</th>
									<th>Application Deadline</th>
									<th>Event Date</th>
									<th>Application Status</th>
									<th>Remove Application</th>
								</tr>
							</thead>
							<?php
							$email = $_SESSION['username'];
							$sql = "SELECT * FROM events_applications WHERE email = '$email'";
							$result = mysqli_query($con, $sql);
							?>
							<tbody>
								<?php
								while ($row = mysqli_fetch_assoc($result)) {
									$event_id = $row['event_id'];
									$sql = "SELECT * FROM events WHERE id = '$event_id'";
									$result2 = mysqli_query($con, $sql);
									$row2 = mysqli_fetch_assoc($result2);
								?>
									<tr>
										<td>
											<img src="<?php echo $row2['flyer'] ?>" alt="event flyer">
											<p><?php echo $row2['title'] ?></p>
										</td>
										<td><?php echo $row2['deadline'] ?></td>
										<td><?php echo $row2['event_date'] ?></td>
										<?php
										if ($row['status'] == 'accepted') {
										?>
											<td><span class="status accepted">Accepted</span></td>
										<?php
										} elseif ($row['status'] == 'declined') {
										?>
											<td><span class="status decline">Declined</span></td>
										<?php
										} else {
										?>
											<td><span class="status pending">Pending</span></td>
										<?php
										}
										?>
										<td>
											<span class="status decline">
												<a style = "color: white" href="?remove=<?php echo $row['id'] ?>">Delete</a>
											</span>
										</td>
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
									<a href="?editTodo=<?php echo $row['id'] ?>"><button class="btn" style="background: var(--orange);">Edit</button></a>
									<a href="?removeTodo=<?php echo $row['id'] ?>"><button class="btn" style="background: var(--red);">Remove</button></a>
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
				<img src="<?php echo $row['prof_location'] ?>" alt="">
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
						<p><?php echo $row['contact_no'] ?></p>
					</div>
					<br>
					<div class="data">
						<h4>Past Volunteer Experience</h4>
						<p><?php echo $row['past_volunteer_experience'] ?></p>
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
				<a href="?removeprof"><button style="background: red">Remove Profile Picture</button> </a>
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
			<input type="number" name="contact_no" id="contact_no" value="<?php echo $row['contact_no'] ?>">
			<br><br>
			<label for="past-vol-exp">Past Volunteer Experience</label>
			<textarea name="past-vol-exp" id="past-vol-exp" rows="5" style="width: 100%; padding: 2%;"><?php echo $row['past_volunteer_experience'] ?></textarea>
			<br><br>
			<label class="label" for="profile_picture"><i class="fa-solid fa-arrow-up-from-bracket"></i> &nbsp;
				Choose a profile Picture
			</label><br>
			<input type="file" name="profile_picture" id="profile_picture" >
			<br>
			<br>
			<hr>
			<button type="submit" class="btn" name="edit_member" style="margin-top: 10px;">Save</button>
			<button type="submit" class="btn" name="cancle_edit" style="margin-top: 10px;">Canel</button>
		</form>
	</div>
<?php }

		function displayapply($con)
		{
			$id = $_SESSION['username'];
			$sql = "SELECT * FROM members_details WHERE email = '$id'";
			$result = mysqli_query($con, $sql);
			$row = mysqli_fetch_assoc($result);
?>
	<div class="form">
		<form action="" method="post" enctype="multipart/form-data">
			<h2> Apply for Event</h2>
			<br><br>
			<input type="hidden" value="<?php echo $_GET['apply'] ?>" name="id">
			<label for="fullname">Full Name</label>
			<input type="text" name="fullname" id="fullname" value="<?php echo $row['first_name'] . ' ' . $row['last_name'] ?>" required>
			<br><br>
			<label for="email">Email</label>
			<input type="text" name="email" id="email" value="<?php echo $row['email'] ?>" required>
			<br><br>
			<label for="role">Prefered Role</label>
			<select name="role" id="role">
				<option disabled selected>Select Role</option>
				<option value="design team">Design Team</option>
				<option value="secretary team">Secretary Team</option>
				<option value="program team">Program Team</option>
				<option value="logistic team">Logistic Team</option>
				<option value="other">Other</option>
			</select>
			<br><br>
			<label for="mem_num">Membership Number</label>
			<input type="number" name="mem_num" id="mem_num">
			<br><br>
			<label for="contact">Contact details</label>
			<input type="number" name="contact" id="contact" value="<?php echo $row['contact_no'] ?>" required>
			<br><br>
			<label for="past-vol-exp">Past Volunteer Experience</label>
			<textarea name="past-vol-exp" id="past-vol-exp" rows="5" style="width: 100%; padding: 2%;"><?php echo $row['past_volunteer_experience'] ?></textarea>
			<input type="submit" class="btn" name="applyEvent" value="Submit">
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
		<a href="index.php"><button class="btnexit">Exit</button></a>
		<a href="index.php?apply=<?php echo $row['id'] ?>"><button class="btnapply">Apply</button></a>
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

<!-- Swiper js!-->
<script src="swiper-bundle.min.js"></script>

<!-- JavaScript -->
<script src="script.js"></script>


</body>

</html>