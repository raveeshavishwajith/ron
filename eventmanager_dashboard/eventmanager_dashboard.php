
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventManager_Dashboard</title>

    <!-- swipper css -->
    <link rel="stylesheet" href="swiper-bundle.min.css">

    <link rel="stylesheet" href="eventmanager_dashboard_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" ></script>
</head>
<body>

<section id="menu">
    <div class="logo">
        <img src="ron_logo.jpeg" alt="Logo here">
        <h2> Event Manager</h2>
    </div>

    <!-- <div class="profilepic">
        <img src="../src/profile_pictures/<?php echo $row['prof_location']?>" alt="">
    </div>

    <div class="welcome">
        <h1>Welcome,</h1>
        <h2><?php echo $row['first_name']." ".$row['last_name'] ?></h2>
    </div> -->

    <div class="profile-details">
        
        <table>

        <tbody>
                <tr>
                    <td>First Name:</td>
                    <td>sample data</td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td>sample data </td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>sample data </td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>sample data </td>
                </tr>
                <tr>
                    <td>Contact No:</td>
                    <td>sample data </td>
                </tr>
                <tr>
                    <td>Course:</td>
                    <td>sample data </td>
                </tr>
                <tr>
                    <td>Year of Study:</td>
                    <td>sample data </td>
                </tr>

                <tr>
                    <td>Past Volunteer experiences:</td>
                    <td>sample data </td>
                </tr>


            </tbody>
            
        </table>
    </div>

    <div class="items">
        <!-- <li> <i class="fas fa-menorah" ></i><a href="#"> Dashboard</a></li> -->
        <!-- <li><i class="fas fa-user" ></i><a href="#"> Profile</a></li> -->
        <!-- <li><i class="fas fa-database" ></i><a href="#"> complaint </a></li> -->
        <!-- <li><i class="fas fa-question-circle" ></i><a href="#"> Help</a></li> -->
        <!-- <li><i class="fas fa-user" ></i><a href="#"> Calendar</a></li> -->
        <li><i class="fas fa-sign-out-alt"></i><a href="#"> Logout</a></li>

    </div>
</section>




<section id="interface">
    <div class="navigation" id="1">
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
        <h1 class="i-name" > Added Events</h1>
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
                       <br><br><br><br><br><br>
                        <button class="btnMore" onclick="openPopup('popup1')" > View More</button>
                        <div class="popup" id="popup1">
                            <img src="flyer.jpg">
                            <h2> Event Details!</h2>
                            <p> Can see more details of event entered by event 
                                manager
                            </p>
                            <button type="button"  onclick="closePopup('popup1')" >Exit</button>
                            <button type="button" > Remove Event</button>
                            <button type="button" > Edit Event</button>
                            <button type="button" > Applicants</button>

                            
                            
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
                        <h2 class="name">WIE EVENT 2</h2>
                        <p class="description"> Event organisation </p>
                       <br><br><br><br><br><br>
                       <button class="btnMore" onclick="openPopup('popup2')" > View More</button>
                        <div class="popup" id="popup2">
                            <img src="flyer.jpg">
                            <h2> Thank you!</h2>
                            <p> Can see more details of event entered by event 
                                manager
                            </p>
                            <button type="button"  onclick="closePopup('popup2')" >Exit</button>
                            <button type="button" > Remove Event</button>
                            <button type="button" > Edit Event</button>
                            <button type="button" > Applicants</button>
                            
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
                        <h2 class="name">WIE EVENT 3</h2>
                        <p class="description"> Event organisation </p>
                       <br><br><br><br><br><br>
                       <button class="btnMore" onclick="openPopup('popup3')" > View More</button>
                        <div class="popup" id="popup3">
                            <img src="flyer.jpg">
                            <h2> Thank you!</h2>
                            <p> Can see more details of event entered by event 
                                manager
                            </p>
                            <button type="button"  onclick="closePopup('popup3')" >Exit</button>
                            <button type="button" > Remove Event</button>
                            <button type="button" > Edit Event</button>
                            <button type="button" > Applicants</button>
                            
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
                        <h2 class="name">WIE EVENT 4</h2>
                        <p class="description"> Event organisation </p>
                        <br><br><br><br><br><br>
                        <button class="btnMore" onclick="openPopup('popup4')" > View More</button>
                        <div class="popup" id="popup4">
                            <img src="flyer.jpg">
                            <h2> Thank you!</h2>
                            <p> Can see more details of event entered by event 
                                manager
                            </p>
                            <button type="button"  onclick="closePopup('popup4')" >Exit</button>
                            <button type="button" > Remove Event</button>
                            <button type="button" > Edit Event</button>
                            <button type="button" > Applicants</button>
                        </div>
                        
                    </div>
                </div>
            </div>
       
        <div class="swiper-button-next swiper-navBtn"> </div>
        <div class="swiper-button-prev swiper-navBtn"> </div>
        <div class="swiper-pagination"></div>
    </div>
    
   
</section>


<s id="interface">



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


function openPopup(popupId){
    let popup = document.getElementById(popupId);
    popup.classList.add("open-popup");
}

function closePopup(popupId){
    let popup = document.getElementById(popupId);
    popup.classList.remove("open-popup");
}

</script>
    
</html>