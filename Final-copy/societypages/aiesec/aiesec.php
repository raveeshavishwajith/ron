<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <style>

.banner{
    height: 279px;
    width: 100%;
    position: relative;
    


}

.banner img{
    width:100%;
    border-radius: 25px;
    padding: 10px;
}


.introduction
{
    padding-top: 60px;
}

.society-logo{
    height: 250px;
    width: 250px;

    position: absolute;
    top: 70%;
    left:40%; 
}

.society-logo img{
   border-radius: 50%;
   width: 250px;
   height: 250px;
    border: 5px solid white;

}


.introduction-image{
    max-width:25%;
    background:azure;
    display:flex;
    justify-content: center;
    align-items: center;
}
.introduction-image img{
    max-width:100%;
    width: 300px;
    height:200px;
    
}

.about-us-image img{
    width: 350px;
    height: 250px;
}

header {
    position: relative;
    padding: 0 2rem;
}

.navbar {
    width: 100%;
    height: 80px;
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.navbar .links {
    display: flex;

}


.links li {
    list-style: none;
    gap: 26rem;
}


.navbar .links li a,
.navbar .links .nav-dropbtn {
    color: rgb(6, 0, 0);
    text-decoration: none;
    font-size: 20px;
    transition: all 0.3s;
    margin-right: 25px;
    text-underline-offset: 8px;
}

.navbar .links li a:hover {
    color: #080808ed;
    text-decoration: underline 5px #7a83baed;

}


.navbar .toggle_btn {
    color: aliceblue;
    font-size: 1.5rem;
    cursor: pointer;
    display: none;
}


.navbar .action_btn button {
    background-color: #090752;
    margin-right: 0px;
    border-radius: 13px;
    padding: 10px;
    width: 90px;
}


.navbar .action_btn button a {
    color: white;
    font-weight: bold;
    font-size: 15px;
    text-decoration: none;
}

.navbar .action_btn button:hover {
    transition: 0.5s;
    scale: 1.05;
}



.navbar .action_btn button:active {
    scale: 0.95;
}

.nav-dropbtn {
    text-decoration: none;
    border: none;
    cursor: pointer;
}


.nav-dropdown {
    position: relative;
    display: inline-block;
}

.nav-dropdown-content {
    display: none;
    position: absolute;
    background-color: #fff;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    min-width: 160px;
    z-index: 1;
}

.nav-dropdown:hover .nav-dropdown-content {
    display: block;
}

.nav-dropdown-content a {
    color: #333;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.nav-dropdown-content a:hover {
    background-color: #b1afaf;
}

.dropdown_menu {
    position: absolute;
    display: none;
    right: 2rem;
    top: 60px;
    height: 0;
    width: 300px;
    background: rgba(12, 93, 223, 0);
    backdrop-filter: blur(45px);
    border-radius: 10px;
    overflow: hidden;
    transition: height 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    align-items: center;
    justify-content: center;
    display: flex;
}

.dropdown_menu.open {
    height: 340px;
}

.dropdown_menu li,
.dropdown_menu .toggle-dropdown .toggle-dropbtn li {
    padding: 0.7rem;
    display: flex;
    align-items: center;
    justify-content: center;
}


.dropdown_menu li a,
.dropdown_menu .toggle-dropdown li a {
    text-decoration: none;
    font-weight: bold;
    color: #090752;
}

.dropdown_menu li a:hover {
    background-color: #adaaaa;
    text-decoration: none;
    color: rgb(6, 6, 6);
    width: 100%;
    align-items: center;
    display: flex;
    justify-content: center;

}

.dropdown_menu li a button {
    width: 100%;
    display: flex;
    justify-content: center;
    color: white;
    background-color: #090752;
    border-radius: 13px;
    padding: 5px;
}


.toggle-dropbtn {
    text-decoration: none;
    border: none;
    cursor: pointer;
}


.toggle-dropdown {
    position: relative;
    display: block;
}

.toggle-dropdown-content {
    display: none;
    position: absolute;
    background-color: #fff;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    min-width: 160px;
    z-index: 1;
    margin-left: 30px;
}

.toggle-dropdown:hover .toggle-dropdown-content {
    display: block;
}

.toggle-dropdown-content a {
    color: #333;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.toggle-dropdown-content a:hover {
    background-color: #b1afaf;
}



@media(max-width:992px) {

    .navbar .links,
    .navbar .action_btn {
        display: none;
    }

    .navbar .toggle_btn {
        display: block;
    }

    .dropdown_menu {
        display: block;

    }
}

@media (max-width:576px) {
    .dropdown_menu {
        left: 2rem;
        width: unset;
    }
}


    </style>

    <link rel="stylesheet" href="society-pages.css?<?php echo time()?>">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>aiesec</title>
    
</head>
<body>

<header>
      <div class="navbar">
        
        <!-- <div class="logo"> -->
          <img src="logo.jpg" height="60px" width="170px" />
        <!-- </div> -->

        <ul>
          <div class="links">
            <li><a href="index.php">Home</a></li>

            <div class="nav-dropdown">
              <li>
                <div class="nav-dropbtn">Pages</div>
              </li>
              <div class="nav-dropdown-content">
                <a href="societypages/ieee/ieee.php">IEEE</a>
                <a href="#">Yarl IT Hub</a>
                <a href="">Gavel Club</a>
                <a href="societypages/aiesec/aiesec.php">AIESEC</a>
              </div>
            </div>

            <li><a href="#aboutus">About Us</a></li>
            <li><a href="#contactus">Contact Us</a></li>
          </div>
        </ul>

        <div class="action_btn">
          <button><a href="loginpage/login.php">Login</a></button>
          <button><a href="registerpage/register.php">SignUp</a></button>
        </div>

        

        <div class="toggle_btn">
          <div class="icon">
            <img src="toggle.png" height="20px" width="20px" />
          </div>
        </div>

        <div class="dropdown_menu">
          <li><a href="index.html">Home</a></li>

          <div class="toggle-dropdown">
            <li><a class="toggle-dropbtn">Pages</a></li>
            <div class="toggle-dropdown-content">
              <a href="societypages/ieee/ieee.php">IEEE</a>
              <a href="#">Yarl IT Hub</a>
              <a href="#">Gavel Club</a>
              <a href="societypages/aiesec/aiesec.php">AIESEC</a>
            </div>
          </div>

          <li><a href="#aboutus">About Us</a></li>
          <li><a href="#contactus">Contact Us</a></li>
          <li>
            <a href="loginpage/login.php"><button>Login</button></a>
          </li>
          <li>
            <a href="registerpage/register.php"><button>SignUp</button></a>
          </li>
        </div>
      </div>
    </header>

    <script>
      const toggleBtn = document.querySelector(".toggle_btn");
      const toggleBtnIcon = document.querySelector(".toggle_btn .icon");
      const dropDownMenu = document.querySelector(".dropdown_menu");

      toggleBtn.onclick = function() {
        dropDownMenu.classList.toggle("open");
        const isOpen = dropDownMenu.classList.contains("open");
      };
    </script>
  

    <div class="banner">
        <img src='aiesec-banner.jpg' alt="AIESEC-Banner">

    </div>

    <div class="society-logo">
        <img src="aisec-logo.jpg" style="width:auto" alt="AIESEC">
    </div>

    <div class="introduction">
        <div class="text">
        <div class="header">
            <h1>Introduction</h1>
        </div>
        <div class="details">
            <p> IAIESEC, an acronym for "Association Internationale des Étudiants en Sciences Économiques et Commerciales," which translates to the "International Association of Students in Economic and Commercial Sciences," is a global non-profit youth-run organization. Established in 1948 after World War II, AIESEC was founded in response to the need for cross-cultural understanding and cooperation among young people to prevent future conflicts.

AIESEC's primary objective is to provide young people with transformative experiences that facilitate their personal and professional development. Through international exchange programs, leadership development opportunities, and community engagement projects, AIESEC aims to empower young individuals to become responsible and globally minded leaders.</p>
<p>In conclusion, AIESEC stands as a testament to the power of youth engagement and collaboration on a global scale. Through its exchange programs, leadership development initiatives, and community projects, AIESEC empowers young individuals to become catalysts for positive change in both their own lives and the world around them.</p>
        </div>
        </div>


        <div class="introduction-image">
        <img src="aiesec.jpg" alt="IEEE - Advancing technology for humanity">
        </div>

</div>   

    

    <div class="about-us">

   
        <div class="image">
            <img src="aiesec-uoj.jpg" alt="IEEE-SB-UoJ">
        </div>
        <div class="text">
            <div class="header">
            <h1>About US</h1>
            </div>
        <div class="details">
        <p> The AIESEC branch within a university is a dynamic and student-led segment of the larger AIESEC organization. It functions as a platform for students to engage in international exchange programs, leadership development, and community initiatives while pursuing their academic studies. AIESEC university branches play a vital role in connecting students with transformative experiences that contribute to their personal and professional growth.

Key Components and Activities:

International Exchange Programs: AIESEC university branches facilitate international exchange opportunities for their student members. Through these programs, students can embark on internships or volunteer projects abroad, gaining exposure to new cultures, languages, and work environments. These experiences foster adaptability, cultural sensitivity, and a global perspective.

Leadership Development: One of the core pillars of AIESEC, leadership development is a prominent focus of university branches. Members have the chance to take on leadership roles within the branch, organizing events, managing projects, and honing skills such as communication, teamwork, and problem-solving.

Campus Engagement: AIESEC university branches often organize workshops, seminars, and events on campus to engage students and raise awareness about the organization's mission and opportunities. These events provide a platform for students to interact with AIESEC members, learn about the benefits of international experiences, and understand the impact they can make.

Recruitment and Onboarding: University branches recruit new members regularly to expand their reach and impact. They host recruitment drives, information sessions, and orientations to onboard fresh faces into the AIESEC community.

Community Projects: Many AIESEC university branches undertake local community projects that align with the organization's values. These projects can range from environmental initiatives and education campaigns to social welfare programs. This involvement allows students to contribute positively to their local communities.

Networking and Global Connections: Being part of an AIESEC university branch provides students with a unique network of peers from diverse backgrounds and nationalities. This network extends beyond their university and offers connections to the larger AIESEC community worldwide.

Personal and Professional Development: In addition to international experiences, AIESEC university branches often offer training sessions, workshops, and skill-building opportunities that enhance members' personal and professional capabilities.

Events and Conferences: University branches may organize local conferences, seminars, and workshops that focus on topics like leadership, global issues, and personal development. These events offer valuable learning and networking opportunities for students.

Impact:

AIESEC university branches have a significant impact on students' lives by providing them with a platform to expand their horizons, develop leadership skills, and contribute meaningfully to both their local and global communities. The experiences gained through AIESEC can shape students' perspectives, career aspirations, and sense of responsibility as global citizens.

In conclusion, an AIESEC university branch serves as a hub of learning, growth, and cultural exchange for students. Through its various programs and activities, it empowers students to step outside their comfort zones, embrace leadership roles, and become part of a global movement dedicated to fostering understanding and positive change.
</p>
            
        </div>
         </div>
</div>

<div class="upcoming-events">
    <h1>OUR <span id="upcoming">UPCOMING</span> EVENTS</h1>
</div>
    <div class="flyers">

    <div class="slideshow-container">

<div class="mySlides fade">

  <img src="flyer1.jpg">
  
</div>

<div class="mySlides fade">
 
  <img src="flyer2.jpg">
  
</div>

<div class="mySlides fade">
 
  <img src="flyer3.jpg">
 
</div>

<div class="dot-container" style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span> 
    <span class="dot" onclick="currentSlide(2)"></span> 
    <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</div>


<div class="footer">
        <div class="footer-content">
            <h3>AIESEC - University of Jaffna</h3>

            <ul class="socials">
                <li>
                    <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                </li>
                <li>
                    <a href="#"><i class='bx bxl-youtube' ></i></a>
                </li>
            </ul>

        </div>
        <div class="footer-bottom">
            <p>copyright&copy; 2023 designed by <span>team RON</span></p>
        </div>

</div>
    
</body>
</html>