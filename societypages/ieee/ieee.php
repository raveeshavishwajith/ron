<?php
  include '../../php/queries.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="society-pages.css?<?php echo time() ?>">
  <link rel="icon" type="image/x-icon" href="../../src/favicon/favicon1.png" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>IEEE</title>
  <style>
    @media only screen and (max-width: 768px) {
      .banner {
        display: flex;
        flex-direction: column;
        align-items: center;
        height: auto;
        position: relative;
        margin-bottom: 0;
      }

      .banner img {
        bottom: 0;
        width: 100%;
        height: auto;

      }

      .society-logo {
        position: relative;
        width: 120px;
        height: 120px;
        margin-top: 0px;
      }

      .society-logo img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
      }

      .introduction {
        width: 100%;
        margin-top: 20px;
      }

      p {
        font-size: 15px;
      }
    }
  </style>
</head>

<body>

  <header>
    <div class="navbar">
      <div class="logo">
        <img src="../../src/index/logo.jpg" height="60px" width="100%" />
      </div>

      <ul>
        <div class="links">
          <li><a href="../../index.php">Home</a></li>

          <div class="nav-dropdown">
            <li>
              <div class="nav-dropbtn">Pages</div>
            </li>
            <div class="nav-dropdown-content">
              <a href="../ieee/ieee.php">IEEE</a>
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
            <a href="../ieee/ieee.php">IEEE</a>
            <a href="#">Yarl IT Hub</a>
            <a href="#">Gavel Club</a>
            <a href="../aiesec/aiesec.php">AIESEC</a>
          </div>
        </div>

        <li><a href="../../#aboutus">About Us</a></li>
        <li><a href="../../#contactus">Contact Us</a></li>
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
        <p>The IEEE student branch of the University of Jaffna, consists of IEEE members from the Department of Computer Science and Faculty of Engineering of the University of Jaffna. Located in the northern part of the country. It was formed in 2018 amidst numerous challenges and barriers.

          As a newly formed student branch, it strives among more than 100,000 Student and Graduate Student members of IEEE worldwide. It focuses on achieving IEEE’s objectives, namely fostering technological innovation and excellence for the benefit of humanity and promote the theory as well as the practice of all aspects of Computer Science, Computer Engineering, Information Communication Technology, Electrical and Electronics. It provides undergraduates a platform to prosper and flourish their innovative ideas.</p>
        </p>

      </div>
    </div>
  </div>

  <div class="upcoming-events">
    <h1>OUR <span id="upcoming">UPCOMING</span> EVENTS</h1>
  </div>
  <div class="flyers">

    <div class="slideshow-container">

      <?php 
        $sql = "SELECT * FROM events WHERE organization = 'ieee'";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)){
      ?>
      
      <div class="mySlides fade">

        <img src="<?php echo $row['flyer']?>">

      </div>
      <?php
        }
        ?>

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
          <a href="https://www.facebook.com/IEEESBUoJ/"><i class='bx bxl-facebook-circle'></i></a>
        </li>
        <li>
          <a href="https://www.youtube.com/@ieeestudentbranch-universi6371/"><i class='bx bxl-youtube'></i></a>
        </li>
        <li>
          <a href="https://lk.linkedin.com/company/ieeesbuoj"><i class='bx bxl-linkedin-square'></i></a>
        </li>
        <li>
          <a href="https://twitter.com/IEEESBUOJ"><i class='bx bxl-twitter'></i></a>
        </li>

      </ul>

    </div>
    <div class="footer-bottom">
      <p>copyright&copy; 2023 designed by <span>team RON</span></p>
    </div>

  </div>

</body>

</html>