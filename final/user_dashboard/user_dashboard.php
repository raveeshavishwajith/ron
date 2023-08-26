<?php require_once '../php/queries.php' ;

    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        $sql = "SELECT * FROM members_details WHERE email = '$username'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User_Dashboard</title>

    <!-- swipper css -->
    <link rel="stylesheet" href="swiper-bundle.min.css">

    <link rel="stylesheet" href="user_dashboard_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" ></script>
</head>
<body>

<section id="menu">
    <div class="logo">
        <img src="ron_logo.jpeg" alt="Logo">
        <h2> Volunteer</h2>
    </div>

    <div class="profilepic">
        <img src="../src/profile_pictures/<?php echo $row['prof_location']?>" alt="">
    </div>

    <div class="welcome">
        <h1>Welcome,</h1>
        <h2><?php echo $row['first_name']." ".$row['last_name'] ?></h2>
    </div>

    <div class="items">
        <li> <i class="fas fa-menorah" ></i><a href="#"> Dashboard</a></li>
        <li><i class="fas fa-user" ></i><a href="#"> Profile</a></li>
        <li><i class="fas fa-database" ></i><a href="#"> complaint </a></li>
        <li><i class="fas fa-question-circle" ></i><a href="#"> Help</a></li>
        <li><i class="fas fa-user" ></i><a href="#"> Calendar</a></li>
        <li><i class="fas fa-sign-out-alt"></i><a href="#"> Logout</a></li>

    </div>
</section>




<section id="interface">
    <div class="navigation">
        <div class="n1">
            <div>
                <i id="menu-btn" class="fas fa-bars"></i>
            </div>
            <div class="search">
                <i class="fas fa-search"></i>
                <input type= "text" placeholder="search">
            </div>
        </div>
        <div class="profile">
            <i class="far fa-bell"></i>
            <img src="profile_image.jpg" alt="dp here">
         </div>
    </div>
    <br><br><br> <br>
    
    <div class="slide-container swiper" >
        <div class="slide-content">
        <h1 class="i-name" > Upcoming Events</h1> <br><br>
            <div class="card-wrapper swiper-wrapper">
                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"> </span>
                        <div class="card-image">
                            <img src="flyer.jpg" alt="Banner here" class="card-image">
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">WIE EVENT</h2>
                        <p class="description"> Event organisation </p>
                       
                        <button class="btnMore" onclick="openPopup()" > View More</button>
                        <div class="popup" id="popup">
                            <img src="flyer.jpg">
                            <h2> Thank you!</h2>
                            <p> Can see more details of event entered by event 
                                manager
                            </p>
                            <button type="button"  onclick="closePopup()" >Exit</button>
                            <button   type="button"  >Apply</button>
                        </div>
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
                        <h2 class="name">WIE EVENT</h2>
                        <p class="description"> Event organisation </p>

                        <button class="btnMore"> View More</button>
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
                        <h2 class="name">WIE EVENT</h2>
                        <p class="description"> Event organisation </p>

                        <button class="btnMore"> View More</button>
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
                        <h2 class="name">WIE EVENT</h2>
                        <p class="description"> Event organisation </p>
                        <br><br>

                        <button class="btnMore"> View More</button>
                    </div>
                </div>
            </div>
            </div>
        <br><br>
        <div class="swiper-button-next swiper-navBtn"> </div>
        <div class="swiper-button-prev swiper-navBtn"> </div>
        <div class="swiper-pagination"> </div>
    </div>
    

    <div class="slide-container2">
        <h3 class="i-name"> Profile</h3><br><br>
        <table width=100%>
            <tbody>
                <tr>
                    <td>Full Name:</td>
                    <td>ram</td>
                </tr>
                <tr>
                    <td>UserName:</td>
                    <td>ram123</td>
                </tr>
                <tr>
                    <td>UserName:</td>
                    <td>ram123</td>
                </tr>
                <tr>
                    <td>UserName:</td>
                    <td>ram123</td>
                </tr>
                <tr>
                    <td>UserName:</td>
                    <td>ram123</td>
                </tr>
                <tr>
                    <td>UserName:</td>
                    <td>ram123</td>
                </tr>
                <tr>
                    <td>UserName:</td>
                    <td>ram123</td>
                </tr>


            </tbody>
            
        </table>
        <br><br>
        <button class="btnMore" ><a href="#" >Edit</a></button>
    </div>
</section>


</body>

<script>
    $('#menu-btn').click(function(){
        $('#menu').toggleClass("active");
    })
</script>

<!-- Swiper js -->
<script src="swiper-bundle.min.js"></script>

<!-- JavaScript -->
<script src="script.js"></script>

<!-- popup view more -->
<script>
let popup = document.getElementById("popup");

function openPopup(){
    popup.classList.add("open-popup");
}

function closePopup(){
    popup.classList.remove("open-popup");
}

</script>
    
</html>