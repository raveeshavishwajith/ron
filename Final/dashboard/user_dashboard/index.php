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
				<h2> Volunteer</h2>
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
			<a href="index.php?id=profile">
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
			<a href="index.php?id=todo#todo">
				<i class='bx bxs-calendar-alt'></i>
				<span class="text">TODO List</span>
			</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#" class="logout">
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
				<span class="num">8</span>
			</a>


			<a href="#" class="profile">
				<img src="../<?php echo $row['prof_location'] ?>">
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
			}
		} else {
			displayhome($row);
		}
		?>
		<?php
		function displayhome($row)
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
								<div class="card swiper-slide">
									<div class="image-content">
										<span class="overlay"> </span>
										<div class="card-image">
											<img src="flyer.jpg" alt="Banner here" class="card-image">
										</div>
									</div>
									<div class="card-content">
										<h2 class="name">WIE EVENT 1</h2>
										<p class="description"> Event organisation </p>

										<a href="eventDetails.php"><button class="btnMore"> View More</button></a>


										<!-- <button type="button"  onclick="closePopup('popup1')" >Exit</button> -->
									</div>
								</div>


								<div class="card swiper-slide">
									<div class="image-content">
										<span class="overlay"> </span>
										<div class="card-image">
											<img src="flyer.jpg" alt="Banner here" class="card-image">
										</div>
									</div>
									<div class="card-content">
										<h2 class="name">WIE EVENT 1</h2>
										<p class="description"> Event organisation </p>

										<a href="eventDetails.php"><button class="btnMore"> View More</button></a>


										<!-- <button type="button"  onclick="closePopup('popup1')" >Exit</button> -->
									</div>
								</div>


								<<div class="card swiper-slide">
									<div class="image-content">
										<span class="overlay"> </span>
										<div class="card-image">
											<img src="flyer.jpg" alt="Banner here" class="card-image">
										</div>
									</div>
									<div class="card-content">
										<h2 class="name">WIE EVENT 1</h2>
										<p class="description"> Event organisation </p>

										<a href="eventDetails.php"><button class="btnMore"> View More</button></a>


										<!-- <button type="button"  onclick="closePopup('popup1')" >Exit</button> -->
									</div>
							</div>

							<div class="card swiper-slide">
								<div class="image-content">
									<span class="overlay"> </span>
									<div class="card-image">
										<img src="flyer.jpg" alt="Banner here" class="card-image">
									</div>
								</div>
								<div class="card-content">
									<h2 class="name">WIE EVENT 1</h2>
									<p class="description"> Event organisation </p>

									<a href="eventDetails.php"><button class="btnMore"> View More</button></a>


									<!-- <button type="button"  onclick="closePopup('popup1')" >Exit</button> -->
								</div>
							</div>
						</div>

						<div class="swiper-button-next swiper-navBtn"> </div>
						<div class="swiper-button-prev swiper-navBtn"> </div>
						<div class="swiper-pagination"></div>
					</div>



				</section>
				<div class="table-data">
					<div class="order">
						<div class="head">
							<h3>Events as Volunteer </h3>
							<i class='bx bx-search'></i>
							<i class='bx bx-filter'></i>
						</div>
						<table>
							<thead>
								<tr>
									<th>Event Title</th>
									<th>Date </th>
									<th>Status of Participation</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<img src="#" alt="event flyer">
										<p>Event Name</p>
									</td>
									<td>27-10-2023</td>
									<td><span class="status completed">Completed</span></td>
								</tr>
								<tr>
									<td>
										<img src="#" alt="event flyer">
										<p>Event Name</p>
									</td>
									<td>27-10-2023</td>
									<td><span class="status pending">Pending</span></td>
								</tr>
								<tr>
									<td>
										<img src="#" alt="event flyer">
										<p>Event Name</p>
									</td>
									<td>27-10-2023</td>
									<td><span class="status process">Process</span></td>
								</tr>
								<tr>
									<td>
										<img src="#" alt="event flyer">
										<p>Event Name</p>
									</td>
									<td>27-10-2023</td>
									<td><span class="status pending">Pending</span></td>
								</tr>
								<tr>
									<td>
										<img src="#" alt="event flyer">
										<p>Event Name</p>
									</td>
									<td>27-10-2023</td>
									<td><span class="status completed">Completed</span></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="todo">
						<div class="head">
							<h3>Todos </h3>
							<i class='bx bx-plus'></i>
							<i class='bx bx-filter'></i>
						</div>
						<ul class="todo-list">
							<li class="completed">
								<p>Todo List</p>
								<i class='bx bx-dots-vertical-rounded'></i>
								<a href="addTodo.php"><button class="btn">Add Event</button></a>
							</li>
							<li class="completed">
								<p>Todo List</p>
								<i class='bx bx-dots-vertical-rounded'></i>
								<a href="addTodo.php"><button class="btn"> Add Event</button></a>
							</li>
							<li class="not-completed">
								<p>Todo List</p>
								<i class='bx bx-dots-vertical-rounded'></i>
								<a href="addTodo.php"><button class="btn"> Add Event</button></a>
							</li>
							<li class="completed">
								<p>Todo List</p>
								<i class='bx bx-dots-vertical-rounded'></i>
								<a href="addTodo.php"><button class="btn"> Add Event</button></a>
							</li>
							<li class="not-completed">
								<p>Todo List</p>
								<i class='bx bx-dots-vertical-rounded'></i>
								<a href="addTodo.php"><button class="btn"> Add Event</button></a>
							</li>
						</ul>
					</div>


				</div>

			</main>
			<!-- MAIN -->
	</section>
	<!-- CONTENT -->
