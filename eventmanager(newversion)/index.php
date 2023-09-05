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
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<a href="#todo">
					<i class='bx bxs-calendar-alt' ></i>
					<span class="text">ToDO List</span>
				</a>
			</li>
			<li>
				<a href="#myevents">
					<i class='bx bxs-group' ></i>
					<span class="text">My Events</span>
				</a>
			</li>
			<li>
				<a href="profilepage.php">
					<i class='bx bxs-user-circle' ></i>
					<span class="text">Profile</span>
				</a>
			</li>
			<li>
				
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
			<!-- <a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				
			</a> -->
			
			
			<a href="#" class="profile">
				<img src="profile_image.jpg" alt="dp here">
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

			<!-- <ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<p>Manage Time</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<p>Socialize</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<p>Service oriented</p>
					</span>
				</li>
			</ul> -->

	<section id="interface">
    
    
    <div class="slide-container swiper" >
	<h1 style="font-size:30px" > Events</h1>
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
                       
                        <a href="eventDetails.php" ><button class="btnMore"> View More</button></a>
                        
                            
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
                       
                        <a href="eventDetails.php" ><button class="btnMore"> View More</button></a>
                        
                            
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
                       
                        <a href="eventDetails.php" ><button class="btnMore"> View More</button></a>
                        
                            
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
                       
                        <a href="eventDetails.php" ><button class="btnMore"> View More</button></a>
                        
                            
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
				<div class="order" id="myevents">
					<div class="head">
						<h3>Events as Manager </h3>
						<a href="addEventForm.php"><i class='bx bx-plus' ></i></a>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Event Title</th>
								<th>Date </th>
								<th>Event action</th>
								<th>Application status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="flyer.jpg" alt="event flyer">
									<p>Event Name</p>
								</td>
								<td>27-10-2023</td>
								<td><span class="status pending">Remove</span></td>
								<td><span class="status completed"> <a href="applicants_list.php">view Applicants</a></span></td>
							</tr>
							<tr>
								<td>
								<img src="#" alt="event flyer">
									<p>Event Name</p>
								</td>
								<td>27-10-2023</td>
								<!-- <td><span class="status pending">Pending</span></td> -->
								<td><span class="status pending">Remove</span></td>
								<td><span class="status completed"> <a href="applicants_list.php">view Applicants</a></span></td>
							</tr>
							<tr>
								<td>
								<img src="#" alt="event flyer">
									<p>Event Name</p>
								</td>
								<td>27-10-2023</td>
								<!-- <td><span class="status process">Process</span></td> -->
								<td><span class="status pending">Remove</span></td>
								<td><span class="status completed"> <a href="applicants_list.php">view Applicants</a></span></td>
							</tr>
							<tr>
								<td>
								<img src="#" alt="event flyer">
									<p>Event Name</p>
								</td>
								<td>27-10-2023</td>
								<!-- <td><span class="status pending">Pending</span></td> -->
								<td><span class="status pending">Remove</span></td>
								<td><span class="status completed"> <a href="applicants_list.php">view Applicants</a></span></td>
							</tr>
							<tr>
								<td>
								<img src="#" alt="event flyer">
									<p>Event Name</p>
								</td>
								<td>27-10-2023</td>
								<!-- <td><span class="status completed">Completed</span></td> -->
								<td><span class="status pending">Remove</span></td>
								<td><span class="status completed"> <a href="applicants_list.php">view Applicants</a></span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="todo" id="todo">
					<div class="head">
						<h3>Todos </h3>
						<a href="addTodo.php"><i class='bx bx-plus' ></i></a>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
							<a href="addTodo.php"><button class="btn">Remove</button></a>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
							<a href="addTodo.php"><button class="btn" >Remove</button></a>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
							<a href="addTodo.php"><button class="btn" >Remove</button></a>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
							<a href="addTodo.php"><button class="btn" >Remove</button></a>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
							<a href="addTodo.php"><button class="btn">Remove</button></a>
						</li>
					</ul>
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