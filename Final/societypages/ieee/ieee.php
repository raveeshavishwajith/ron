<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="../../src/favicon/favicon1.png" />
  <link rel="stylesheet" href="society-pages.css?<?php echo time() ?>">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>IEEE</title>
</head>

<body>

  <header>
    <div class="navbar">
      <div class="logo">
        <img src="logo.jpg" height="60px" width="100%" />
      </div>

      <ul>
        <div class="links">
          <li><a href="../../index.php">Home</a></li>

          <div class="nav-dropdown">
            <li>
              <div class="nav-dropbtn">Pages</div>
            </li>
            <div class="nav-dropdown-content">
              <a href="#">IEEE</a>
              <a href="#">Yarl IT Hub</a>
              <a href="">Gavel Club</a>
              <a href="../aiesec/aiesec.php">AIESEC</a>
            </div>
          </div>

          <li><a href="../../#aboutus">About Us</a></li>
          <li><a href="../../#contactus">Contact Us</a></li>
        </div>
      </ul>

      <div class="action_btn">
        <button><a href="../../loginpage/login.php">Login</a></button>
        <button><a href="../../registerpage/register.php">SignUp</a></button>
      </div>

      <div class="toggle_btn">
        <div class="icon">
          <img src="toggle.png" height="20px" width="20px" />
        </div>
      </div>

      <div class="dropdown_menu">
        <li><a href="../../index.php">Home</a></li>

        <div class="toggle-dropdown">
          <li><a class="toggle-dropbtn">Pages</a></li>
          <div class="toggle-dropdown-content">
            <a href="#">IEEE</a>
            <a href="#">Yarl IT Hub</a>
            <a href="#">Gavel Club</a>
            <a href="../aiesec/aiesec.php">AIESEC</a>
          </div>
        </div>

        <li><a href="#aboutus">About Us</a></li>
        <li><a href="#contactus">Contact Us</a></li>
        <li>
          <a href="../../loginpage/login.php"><button>Login</button></a>
        </li>
        <li>
          <a href="../../registerpage/register.php"><button>SignUp</button></a>
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
    <img src='ieee-banner.png' alt="IEEE-Banner">

  </div>

  <div class="society-logo">
    <img src="ieee-logo.png" alt="IEEE-SB-UoJ">
  </div>

  <div class="introduction">
    <div class="text">
      <div class="header">
        <h1>Introduction</h1>
      </div>
      <div class="details">
        <p> IEEE, which stands for the Institute of Electrical and Electronics Engineers, is a prominent and globally recognized professional association dedicated to advancing technology for the betterment of humanity. Founded in 1963, IEEE spans across various fields of engineering, technology, and related disciplines, fostering innovation, collaboration, and knowledge-sharing among professionals, researchers, and students around the world.

          As the world's largest technical professional organization, IEEE plays a pivotal role in shaping the future of technology by providing a platform for experts to come together, exchange ideas, and contribute to advancements in areas such as electrical engineering, computer science, electronics, telecommunications, robotics, and more. With its extensive network of members and chapters across continents, IEEE serves as a catalyst for cutting-edge research, development, and standards-setting in diverse technological domains.

          IEEE offers a wide array of resources and opportunities, including conferences, journals, publications, educational programs, and standards development. It fosters interdisciplinary collaboration, encouraging experts from different fields to collaborate on projects that address complex challenges and create solutions that transcend traditional boundaries.

          Whether through its role in promoting technical excellence, driving innovation, or serving as a platform for lifelong learning and professional growth, IEEE continues to shape the course of technology and its impact on society, striving to improve the quality of life for people around the world through the application of advanced technologies.</p>
      </div>
    </div>

    <div class="image">
      <img src="ieee.jpg" alt="IEEE - Advancing technology for humanity">
    </div>



  </div>

  <div class="about-us">


    <div class="image">
      <img src="ieee-logo.png" alt="IEEE-SB-UoJ">
    </div>
    <div class="text">
      <div class="header">
        <h1>About US</h1>
      </div>
      <div class="details">
        <p> An IEEE Student Branch is a dynamic and student-run organization affiliated with the global Institute of Electrical and Electronics Engineers (IEEE) that operates within universities and colleges around the world. These student branches serve as platforms for students interested in various fields of engineering, technology, and related disciplines to come together, learn, collaborate, and engage in activities that enhance their skills, knowledge, and professional development.

          At the university level, an IEEE Student Branch offers a vibrant community and a wide range of activities that contribute to the academic and personal growth of its members
          In essence, an IEEE Student Branch at a university acts as a hub of learning, collaboration, and innovation, enriching students' academic experience and preparing them for successful careers in the rapidly evolving fields of engineering and technology.
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

        <img src="ieeeflyer1.jpeg">

      </div>

      <div class="mySlides fade">

        <img src="ieeeflyer2.jpeg">

      </div>

      <div class="mySlides fade">

        <img src="ieeeflyer3.jpeg">

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
        if (n > slides.length) {
          slideIndex = 1
        }
        if (n < 1) {
          slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
      }
    </script>

  </div>


  <div class="footer">
    <div class="footer-content">
      <h3>IEEE Student Branch - University of Jaffna</h3>

      <ul class="socials">
        <li>
          <a href="#"><i class='bx bxl-facebook-circle'></i></a>
        </li>
        <li>
          <a href="#"><i class='bx bxl-youtube'></i></a>
        </li>
      </ul>

    </div>
    <div class="footer-bottom">
      <p>copyright&copy; 2023 designed by <span>team RON</span></p>
    </div>

  </div>

</body>

</html>