<?php } ?>

<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

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

<?php
function displayprofile($row)
{
?>
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
						<h4>Registration Number</h4>
						<p><?php echo $row['reg_number'] ?></p>
					</div>
					<div class="data">
						<h4>Gender</h4>
						<p><?php echo $row['gender'] ?></p>
					</div>
					<div class="data">
						<h4>Year of Study</h4>
						<p><?php echo $row['yos'] ?></p>
					</div>
					<div class="data">
						<h4>Course</h4>
						<p><?php echo $row['course'] ?></p>
					</div>
					<div class="data">
						<h4>Email</h4>
						<p><?php echo $row['email'] ?></p>
					</div>
					<div class="data">
						<h4>Phone</h4>
						<p><?php echo $row['contact_no'] ?></p>
					</div>
					<div class="data">
						<h4>Memberships</h4>
						<p><?php echo $row['memberships'] ?></p>
					</div>
				</div>
			</div>

			<div class="projects">
				<h3>Past Experiences</h3>
				<div class="projects_data">
					<div class="data">
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
			</div>
		</div>
	</div>


<?php }

function displayedit($row)
{
?>
	</section>
	<div class="wrapperr">
			<form action="" method="post" enctype="multipart/form-data">
				<h1>Edit profile</h1>
				<p>You are editing your profile which already exist.</p>
				<hr>
				<br>
				<label>First Name</label>
				<input type="text" name="first_name" id="first_name" value="<?php echo $row['first_name']?>">
				<br><br>
				<label>Last Name</label>
				<input type="text" name="last_name" id="last_name" value="<?php echo $row['last_name']?>">
				<br><br>
				<label>Year of Study</label>
				<input type="number" name="yos" id="yos" value="<?php echo $row['yos']?>">
				<br><br>
				<label>Contact Number</label>
				<input type="number" name="contact_number" id="contact_number" value="<?php echo $row['contact_no']?>">
				<br><br>
				<label>Past Volunteer Experiences</label>
				<input type="text" name="past_volunteer_experience" id="past_volunteer_experience" value="<?php echo $row['past_volunteer_experience']?>">
				<br><br>
				<label>Membership:</label>
				<input type="checkbox" name="membership[]" id="ieee" value="IEEE">
				<label class="label" for="ieee">IEEE</label>
				<br>
				<input type="checkbox" name="membership[]" id="cssl" value="CSSL">
				<label class="label" for="cssl">CSSL</label>
				<br>
				<input type="checkbox" name="membership[]" id="gavel" value="gavel">
				<label class="label" for="gavel">Gavel</label>
				<br>
				<input type="checkbox" name="membership[]" id="CompSoc" value="CompSoc">
				<label class="label" for="CompSoc">CompSoc</label>
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
<?php } ?>

</body>

</html>