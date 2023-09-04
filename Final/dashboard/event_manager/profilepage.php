<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">
	<!-- swipper css -->
    <link rel="stylesheet" href="swiper-bundle.min.css">
	<script src="https://code.jquery.com/jquery-3.7.0.min.js" ></script>
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
			<li>
				<a href="index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="active">
				<a href="profilepage.php">
					<i class='bx bxs-user-circle' ></i>
					<span class="text">Profile</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-calendar-alt' ></i>
					<span class="text">ToDO List</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">My volunteering</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
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
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Home</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				
			</a>
			
			
			<a href="#" class="profile">
				<img src="profile_image.jpg">
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
						<li><i class='bx bx-chevron-right' ></i></li>
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
</section>

<div class="wrapper" id="profilepage">
    <div class="left">
        <img src="#" alt="user dp here" width="100">
        <h4>Sample Name</h4>
         <p>Volunteer</p>
    </div>
    <div class="right">
        <div class="info">
            <h3>Information</h3>
            <div class="info_data">
			<div class="data">
                   <h4>FullName</h4>
                    <p>Samplename</p>
              </div>
			  <div class="data">
                   <h4>Registration Number</h4>
                    <p>sampledata</p>
              </div>
			  <div class="data">
                   <h4>Gender</h4>
                    <p>sampledata</p>
              </div>
			  <div class="data">
                   <h4>Year of Study</h4>
                    <p>sample data</p>
              </div>
			  <div class="data">
                   <h4>Course</h4>
                    <p>Sampledata</p>
              </div>
				<div class="data">
					<h4>Email</h4>
					<p>alex@gmail.com</p>
				</div>
                 <div class="data">
                   <h4>Phone</h4>
                    <p>0001-213-998761</p>
              </div>
			  <div class="data">
                   <h4>Memberships</h4>
                    <p>sampledata</p>
              </div>
            </div>
        </div>
      
      <div class="projects">
            <h3>Past Experiences</h3>
            <div class="projects_data">
                 <div class="data">
                    <h4>Event Title</h4>
                    <p>Event Organisation</p>
                 </div>
                 <div class="data">
                   <h4>Event Title</h4>
                    <p>Event Organisation</p>
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
      <div class="btnedit">
      <a href="editprofile.php"><button >Edit</button> </a>
      </div>
    </div>
    
</div>

</body>
<!-- Swiper js!-->
<script src="swiper-bundle.min.js"></script> 

<!-- JavaScript -->
<script src="script.js"></script>

</html>