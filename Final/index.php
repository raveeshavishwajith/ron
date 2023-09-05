<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RON</title>
  <link rel="icon" type="image/x-icon" href="src/favicon/favicon1.png" />
  <link rel="stylesheet" href="style/home.css" />
  <script src="script.js" defer></script>
  <style></style>
</head>

<body style="display: block">
  <div id="preloader"></div>
  <div class="home">
    <header>
      <div class="navbar">
        <div class="logo">
          <img src="src/index/logo.jpg" height="60px" width="100%" />
        </div>

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
            <img src="src/index/toggle.png" height="20px" width="20px" />
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

    <!--Cover Image-->

    <div class="upimg">
      <div class="upimg-1">
        <img src="src/index/cover.jpg" alt="an image" />
      </div>
      <div class="upimg-2"><a href="registerpage/register.php">Register</a></div>
    </div>

    <!--scroll-bar  -->

    <center>
      <div class="main-scroll-div">
        <img class="control prev" src="src/index/a1.png" />
        <div class="slider">
          <a href="societypages/ieee/ieee.php">
            <img class="child-img" src="src/index/pic1.jpg" alt="" />
          </a>
          <a href="#">
            <img class="child-img" src="src/index/pic2.jpg" alt="" />
          </a>
          <a href="#">
            <img class="child-img" src="src/index/pic3.jpg" alt="" />
          </a>
          <a href="societypages/aiesec/aiesec.php">
            <img class="child-img" src="src/index/pic4.jpg" alt="" />
          </a>
          <a href="#">
            <img class="child-img" src="src/index/pic5.jpg" alt="" />
          </a>
          <a href="#">
            <img class="child-img" src="src/index/pic1.jpg" alt="" />
          </a>
          <a href="#">
            <img class="child-img" src="src/index/pic2.jpg" alt="" />
          </a>
          <a href="#">
            <img class="child-img" src="src/index/pic3.jpg" alt="" />
          </a>
        </div>
        <img class="control next" src="src/index/a2.png" />
      </div>

      <script src="main.js"></script>
    </center>

    <!-- Content -->
    <section id="aboutus">
      <br><br>
      <center>
        <div class="test">
          <div class="card">
            <div class="img-box">
              <a href="#"><img src="src/index/img1.jpg" /></a>
              <h2>Vision</h2>
              <p>
                To orchestrate compelling and immersive experiences that empower
                students, faculty, and the broader community.to establish the
                university as a destination for memorable and transformative
                event experiences.
              </p>
            </div>
          </div>

          <div class="card">
            <div class="img-box">
              <a href="#"><img src="src/index/img2.jpg" /></a>
              <h2>Mission</h2>
              <p>
                Our mission is to provide seamless logistics, innovative
                programming, and a welcoming atmosphere that aligns with the
                university's values and goals, contributing to a vibrant campus
                culture that thrives on engagement and collaboration.
              </p>
            </div>
          </div>

          <div class="card">
            <div class="img-box">
              <a href="#"><img src="src/index/img3.jpg" /></a>
              <h2>Goal</h2>
              <p>
                Our goal is to enhance the overall university experience and
                strengthen the sense of belonging and pride within the
                community.To seamlessly coordinate and execute events that cater
                to the diverse interests and needs of the university community.
              </p>
            </div>
          </div>
        </div>
      </center>
    </section>

    <!-- About Us -->
    <section id="hero">
      <div class="heading">
        <h1>Volunteering</h1>
      </div>
      <div class="content">
        <div class="hero-content">
          <h2>Who are volunteers</h2>
          <p>
            Volunteers in university settings are individuals, often students,
            faculty members, or alumni, who offer their time and skills to
            contribute to various campus-related activities without financial
            compensation. They play a key role in organizing events, assisting
            in administrative tasks, supporting student clubs, and providing
            mentorship.<br /><br />
            These volunteers are motivated by a desire to enrich the
            university experience for themselves and others, build a sense of
            community, and develop valuable skills. They contribute to the
            overall vibrancy of campus life and help create a more inclusive
            and supportive environment. Through their efforts, volunteers
            enhance the educational journey and foster connections that extend
            beyond the classroom.
          </p>
        </div>
        <div class="hero-image">
          <img class="about" src="src/index/image.jpg" />
        </div>
      </div>
    </section>

    <!-- Contact Us -->
    <section id="contactus">
      <br><br>
      <div class="ContactUs-background">
        <div class="contactUS">
          <div class="content">
            <div class="leftside">
              <div class="address details">
                <img src="src/index/address.png" height="45px" width="45px" />
                <div class="topic">Address</div>
                <div class="text-one">Reach Out Now</div>
                <div class="text-two">University of Jaffna</div>
                <div class="text-three">Sri Lanka</div>
              </div>

              <div class="phone details">
                <img src="src/index/phone.png" height="45px" width="45px" />
                <div class="topic">Phone</div>
                <div class="text-one">021789654</div>
                <div class="text-two">021347890</div>
              </div>

              <div class="email details">
                <img src="src/index/email.png" height="45px" width="45px" />
                <div class="topic">E-mail</div>
                <div class="text-one">info.reachoutnow@gmail.com</div>
                <div class="text-two">info.volunteer@gmail.com</div>
              </div>
            </div>

            <div class="rightside">
              <div class="topic-text">Contact Us</div>
              <p>
                "Reach Out to Us – We're here to help! Fill out the form below
                to get in touch with our team. Your questions and feedback are
                important to us."
              </p>

              <form action="#">
                <div class="input-box">
                  <input type="text" placeholder="Enter your name" />
                </div>

                <div class="input-box">
                  <input type="text" placeholder="Enter your email" />
                </div>

                <div class="input-box message-box">
                  <textarea></textarea>
                </div>

                <div class="button">
                  <input type="button" value="Submit" />
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- footer -->
    <footer>
      <div class="row">
        <div class="col ronCol">
          <div class="logo-name2">RON</div>
          <br />
          <p>
            RON involves planning, organizing, and executing a wide range of
            events that cater to the needs and interests of the university
            community. It encompasses creating engaging experiences, fostering
            connections, and supporting the university's educational and
            cultural objectives. The goal is to enhance campus life, promote
            community engagement, and contribute to a vibrant and inclusive
            campus environment.
          </p>
        </div>
        <div class="col">
          <h3>
            Office
            <div class="underline"><span></span></div>
          </h3>
          <p>Reach Out Now</p>
          <p>University of Jaffna</p>
          <p>Sri Lanka</p>
          <p class="email-id">info.reachoutnow@gmail.com</p>
          <h4>0212 223 367</h4>
        </div>
        <div class="col">
          <h3>
            Links
            <div class="underline"><span></span></div>
          </h3>

          <p><a href="#">Home</a></p>
          <p><a href="#">Pages</a></p>
          <p><a href="#">Details</a></p>
          <p><a href="#">Contact Us</a></p>
        </div>
        <div class="col">
          <h3>
            Social Accounts
            <div class="underline"><span></span></div>
          </h3>

          <p>
            <img src="src/index/facebook.png" height="20px" width="20px" />
            Facebook
          </p>
          <p>
            <img src="src/index/instergram.png" height="20px" width="20px" />
            Instergram
          </p>
          <p>
            <img src="src/index/whatsapp.png" height="20px" width="20px" />
            Whatsapp
          </p>
          <p>
            <img src="src/index/linkin.png" height="20px" width="20px" />
            LinkIn
          </p>
        </div>
      </div>
      <hr />
      <p class="copyright">
        Copyright &copy; 2023 Designed by <b>Team RON</b>
      </p>
    </footer>
  </div>

  <script>
    var loader = document.getElementById("preloader");
    window.addEventListener("load", function() {
      loader.style.display = "none";
    });
  </script>
</body>

</html>